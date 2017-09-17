<?php
session_start();
if($_SESSION['ingelogd'] !== true){
    include "media/includes/login.inc.php";

}include "media/includes/head.inc.php";?>
<!-- Body -->
<div class="container">
    <!-- Old
    <form method="post" action="media/includes/subdomain_add.inc.php">
        <input type="text" placeholder="Domain"/>
        <input type="text" placeholder="IP (IPv4)"/>
        <input type="number" placeholder="TTL"/>
        <button class="btn waves-effect waves-light" type="submit" name="action">Submit request
            <i class="material-icons right">send</i>
        </button>
    </form> -->
    <div class="input_field card-panel  ">
        <h5 id="picture-add">Request a domain here:</h5>
        <form action="/media/includes/subdomain_add.inc.php" method="POST">

            <div class="input-field">
                <input type="text" id="subdomain" name="subdomain" data-length="50">
                <label for="subdomain">Subdomain</label>
            </div>
            <div class="input-field">
                <input type="text" id="IP" name="IP">
                <label for="IP">IP (IPv4)</label>
            </div>

            <button class="btn waves-effect waves-light" type="submit" name="action">Request domain
                <i class="material-icons right">send</i>
            </button>
        </form>
    </div>
</div>
</body>
</html>