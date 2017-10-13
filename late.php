<?php
include "media/includes/head.inc.php";

                                    /*Temp admin restriction*/
if($_SESSION['ingelogd'] !== true && $_SESSION["username"] != "i380420"){
    header("location: /login");
}
?>
<!-- Body -->
<div class="container">
    <section class="block">
        <div class="form_div">
            <h2 class="form_header">A bit late? Don't worry I've got you covered.</h2>
            <form action="/media/includes/late.inc.php" method="POST" id="late_form">

                <div class="input-field">
                    <br>
                    <span>When do you expect to be in class?</span><br>
                    <input type="time" id="time" name="time" required>
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
    </section>

    <section class="block" id="email_explanation_block">
        <h2>What does this do?</h2>
        <p>
            This email service does the following.
            It will send an email to you and the teacher whom gives the first lesson today.
            If you have more than one teacher during the first lesson it will only send an email one of them.
            The email will look like this.
        </p>
            <img class="template_img" alt="template image email" src="/media/images/email_template.png">
        <p>
            Of course, your will look slightly different since it will include your name and your email address, etc.

        </p>
    </section>
</div>
<?php
include "media/includes/footer.inc.php";