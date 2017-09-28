<?php
session_start();
if($_SESSION['ingelogd'] !== true){
    include "media/includes/login.inc.php";

}include "media/includes/head.inc.php";?>
<!-- Body -->
<div class="container">

    <div class="input_field card-panel  ">
        <h5 id="picture-add">Request a domain here:</h5>
        <form action="/media/includes/subdomain_add.inc.php" method="POST">

            <div class="input-field">
                <input type="text" id="subdomain" name="subdomain" data-length="63">
                <label for="subdomain">Subdomain</label>
            </div>
            <div class="input-field">
                <input type="text" id="IP" name="IP">
                <label for="IP">IP (IPv4)</label>
            </div>

            <button class="btn waves-effect waves-light" type="submit" name="action">Request domain
                <i class="material-icons right">send</i>
            </button>

            <p class="error_message <?=$_GET['error']; //Custom color when successful?>">
                <?php
                //Error messages
                $error = $_GET['error'];
                switch ($error)
                {
                    case "sql":
                        echo "An error occurred while executing an SQL query. <br>Please contact the developer at: j.vanooik@student.fontys.nl.";
                        break;
                    case "doubleAccount":
                        echo "Your email is registered twice in our database. <br>Please contact the developer at: j.vanooik@student.fontys.nl.";
                        break;
                    case "limitReached":
                        echo "You have reached your domain registration limit.";
                        break;
                    case "curl":
                        echo "An error occurred while executing CURL. <br>Please contact the developer at: j.vanooik@student.fontys.nl.";
                        break;
                    case "api":
                        echo "An API error occurred: " .  $_SESSION['api_error'] . "<br> Please check your input and try again.";
                        $_SESSION['api_error'] = null;  //Unset value
                        break;
                    case "success":
                        echo "Your subdomain has been added successfully.";
                }
                ?>
            </p>
        </form>
    </div>
</div>
<?php include "media/includes/footer.inc.php";