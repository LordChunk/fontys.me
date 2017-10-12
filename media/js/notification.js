console.log("notification.js loaded");


var OneSignal = window.OneSignal || [];
OneSignal.push(["init", {
    appId: "d42d6e98-3d75-4968-bdf0-1cb00817fba3",
    autoRegister: false,
    notifyButton: {
        enable: true,
        showCredit: false
    },
    safari_web_id: "web.onesignal.auto.2f682342-7506-4d13-96c3-4fd5fa35ae95",
    setDefaultNotificationURL: "https://dev.fontys.me",
    setDefaultTitle: "Fontys.me",
    promptOptions: {
        showCredit: false
    }
}]);

function register() {
    OneSignal.registerForPushNotifications({
        modalPrompt: true
    });
}


//source: http://papermashup.com/read-url-get-variables-withjavascript/
//Get GET vars from the URL
function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}



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