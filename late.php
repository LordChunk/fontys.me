<?php
include "media/includes/head.inc.php";

                                    /*Temp admin restriction*/
if($_SESSION['ingelogd'] !== true && $_SESSION["username"] != "i380420"){
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
                        case "login_timeout":
                            echo "Your session timed out, please log in and out and try again.";
                            break;
                        case "email_name":
                            echo "Please allow email access when you log in.<br> To fix this logout and log back in.";
                            break;
                        case "empty_time":
                            echo "Your time input was invalid.";
                            break;
                        case "body_fetch":
                            echo "An error occurred while loading the email content.";
                            break;
                        case "credentials_fetch":
                            echo "An error occurred while loading the email settings.";
                            break;
                        case "email_sender":
                            echo "An error occurred while sending the email";
                            break;
                        case "success":
                            echo "Your email was sent successfully, a copy of the email was send to your school address as well.";
                    }
                    ?>
                </p>
            </div>
        </form>
    </div>
</div>
<?php
include "media/includes/footer.inc.php";