/**
Custom Javascript code made by Jacob
 */

window.onscroll = function() {scrollfunction()};

function scrollfunction() {
    if(document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("logo-link").style.height = "50px";
        document.getElementById("main-menu").style.height = "50px";
        document.getElementById("main-menu").style.lineHeight = "2";
    } else {
        document.getElementById("logo-link").style.height = "100px";
        document.getElementById("main-menu").style.height = "100px";
        document.getElementById("main-menu").style.lineHeight = "5";
    }
}