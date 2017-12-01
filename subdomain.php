<?php
include "media/includes/head.inc.php";
?>
<!-- Body -->
<main>
    <div class="container">
        <section class="block">
            <div class="form_div">
                <h1 class="form_header">Request a domain here:</h1>
                <form action="#" method="POST">

                    <div class="input-field">
                        <input type="text" id="subdomain" name="subdomain" placeholder="Subdomain" data-length="50" required>
                        <!--<label for="subdomain">Subdomain</label>-->
                    </div>
                    <div class="input-field">
                        <input type="text" id="IP" name="IP" placeholder="IP (IPv4)" required>
                        <!--<label for="IP">IP (IPv4)</label>-->
                    </div>

                    <div id="button_error">
                        <button class="input-confirm" type="submit" name="action">
                            <span>
                                Request domain
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
                                case "double_account":
                                    echo "Your email is registered twice in our database. <br>Please contact the developer at: j.vanooik@student.fontys.nl.";
                                    break;
                                case "limit_reached":
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
        </section>
        <section class="block" id="subdomain_explanation_block">
            <h2>How to request a subdomain:</h2>
            <p>
                This is a tutorial on how to request a <a href="http://lmgtfy.com/?q=What%27s+a+subdomain" target="_blank">subdomain</a> for fontys.me.
                This tutorial assumes you've already requested and setup your Linux web host via the <a href="https://apps.fhict.nl/selfservice/Webhosting/Linux" target="_blank">FHICT Self-service Portal</a>.
            </p><p>
                The standard IP for the Hera server is <b>145.85.4.70</b>; this will be what you fill in for the IP (IPv4) field.
            </p><p>
                For the subdomain, you can choose whatever you want, but keep in mind that currently you cannot change your subdomain. Also, you're only allowed to register one subdomain per account. So please, think carefully when choosing your subdomain.
            </p>
            <h3>Example:</h3>
            <p>
                I'm registering the subdomain local.fontys.me, which I host on the Hera server.
            </p>
            <img class="template_img" alt="template image subdomain" src="/media/images/subdomain_template.png"/>
        </section>
    </div>
</main>
<?php
include "media/includes/footer.inc.php";