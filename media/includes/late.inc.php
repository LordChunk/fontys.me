<?php
/**
 * Created by PhpStorm.
 * User: Job
 * Date: 07/10/2017
 * Time: 21:23
 */
session_start();


require $_SERVER["DOCUMENT_ROOT"] . "/media/includes/FHICT_api.inc.php";
$service = new FHICTService();

//Fetch today's schedule
$schedule = $service->getServiceData('/schedule/me');

//get first lesson and teacherAbbreviation
foreach ($schedule->{"data"} as $day)

    $teacher = $schedule->{"data"}[0]->{"teacherAbbreviation"};

//echo "Teacher abbreviation: ". $teacher . "<br>";

$searchResult = $service->getServiceData('people/search/' . $teacher);

//Define student var
$student_email = $_SESSION['email'];
$student_name = $_SESSION["name"];

//Define reason and time vars
$reason = htmlspecialchars($_POST["reason"]);
$time = htmlspecialchars($_POST["time"]);

//Check if required info isn't empty

if (!$student_name || !$student_email)
{
    header("location: /late?error=email_name");
    exit();
} elseif (!$_POST["time"])
{
    header("Location: /late?error=empty_time");
    exit();
}


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
            //Define teacher vars
            $teacher_email = $member->{"mail"};
            $teacher_name = $member->{"givenName"}. " " . $member->{"surName"};
        }
    }
}
else
{
    header("location: /late?error=login_timeout");
    exit();
}

//Get body var
if(!require "mail/email_body.inc.php")
{
    header("location: /late?error=body_fetch");
    exit();
}

//Fetch credentials
if (!require  "mail/mail_credentials.inc.php")
{
    header("location: /late?error=credentials_fetch");
    exit();
}

//Setup email


$mail->Body = $email_body;


$mail->Subject = "Telaat melding: ". $student_name;


$mail->addAddress("j.vanooik@student.fontys.nl");

//final
//$mail->addAddress($teacher_address);


//Send email
if($mail->send())
{
    echo "email was send successfully";
}
else
{
    //echo "An error occured: <br>" . $mail->ErrorInfo;
    header("location: /late?error=email_sender");
    exit();
}