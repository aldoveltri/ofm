const openButton = document.getElementById('open-menu');
const navbar = document.getElementById('navbar-links');
const overlay = document.getElementById('overlay');

const media = window.matchMedia("(max-width: 700px)");

media.addEventListener('change', (e) => {
    console.log("Media query changed:", e.matches);
    updateNavbar(e);
});

function updateNavbar(e) {
    const isMobile = e.matches;
    console.log(isMobile);
    if (isMobile) {
        navbar.setAttribute('inert', '');
    } else {
        // Desktop device
        navbar.removeAttribute('inert');
    }
}

function openSidebar() {
    console.log("Apro il menu"); // Debug
    navbar.classList.add('show');
    overlay.style.display = 'block';
    openButton.setAttribute('aria-expanded', 'true');
    navbar.removeAttribute('inert');
}

function closeSidebar() {
    console.log("Chiudo il menu"); // Debug
    navbar.classList.remove('show');
    overlay.style.display = 'none';
    openButton.setAttribute('aria-expanded', 'false');
    navbar.setAttribute('inert', '');
}

// Chiudi il menu quando si clicca su un link
const navLinks = document.querySelectorAll('.navbar-links a');
navLinks.forEach(link => {
    link.addEventListener('click', () => {
        closeSidebar();
    });
});

// Inizializza lo stato della navbar
updateNavbar(media);