<?php
/**
 * Created by PhpStorm.
 * User: Job
 * Date: 07/10/2017
 * Time: 21:23
 */


///
///             THIS IS STILL WIP
///



session_start();
$UID = $_SESSION["UID"];
//Check when last email was send
require "connect-Freaze.inc.php";

//Build SQL query
$sql = "SELECT * FROM late_email WHERE UID=" . $UID;

$result = mysqli_query($conn, $sql);

if (!$result){
    echo "an error occured<br>";
    header('Location: /late?error=sql');
    exit();
}

$num_rows = mysqli_num_rows($result);
$row = mysqli_fetch_row($result)[0];
if ($num_rows == 0)
{
    echo "user has never user email service before <br>";
}
elseif ($num_rows == 1)
{
    $last_sent = mysqli_fetch_row($result)[1]; //Get last send email time
    if ($last_sent < time()+ (8 * 60 * 60))    //Check for within 12 hours
    {
        //Within 12 hours
        echo 'Wow no emails pls';
        header('Location: /late?error=cool_down');
        exit();
    }
}
else
{
    header("location : /late?error=multi_row");
    //var_dump($row);
    exit();
}

//User passed cool down check

require $_SERVER["DOCUMENT_ROOT"] . "/media/includes/FHICT_api.inc.php";
$service = new FHICTService();
//Fetch today's schedule
$schedule = $service->getServiceData('/schedule/me');
//get first lesson and teacherAbbreviation
$teacher = $schedule->{"data"}[0]->{"teacherAbbreviation"};
$searchResult = $service->getServiceData('people/search/' . $teacher);
/*
 * Check for failed requests
 * failed requests are mostly called by outdated session credentials.
 * This is a bug which will be fixed in a later version since it is quite complicated and is an issue
 * which only occurs if a user hasn't closed their browser for quite a long time
 */
if ($searchResult)
{
    foreach ($searchResult as $member)
    {
        if($member->{"personalTitle"} == $teacher)
        {
            $teacher_email = $member->{"mail"};
            $teacher_name = $member->{"givenName"} . " " . $member->{"surName"};
        }
    }
}
else
{
    header("location: /late?error=login_timeout");
    exit();
}
//Define student var
$student_email = $_SESSION['email'];
$student_name = $_SESSION["name"];
//Define reason and time vars
$reason = htmlspecialchars($_POST["reason"]);
$time = htmlspecialchars($_POST["time"] . "");
//Check if required info isn't empty
if (!$student_name || !$student_email)
{
    header("location: /late?error=email_name");
    exit();
} else if (!$_POST["time"]){
    header("Location: /late?error=empty_time");
    exit();
}
//Old email fetch method
////Get body var
//if(include "mail/email_body.inc.php")
//{
//    echo "email body loaded properly <br>"; //You have to output something and !include throws and error
//}
//else
//{
//    header("location: /late?error=body_fetch");
//    exit();
//}
//New email fetch method
$data = [
    "teacher_name" => $teacher_name,
    "student_name" => $student_name,
    "student_email" => $student_email,
    "reason" => $reason,
    "time" => $time
];
//Check for https
$prefix = $_SERVER['HTTPS'] ? 'https://' : 'http://';
//Direct path
$ch = curl_init($prefix . $_SERVER['HTTP_HOST']. '/media/includes/email_body.inc.php');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USE_SSL, true);
$email_body = curl_exec($ch);
if($email_body)
{
    echo "email body loaded properly <br>"; //You have to output something and !include throws and error
}
else
{
    header("location: /late?error=body_fetch");
    exit();
}
//Fetch credentials
if(include "mail/mail_credentials.inc.php")
{
    echo "email creds loaded properly <br>"; //You have to output something and !include throws and error
}
else
{
    header("location: /late?error=credentials_fetch");
    exit();
}
//Setup email
$mail->Body = $email_body;
echo "passed body loader";
$mail->Subject = "Te laat melding: ". $student_name;
//$mail->addAddress("j.vanooik@student.fontys.nl");
//$mail->addAddress("meowingdalmatian@protonmail.com");
$mail->addAddress($teacher_email);
$mail->addAddress($student_email);
//final
//$mail->addAddress($teacher_address);
//Send email
if($mail->send())
{
    echo "email was send successfully";

    //Email was send so delete old record in database and replace it with the new one
    //Remove old value and insert new last send time
    $sql = "DELETE FROM late_email WHERE UID=".$UID.";
             INSERT INTO late_email (UID, last_sent) VALUES (".$UID.", ".time().");";

    $result = mysqli_multi_query($conn, $sql);
}
else
{
    //echo "An error occured: <br>" . $mail->ErrorInfo;
    header("location: /late?error=email_sender");
    exit();
}
echo "<br><br><br>We made it !<br>";
header("location: /late?error=success");