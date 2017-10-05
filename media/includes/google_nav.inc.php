<?php
session_start();
/**
 * Created by PhpStorm.
 * User: Job
 * Date: 02/10/2017
 * Time: 20:09
 */

$departure = str_ireplace(" ", "+", $_POST["departure"]);
$arrival = str_ireplace(" ", "+", $_POST["arrival"]);
$language = $_POST["language"];

var_dump($departure, $arrival, $language);


//Check for enabled cookies
if(!count($_COOKIE) > 0)
{
    //echo "Cookies are disabled.";
    header("location: " . $_SESSION["redirect_URL"]."?error=enable_cookies");
    exit("Please enable cookies for this website.");
}
else
{
    echo "Cookies are enabled.<br>";

    //Check for empty post values
    if ($departure == null || $arrival == null || $language == null)
    {
        header("location: " . $_SESSION["redirect_URL"]. "?error=empty_field");
        exit("Please fill in all fields");
    }
    else
    {

        //Set cookies
        if(
           setcookie("departure", $departure, time()+60*60*24*30, "/") &&
           setcookie("arrival", $arrival, time()+60*60*24*30, "/") &&
           setcookie("language", $language, time()+60*60*24*30, "/")
        )
        {
            echo "All cookies were set successfully.<br>";
            header("location: " . $_SESSION["redirect_URL"] . "?error=success");
        }
        else
        {
            echo "One or more errors occurred while setting the cookies.";
            header("location: " . $_SESSION["redirect_URL"]."?error=cookies_internal");
            exit();
        }
    }
}






