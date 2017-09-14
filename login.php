<?php
session_start();
if($_SESSION['ingelogd'] !== true){
    include "media/includes/login.inc.php";
}

//Start html
include "media/includes/head.inc.php";?>

<!-- Body -->
<div class="container">
    <h1>Sign up for a free fontys.me subdomain </h1>
    <p>You'll need to be required to login with your FHICT account first. You'll get one subdomain per account.</p>

</div>
</body>
</html>