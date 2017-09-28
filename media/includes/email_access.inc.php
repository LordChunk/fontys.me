<?php
/**
 * Created by PhpStorm.
 * User: Job
 * Date: 28/09/2017
 * Time: 11:31
 */

session_start(); // You'll have to start the session to destroy it (I know, pretty strange!)
$_SESSION = array(); // Unset all the variables
session_destroy(); // Destroy the session

header("location: ../../login.php");