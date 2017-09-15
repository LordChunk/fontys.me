<?php
session_start();
if($_SESSION['ingelogd'] !== true){
    include "media/includes/login.inc.php";

}include "media/includes/head.inc.php";?>
<!-- Body -->
<div class="container">
    <form method="post" action="media/includes/subdomain_add.inc.php">
        <input type="text" placeholder="Domain"/>
        <input type="text" placeholder="IP (IPv4)"/>
        <input type="number" placeholder="1"/>
        <button class="btn waves-effect waves-light" type="submit" name="action">Submit request
            <i class="material-icons right">send</i>
        </button>
    </form>

</div>
</body>
</html>