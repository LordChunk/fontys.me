console.log("Main.js loaded.");
/* Jquery stuff */
$(document).ready(function () {

    //Navbar animation
    $('#close_mobile_nav').click(function () {
        $('.side-nav').animate({"top": "-334px"}, "slow");
    });

    $('#open_mobile_nav').click(function () {

        //Do redirect for desktop and open nav bar for mobile
        if ($(window).width() < 800)
        {
            $('.side-nav').animate({"top": "0px"}, "slow");
        }
        else
        {
            window.location.href="/";
        }

    });
});


/*
function openNav() {
    //console.log("openNav");
    document.getElementById("nav-vertical").style.top = "0";
};

function closeNav() {
    //console.log("closeNav");
    document.getElementById("nav-vertical").style.top = "-281px";

};
*/