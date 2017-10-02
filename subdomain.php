<?php
session_start();
if($_SESSION['ingelogd'] !== true){
    //include "media/includes/login.inc.php";

}include "media/includes/head.inc.php";?>
<!-- Body -->
<div class="container">
    <div class="form_div">
        <h5 class="form_header">Request a domain here:</h5>
        <form action="/media/includes/subdomain_add.inc.php" method="POST">

            <div class="input-field">
                <input type="text" id="subdomain" name="subdomain" placeholder="Subdomain" data-length="50">
                <!--<label for="subdomain">Subdomain</label>-->
            </div>
            <div class="input-field">
                <input type="text" id="IP" name="IP" placeholder="IP (IPv4)">
                <!--<label for="IP">IP (IPv4)</label>-->
            </div>

            <button class="btn waves-effect waves-light" type="submit" name="action">Request domain
                <i class="material-icons right">send</i>
            </button>
        </form>
    </div>
</div>
<?php
include "media/includes/footer.inc.php";