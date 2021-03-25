/**
Custom Javascript code made by Jacob
cant use jQuery caus wordpress doesnt support it ( i cri everityme )
**/


// onload
window.onload = function() { 

    //shrink the navbar
    scrollfunction();

    //if the device is a mobile or tablet, shrink the title a bit
    if(!document.getElementById('navbar-btn').offsetWidth == 0){
        document.getElementById('page-wrapper').style.paddingTop = "45px";
    };
};

// continually run on scroll
window.onscroll = function() {scrollfunction()};

function scrollfunction() {

    //on big document if not at the top, make the navbar smaller
    if(document.getElementById('navbar-btn').offsetWidth == 0 && document.documentElement.scrollTop > 80) {
        document.getElementById("logo-link").style.height = "50px";
        document.getElementById("main-menu").style.height = "50px";
        document.getElementById("main-menu").style.lineHeight = "2";
    // if device is mobile, make the navbar permanently small
    } else if(!document.getElementById('navbar-btn').offsetWidth == 0){
        document.getElementById("logo-link").style.height = "50px";
        document.getElementById("main-menu").style.height = "50px";
        document.getElementById("main-menu").style.lineHeight = "2";
    // other than that, make the navbar thicc
    } else {
        document.getElementById("logo-link").style.height = "100px";
        document.getElementById("main-menu").style.height = "100px";
        document.getElementById("main-menu").style.lineHeight = "5";
    }
}