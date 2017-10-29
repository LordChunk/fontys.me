<?php
/**
 * Created by PhpStorm.
 * User: Job
 * Date: 22/10/2017
 * Time: 13:50
 */

require_once "media/includes/head.inc.php";
if($_SESSION['ingelogd'] !== true){
    header("location: /login");
}
?>
<main>
    <div class="container">
        <section class="block">
            <h1>Notifications for Canvas</h1>
            <p>Fontys.me gives students the option to receive notifications about upcoming due dates from Canvas. Fontys.me will send you a notification to tell you when a project is due within a day, a week or if it’s due right now. To opt-in for these notifications simply click the bell in the bottom right and subscribe to the notifications.</p>
            <p>Right now, it is not possible to unsubscribe from specific due dates. You will also not be able to customise when or how many you’ll get your notifications you’ll get.</p>
        </section>
        <section class="block">
            <h1>Subscribe to Due Date Notifications</h1>
            <p>You are currently <b id="checkSubscription"></b> to Canvas Due Date Notifications.</p>
            <button onclick="register()" class="input-confirm">
                <span>
                    Enable notifications
                    <i class="material-icons">send</i>
                </span>
            </button>
            <p>
                You can disable notifications by clicking on the bell in the bottom right.
            </p>
        </section>
    </div>
</main>
<?php
require_once "media/includes/footer.inc.php"
?>