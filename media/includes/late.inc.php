<?php
/**
 * Created by PhpStorm.
 * User: Job
 * Date: 07/10/2017
 * Time: 21:23
 */

session_start();

//Define reason and time vars
$email_address = $_POST["email_address"];
$reason = htmlspecialchars($_POST["reason"]);
$time = htmlspecialchars($_POST["time"] . "");

//Check if required info isn't empty
if (!$_POST["time"]){
    header("Location: /late?error=empty_time");
    exit();
}

//New email fetch method
$data = [
    "teacher_name" => htmlspecialchars("[Teacher name]"),
    "student_name" => htmlspecialchars("[Student name]"),
    "student_email" => htmlspecialchars("[Student email]"),
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


$mail->Subject = "Te laat melding: [Student name]";

$mail->addAddress($email_address);

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


echo "<br><br><br>We made it !<br>";

header("location: /late?error=success");