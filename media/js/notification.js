console.log("notification.js loaded");

var OneSignal = window.OneSignal || [];

OneSignal.push(["init", {
    appId: "d42d6e98-3d75-4968-bdf0-1cb00817fba3",
    autoRegister: false,
    notifyButton: {
        //Only show bell for subscribed users
        enable: true,
        displayPredicate: function() {
            return OneSignal.isPushNotificationsEnabled()
                .then(function(isPushEnabled) {
                    //Only display bell for subscribed users
                    return isPushEnabled;
                });
        },
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
OneSignal.push(function ()
{
    OneSignal.getTags(function(tags)
    {
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
    OneSignal.isPushNotificationsEnabled(function (isEnabled)
    {
        //Check if item exists
        if(document.getElementById("checkSubscription"))
        {
            //Paste notification status in span in notification.php
            if (isEnabled)
            {
                //Paste enabled text
                document.getElementById("checkSubscription").innerHTML = "enabled";
                //Set global subscription value
                window.subscriptionEnabled = true;
            }
            else
            {
                //Paste disabled text
                document.getElementById("checkSubscription").innerHTML = "disabled";
                //Set global subscription value
                window.subscriptionEnabled = false;
            }
        }
    });

    //Event for subscription change
    OneSignal.on('subscriptionChange', function (isSubscribed) {
        //Reload file on subscription to show notification bell
        console.log(isSubscribed);
        if (isSubscribed === true)
        {
            window.location.reload(false);
        }
    });
});

function register()
{
    console.log("Executing register()");
    OneSignal.registerForPushNotifications({
        modalPrompt: true
    });
}


