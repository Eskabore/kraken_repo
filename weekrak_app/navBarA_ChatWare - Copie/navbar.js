/* navToggle = document.querySelector(".navToggle");
const links = document.querySelector(".links");

navToggle.addEventListener("click", function(){
    //console.log(links.classList.contains("random"));
    //console.log(links.classList.contains("links"));
    if(links.classList.contains("show-links")){
        links.classList.remove("show-links");
    } else {
        links.classList.add("show-links");
    }
    links.classList.toggle("show-links");

}); */

const navSlide = () => {
    const burger = document.querySelector(".burger");
    const nav = document.querySelector(".nav-links");
    const navLinks = document.querySelectorAll(".nav-links li");

    burger.addEventListener("click", () => {
        //Toggle Nav
        nav.classList.toggle("nav-active");

        // Animnate Links
        navLinks.forEach((link, index) => {
            if (link.style.animation) {
                link.style.animation = '';
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 4 + 0.3}s`;
            }
        });
        //Burger Animation
        burger.classList.toggle("toggling");
    });
}

navSlide();
