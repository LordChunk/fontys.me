<?php
include "media/includes/head.inc.php";

if($_SESSION['ingelogd'] !== true){
    header("location: /login");
}
?>
<!-- Body -->
<div class="container">
    <div class="form_div">
        <h5 class="form_header">A bit late? Don't worry I've got you covered.</h5>
        <form action="/media/includes/late.inc.php" method="POST" id="late_form">

            <div class="input-field">
                <br>
                <span>When do you expect to be in class?</span><br>
                <input type="time" id="time" name="time" placeholder="8:45" required>
                <!--<label for="subdomain">Subdomain</label>-->
            </div>
            <div class="input-field">
                <span>Reason (optional):</span><br>
                <textarea form="late_form" id="reason" name="reason" placeholder="Dentist"></textarea>
                <!--<label for="IP">IP (IPv4)</label>-->
            </div>

            <div id="button_error">
                <button class="input-confirm" type="submit" name="action">
                    <span>
                        Send email
                        <i class="material-icons right">send</i>
                    </span>
                </button>
                <p class="error_message <?=$_GET['error']; //Custom color when successful?>">
                    <?php
                    //Error messages
                    $error = $_GET['error'];
                    switch ($error)
                    {
                        case "taken":
                            echo "Sorry this domain is taken.";
                            break;
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
            </div>
        </form>
    </div>
</div>
<?php
include "media/includes/footer.inc.php";