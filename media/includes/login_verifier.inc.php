<?php
if($_SESSION['ingelogd'] !== true){
    header("location: /login.php");
}