// navbar allo scroll
window.addEventListener('scroll', function () {
    let navbar = document.getElementById('mainNav');
    if (window.scrollY > 50) {
        navbar.classList.add('shrink', 'navbar-dark');
        navbar.classList.remove('navbar-light', 'bg-trasparent');
    } else {
        navbar.classList.remove('shrink', 'navbar-dark');
        navbar.classList.add('navbar-light', 'bg-trasparent');
    }
});

import AOS from 'aos';
import 'aos/dist/aos.css';

AOS.init({
    duration: 500,
    easing: 'ease-in-out',
    once: true
});


//show more
document.querySelectorAll('.show-more').forEach(button => {
    button.addEventListener('click', function (e) {
        e.preventDefault();
        let cardText = this.parentElement;
        let shortDesc = cardText.querySelector('.short-desc');
        let fullDesc = cardText.querySelector('.full-desc');

        if (fullDesc.style.display === "none") {
            shortDesc.style.display = "none";  // Nasconde la descrizione breve
            fullDesc.style.display = "block"; // Mostra la descrizione lunga con scroll
            this.textContent = "Show Less";
        } else {
            shortDesc.style.display = "inline";  // Mostra la descrizione breve
            fullDesc.style.display = "none";    // Nasconde la descrizione lunga
            this.textContent = "Show More";
        }
    });
});