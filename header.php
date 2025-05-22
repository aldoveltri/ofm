<link rel="stylesheet" href="header.css?v=1.3.0">

<div class="navbar">
    <div class="titolo">
        <img class="logo" src="assets/logo.webp" alt="">
        <div class="tit">
            <h1>Orchestra di Fiati Mediterranea</h1>
            <h4>Città di Amantea (CS)</h4>
        </div>
    </div>
    <button id="open-menu" onclick="openSidebar()" aria-label="open sidebar" aria-expanded="false" aria-controls="navbar">
        <i class='bx bx-menu'></i>
    </button>
    <div class="navbar-links" id="navbar-links">
        <button id="close-menu" onclick="closeSidebar()" aria-label="close sidebar">
            <i class='bx bx-x'></i>
        </button>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li class="dropdown-container">
            <span class="dropdown-label">Associazione</span>
                <ul class="dropdown">
                    <li><a href="about.php">Panoramica</a></li>
                    <li><a href="storiaofm.php">Orchestra</a></li>
                    <li><a href="yband.php">Youth Band</a></li>
                    <li><a href="componenti.php">Componenti</a></li>
                    <li><a href="dona.php">Sostienici</a></li>
                </ul>
            </li>
            <li><a href="corsi.php">Corsi</a></li>
            <li><a href="album.php">Album</a></li>
            <li><a href="contatti.php">Contatti</a></li>
        </ul>
    </div>
</div>
<div id="overlay" onclick="closeSidebar()" aria-hidden="true"></div>

<script src="header-script.js?v=1.1.1"></script>