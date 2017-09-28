<?php
session_start();
if($_SESSION['ingelogd'] !== true){
    header('location: https://dev.fontys.me/login.php');
} else {
    header("location: /");
}
