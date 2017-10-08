    <?php
    session_start();
    $title = "FHICT Student Dashboard";
    $nav = ["http://legacy.fontys.me" => "Legacy version"
    ];

    //Check if session is time out
    //Timeout is on 30 minutes
    if ($_SESSION['timeout'] !== null && $_SESSION['timeout'] + 30 * 60 < time()) {
        header("location: logout");
    }

    //Redirect link for login and such
    $_SESSION['redirect_URL'] = $_SERVER['REQUEST_URI'];
    
    //Check if user is logged in
    if ($_SESSION[ingelogd] !== true)
    {
        $nav = ["/login" => "Login"] + $nav;
    } else
    {
        $nav =  ["logout" => "Logout",
                "subdomain" => "Request a fontys.me subdomain",
                'late' => "I'm late email service"] + $nav;
    }
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <!--Custom tab colour -->
        <meta name="theme-color" content="#ee6e73">
        <!--Fix broken icons -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!--Search engine meta tags-->
        <meta name="description" content="This is a dashboard for all FHICT student. This dashboards helps students get all the information they need right on one webpage." />
        <meta name="keywords" content="FHICT, Fontys, Fontys.me, Job van Ooik, van Ooik, Dashboard Fontys, P14" />
        <meta name="author" content="Job van Ooik"
        <meta name="robots" content="index, follow" />

        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Gfonts roboto-->
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

        <!--Files I didn't find on the dark web-->
        <link rel="stylesheet" type="text/css" href="/media/css/main.css">

        <!-- Include file specific CSS -->
        <link rel="stylesheet" type="text/css" href="/media/css<?=substr_replace($_SERVER["SCRIPT_NAME"], "css", -3);?>">



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
                        <a id="open_mobile_nav">
                            <img id="logo" src="media/images/logo_150px.png"/>
                            <i class="material-icons mobile">menu</i>
                            <?=$title ?>
                        </a>
                    </li>


                <!--Normal nav bar -->
                    <?php foreach ($nav as $link => $tekst) {?>
                    <li class="desktop"><a href="<?=$link; ?>"><?=$tekst ?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
    </div>