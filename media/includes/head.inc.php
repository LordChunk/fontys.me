    <?php
    session_start();
    $title = "CSS test build";
    $nav = [
        "subdomain" => "Request a fontys.me subdomain",
        "http://dev.fontys.me" => "Developer version",
        "http://fontys.me" => "fontys.me"
    ];

    $_SESSION['redirect_URL'] = $_SERVER['REQUEST_URI'];
    
    //Check if user is logged in
    if ($_SESSION[ingelogd] !== true)
    {
        $nav = ["/login" => "Login"] + $nav;
    } else
    {
        $nav =  ["/media/includes/logout.inc.php" => "Logout"] + $nav;
    }
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <!--Fix broken icons -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Gfonts roboto-->
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!--Materialze -->

        <!--Import jQuery before materialize.js-->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

        <!--Files I didn't find on the dark web-->
        <link rel="stylesheet" type="text/css" href="/media/css/main.css">

        <!-- Include file specific CSS -->
        <link rel="stylesheet" type="text/css" href="/media/css<?=substr_replace($_SERVER["SCRIPT_NAME"], "css", -3);?>">

        <!--My own javascript stuff -->
        <script src="/media/js/main.js" type="text/javascript"></script>

        <title><?=$title?></title>
    </head>
    <body>
    <div class="welcome">
        <!--Navigation bar -->
        <nav>
            <div class="mobile" id="mobile-nav">
                <!--Hidden mobile nav -->
                <ul class="side-nav">
                    <!-- Home button -->
                    <li><a href="/">Home</a></li>
                    <?php foreach ($nav as $link => $tekst) {?>
                        <li><a href="<?=$link; ?>"><?=$tekst ?></a></li>
                    <?php } ?>
                    <!-- Close nav button -->
                    <li><a id="close_mobile_nav" class="nav_trigger"><i class="material-icons">close</i></a></li>
                </ul>
            </div>
            <div class="desktop-nav">
                <ul>
                    <!--<li class="left"><a href="#" data-activates="mobile-demo"><i class="material-icons">menu</i></a></li>-->
                    <li class="left" id="title">
                        <a id="open_mobile_nav"><i class="material-icons mobile">menu</i><?=$title ?></a>
                    </li>


                <!--Normal nav bar -->
                    <?php foreach ($nav as $link => $tekst) {?>
                    <li class="desktop"><a href="<?=$link; ?>"><?=$tekst ?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
    </div>