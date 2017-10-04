<?php
/**
 * Created by PhpStorm.
 * User: Job
 * Date: 04/10/2017
 * Time: 15:54
 */

//https://social.technet.microsoft.com/Forums/windowsserver/en-US/0e660077-1ff0-4ba4-91b5-73c33d35aa7e/sending-preformatted-html-body-with-attachments?forum=winserverpowershell
session_start();
require "FHICT_api.inc.php";
$service = new FHICTService();

$query = "stra";

$data = $service->getServiceData('people/search/' . $query);

if ($data)
{
    foreach ($data as $member)
    {
        if($member->{"personalTitle"} == $query)
        {
            echo $member->{"mail"};
        }
    }
}
else
{
    echo "Your query returned no results.";
}