console.log("notification.js loaded");


var OneSignal = window.OneSignal || [];
OneSignal.push(["init", {
    appId: "d42d6e98-3d75-4968-bdf0-1cb00817fba3",
    autoRegister: false,
    notifyButton: {
        enable: false,
        showCredit: false
    },
    safari_web_id: "web.onesignal.auto.2f682342-7506-4d13-96c3-4fd5fa35ae95",
    setDefaultNotificationURL: "https://dev.fontys.me",
    setDefaultTitle: "Fontys.me",
    promptOptions: {
        showCredit: false
    }
}]);

//Set class variables
OneSignal.push(function () {
    OneSignal.getTags(function(tags) {
        // All the tags stored on the current webpage visitor
        // console.log("OneSignal getTags: ");
        //console.log(tags);
        if (tags.group === undefined)
        {
            console.log("Set new user class");
            OneSignal.sendTag("group", group); //Group is defined in the the head
        }
        else
        {
            console.log(tags.group);
        }
    });
    OneSignal.isPushNotificationsEnabled(function (isEnabled) {
        if (isEnabled){

            const pushEnabled = true;
        }
        else
        {
            const pushEnabled = false;
        }
    });
});
function checkSubscription() {
    if (pushEnabled)
    {
        return "enabled";
    }
    else
    {
        return "disabled";
    }
}
function register() {
    OneSignal.registerForPushNotifications({
        modalPrompt: true
    });
}