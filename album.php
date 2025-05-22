<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=1.3.0">
    <link rel="stylesheet" href="album.css?v=1.3.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Album</title>
</head>
<body>
    <header>
        <?php include("header.php"); ?>
    </header>
    
    <h1 class="tit-album">OFM Photo Gallery</h1>

    <div class="album">
        <div class="gallery">
            <img src="assets/orchestra.webp" alt="">
            <img src="assets/yband.webp" alt="">
            <img src="assets/gallery/img1.webp" alt="">
            <img src="assets/gallery/img2.webp" alt="">
            <img src="assets/gallery/img3.webp" alt="">
            <img src="assets/gallery/img4.webp" alt="">
            <img src="assets/gallery/img5.webp" alt="">
            <img src="assets/gallery/img6.webp" alt="">
            <img src="assets/gallery/img7.webp" alt="">
            <img src="assets/gallery/img8.webp" alt="">
            <img src="assets/gallery/img9.webp" alt="">
            <img src="assets/gallery/img10.webp" alt="">
            <img src="assets/gallery/img11.webp" alt="">
            <img src="assets/gallery/img12.webp" alt="">
            <img src="assets/gallery/img13.webp" alt="">
            <img src="assets/gallery/img14.webp" alt="">
            <img src="assets/gallery/img15.webp" alt="">
            <img src="assets/gallery/img16.webp" alt="">
            <img src="assets/gallery/img17.webp" alt="">
            <img src="assets/gallery/img18.webp" alt="">
            <img src="assets/gallery/img19.webp" alt="">
            <img src="assets/gallery/img20.webp" alt="">
            <img src="assets/gallery/img21.webp" alt="">
            <img src="assets/gallery/img22.webp" alt="">
        </div>
        <button><a href="https://www.facebook.com/OFMAmantea">Altre Foto</a></button>
    </div>

    <div id="lightbox-overlay" class="lightbox-overlay">
    <span class="close-lightbox">&times;</span>
    <div class="lightbox-nav">
        <span class="nav-arrow left-arrow"><i class='bx bx-chevron-left' ></i></span>
        <span class="nav-arrow right-arrow"><i class='bx bx-chevron-right'></i></span>
    </div>
    <img id="lightbox-image" class="lightbox-image" src="" alt="Ingrandita">
    </div>

    <a class="back-top" href="#"><img src="assets/backtop.webp" alt=""></a>
    <footer>
    <?php include("footer.php"); ?>
    </footer>

    <script>
    const images = document.querySelectorAll('.gallery img');
    const lightboxOverlay = document.getElementById('lightbox-overlay');
    const lightboxImage = document.getElementById('lightbox-image');
    const closeLightbox = document.querySelector('.close-lightbox');
    const leftArrow = document.querySelector('.left-arrow');
    const rightArrow = document.querySelector('.right-arrow');

    let currentImageIndex = 0;

    // Apri la lightbox e mostra l'immagine cliccata
    images.forEach((image, index) => {
        image.addEventListener('click', () => {
            currentImageIndex = index;
            lightboxImage.src = image.src;
            lightboxOverlay.style.display = 'flex';
        });
    });

    // Chiudi la lightbox
    closeLightbox.addEventListener('click', () => {
        lightboxOverlay.style.display = 'none';
    });

    // Chiudi la lightbox cliccando fuori dall'immagine
    lightboxOverlay.addEventListener('click', (e) => {
        if (e.target === lightboxOverlay) {
            lightboxOverlay.style.display = 'none';
        }
    });

    // Passa all'immagine precedente
    leftArrow.addEventListener('click', (e) => {
        e.stopPropagation(); // Impedisce la chiusura della lightbox
        currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
        lightboxImage.src = images[currentImageIndex].src;
    });

    // Passa all'immagine successiva
    rightArrow.addEventListener('click', (e) => {
        e.stopPropagation(); // Impedisce la chiusura della lightbox
        currentImageIndex = (currentImageIndex + 1) % images.length;
        lightboxImage.src = images[currentImageIndex].src;
    });

    // Navigazione con tastiera (opzionale)
    document.addEventListener('keydown', (e) => {
        if (lightboxOverlay.style.display === 'flex') {
            if (e.key === 'ArrowLeft') {
                currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
                lightboxImage.src = images[currentImageIndex].src;
            } else if (e.key === 'ArrowRight') {
                currentImageIndex = (currentImageIndex + 1) % images.length;
                lightboxImage.src = images[currentImageIndex].src;
            } else if (e.key === 'Escape') {
                lightboxOverlay.style.display = 'none';
            }
        }
    });
</script>


</body>
</html>