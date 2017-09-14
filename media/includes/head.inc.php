<?php
$title = "WIP build";
$nav = [
    //"/" => "Home",
    "http://fontys.me" => "fontys.me",
    "login" => "Login",
    "subdomain" => "Request a fontys.me subdomain"
];
?>
<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="https://materialize.van-ooik.nl/css/materialize.min.css"  media="screen,projection"/>


    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


    <!--Logos-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Materialze -->

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="https://materialize.van-ooik.nl/js/materialize.min.js"></script>

    <!--Files I didn't find on the dark web-->
    <link rel="stylesheet" type="text/css" href="./media/css/main.css">
    <!--My own javascript stuff -->
    <script src="../js/main.js" type="text/javascript"></script>

    <title><?=$title?></title>
</head>
<body>
<div class="welcome">
    <!--Navigation bar -->
    <nav>
        <div class="nav-wrapper">
            <a href="/"><?=$title ?></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>


            <!--Normal nav bar -->
            <ul class="right hide-on-med-and-down">
                <?php foreach ($nav as $link => $tekst) {?>
                <li><a href="<?=$link; ?>"><?=$tekst ?></a></li>
                <?php } ?>
            </ul>

            <!--Hidden mobile nav -->
            <ul class="side-nav" id="mobile-demo">
                <?php foreach ($nav as $link => $tekst) {?>
                    <li><a href="<?=$link; ?>"><?=$tekst ?></a></li>
                <?php } ?>
            </ul>
        </div>
    </nav>
</div>