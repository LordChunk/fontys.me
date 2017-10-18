console.log("Main.js loaded.");
/* Jquery stuff */
$(document).ready(function () {

    //Set the side nav right above the screen on load
    $("#side-nav").css("top", -$('#side-nav').height());

    //Navbar animation
    $('#close_mobile_nav').click(function () {
        $('#side-nav').animate({"top": -$('#side-nav').height()}, "slow");
    });

    $('#open_mobile_nav').click(function () {

        //Do redirect for desktop and open nav bar for mobile
        if ($(window).width() < 800)
        {
            $('#side-nav').animate({"top": "0px"}, "slow");
        }
        else
        {
            //Make logo element clickable as home button for desktop version
            window.location.href="/";
        }

    });
});

//Cookie consent
window.addEventListener("load", function(){
window.cookieconsent.initialise({
    "palette": {
        "popup": {
            "background": "#ee6e73",
            "text": "#ffffff"
        },
        "button": {
            "background": "#26a69a",
            "text": "#ffffff"
        }
    },
    "theme": "classic"
})});