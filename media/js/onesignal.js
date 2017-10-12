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