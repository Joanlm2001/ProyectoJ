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