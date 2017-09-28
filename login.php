<?php
session_start();
if($_SESSION['ingelogd'] !== true){
    include "media/includes/login.inc.php";
} else {
    header("location: ".$_SESSION['redirect_URL']);
}
