const openButton = document.getElementById('open-menu');
const navbar = document.getElementById('navbar-links');
const overlay = document.getElementById('overlay');
const dropdownLabels = document.querySelectorAll('.dropdown-label');

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
        navbar.removeAttribute('inert');
    }
}

function openSidebar() {
    console.log("Apro il menu"); // Debug
    navbar.classList.add('show');
    overlay.style.display = 'block';
    openButton.setAttribute('aria-expanded', 'true');
    navbar.removeAttribute('inert');
    
    // Disabilita lo scroll del body quando il menu è aperto
    document.body.style.overflow = 'hidden';
}

function closeSidebar() {
    console.log("Chiudo il menu"); // Debug
    navbar.classList.remove('show');
    overlay.style.display = 'none';
    openButton.setAttribute('aria-expanded', 'false');
    navbar.setAttribute('inert', '');
    
    // Riabilita lo scroll del body quando il menu è chiuso
    document.body.style.overflow = '';
}

// Chiudi il menu quando si clicca su un link
const navLinks = document.querySelectorAll('.navbar-links a');
navLinks.forEach(link => {
    link.addEventListener('click', () => {
        closeSidebar();
    });
});

// Gestione del dropdown al click
dropdownLabels.forEach(label => {
    label.addEventListener('click', (e) => {
        e.stopPropagation(); // Impedisce la propagazione dell'evento al documento
        const dropdown = label.nextElementSibling;
        const isOpen = dropdown.style.display === 'flex';

        // Chiudi tutti i dropdown aperti
        document.querySelectorAll('.dropdown').forEach(d => {
            if (d !== dropdown) {
                d.style.display = 'none';
            }
        });

        // Apri o chiudi il dropdown corrente
        dropdown.style.display = isOpen ? 'none' : 'flex';
    });
});

// Chiudi il dropdown quando si clicca fuori da esso
document.addEventListener('click', (e) => {
    if (!e.target.closest('.dropdown-container')) {
        document.querySelectorAll('.dropdown').forEach(dropdown => {
            dropdown.style.display = 'none';
        });
    }
});

// Inizializza lo stato della navbar
updateNavbar(media);