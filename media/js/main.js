console.log("Main.js loaded.");


//Better page loading
//Select internal links
$("a:not([href*='//'])").click(function(event)
    {
        //Prevent default page load
        event.preventDefault();
        //Load in new link
        loadNewPage(this.href);
    }
);

//Load pages better
function loadNewPage(url) {
    //Remove old CSS File
    $("link[href*="+ requestURI()).remove();

    //Change URL to new url
    history.pushState("","",url);
    //Load in page contents
    $("main").load(url+" main", function (response)
        {
            //Check if loaded element is empty e.g. login page or failed load
            if (response === undefined)
            {
                //Reload page to serve proper content
                window.location.reload(false);
            }
        }
    );
    //Load new css file
    loadCss("/media/css/" + requestURI() + ".css");
}

/* Jquery stuff */
$(document).ready(function () {
    $("#notif-permission").click(function () {
        console.log("reloading body");
        $.get('/notification', function (data) {
            $('body').html(data);
        });
    });

    //Set the side nav right above the screen on load
    //Somehow this doesn't always work, not quite sure why
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