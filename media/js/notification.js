console.log("notification.js loaded");
// $(document).ready(function () {
//
// });

function notifyMe() {
    // Let's check if the browser supports notifications
    if (!("Notification" in window)) {
        alert("This browser does not support desktop notification");
    }

    // Let's check whether notification permissions have already been granted
    else if (Notification.permission === "granted") {
        // If it's okay let's create a notification
        sendTestNotifcation();
    }

    // Otherwise, we need to ask the user for permission
    else if (Notification.permission !== "denied") {
        Notification.requestPermission(function (permission) {
            // If the user accepts, let's create a notification
            if (permission === "granted") {
                sendTestNotifcation();
            }
        });
    }

    // At last, if the user has denied notifications, and you
    // want to be respectful there is no need to bother them any more.
}
const logoUrl = "https://fontys.me/media/images/logo_square.png";

function sendTestNotifcation() {
    var options = {
        body: "Hallo kerel mahn",
        tag: logoUrl,
        icon: logoUrl,
        badge: logoUrl,
        //image: logoUrl,
        vibrate: [[200, 50, 200]]
    };
    new Notification("BOBBA", options);
}