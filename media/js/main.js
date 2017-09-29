console.log("Main.js loaded.");
/* Jquery stuff */
$( document).ready(function () {

    $('#close_mobile_nav').click(function () {
        $('.side-nav').animate({"top": "-334px"}, "slow");
    });

    $('#open_mobile_nav').click(function () {
        $('.side-nav').animate({"top": "0px"}, "slow");
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