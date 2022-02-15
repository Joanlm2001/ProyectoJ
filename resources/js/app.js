require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

/* ------------------------------------------------------------------------------- */
/* Función ScrollTop */
let mybutton = document.querySelector("#scroll-top");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 750) {
    mybutton.style.display = "block";
} else {
    mybutton.style.display = "none";
    }
}

function topFunction() {
document.body.scrollTop = 0;
document.documentElement.scrollTop = 0;
}
    /* Función Slider */
let slideIndex = 0;
carousel();

function carousel() {
let i;
let x = document.querySelector(".mySlides");
for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
}
slideIndex++;
if (slideIndex > x.length) {slideIndex = 1}
x[slideIndex-1].style.display = "block";
setTimeout(carousel, 5000);
}

/* --------------------------------------------------------------------------------------------- */
