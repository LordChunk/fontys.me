<?php

if($_SESSION['ingelogd'] !== true){
    include "media/includes/login.inc.php";
}
else
{
    header("location: /");
}
?>