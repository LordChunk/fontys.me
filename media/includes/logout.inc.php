<?php
/**
 * Created by PhpStorm.
 * User: Job
 * Date: 14/09/2017
 * Time: 20:01
 */

session_start(); // You'll have to start the session to destroy it (I know, pretty strange!)
$_SESSION = array(); // Unset all the variables
session_destroy(); // Destroy the session
?>
