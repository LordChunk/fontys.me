<?php
/**
 * Created by PhpStorm.
 * User: Job
 * Date: 04/10/2017
 * Time: 15:54
 */

?>

<a href="/">Home</a> <br><br>

<?php
//https://social.technet.microsoft.com/Forums/windowsserver/en-US/0e660077-1ff0-4ba4-91b5-73c33d35aa7e/sending-preformatted-html-body-with-attachments?forum=winserverpowershell
session_start();
require "FHICT_api.inc.php";
$service = new FHICTService();

//Fetch today's schedule
$schedule = $service->getServiceData('/schedule/me?days=1');

//get first lesson and teacherAbbreviation
$teacher = $schedule->{"data"}[0]->{"teacherAbbreviation"};

echo "Teacher abbreviation: ". $teacher . "<br>";

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
            //var_dump($member);
            echo "Teacher's email address: " . $member->{"mail"} . "<br>";
        }
    }
}
else
{
    $_SESSION['redirect_URL'] = $_SERVER['REQUEST_URI'];
    header("location: /login");
    echo "Your query returned no results.";
}

//mail test

mail('j.vanooik@student.fontys.nl', 'Testing email subject', 'Here you will put your email message');

//var_dump(json_encode(ini_get_all()));