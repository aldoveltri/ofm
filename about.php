<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=1.3.0">
    <link rel="stylesheet" href="about.css?v=1.3.0">
    <link rel="stylesheet" href="corsi.css?v=1.3.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Associazione</title>
</head>
<body>
    <header>
        <?php include("header.php"); ?>
    </header>

    <h1 class="titcorsi">Associazione</h1>

    <div class="chisiamo">
        <div class="content">
            <h1 class="tit-about">L'Orchestra</h1>
            <img src="assets/orchestra.webp" alt="">
            <p class="subtit-about">L'Orchestra di Fiati Mediterranea Città di Amantea 
        nasce il 10 maggio 2005 per la volontà di circa 50 
        giovani strumentisti amatoriali (età media 22 anni) 
        guidati dal Maestro Angelo De Paola, docente del...</p>
            <a href="storiaofm.php"><button>Continua a leggere</button></a>
        </div>

        <div class="content">
            <h1 class="tit-about">OFM Youth Band</h1>
            <img src="assets/yband.webp" alt="">
            <p class="subtit-about">La nuova formazione musicale, nata all’interno dell’Orchestra 
        di Fiati Mediterranea (OFM), rappresenta un’importante opportunità per tutti i 
        giovani musicisti che desiderano avvicinarsi al mondo...</p>
            <a href="yband.php"><button>Continua a leggere</button></a>
        </div>

        <div class="content">
            <h1 class="tit-about">Componenti</h1>
            <img src="assets/orchestra4.webp" alt="">
            <p class="subtit-about">I componenti dell'OFM
                sono coloro che volontariamente 
                aiutano l'Orchestra, con il solo scopo di
                portarla avanti e migliorarne 
                l'organizzazione sempre di più.
            </p>
            <a href="componenti.php"><button>Scopri i componenti</button></a>
        </div>

        <div class="content">
            <h1 class="tit-about">Sostieni l'OFM</h1>
            <img src="assets/donazioni.webp" alt="">
            <p class="subtit-about">Sostieni le attività
                dell'Orchestra effettuando una donazione.
                In più riceverai la nostra
                Tessera Sostenitore "Amico dell'Associazione"
                valida per il 2025.
            </p>
            <a href="dona.php"><button>Dona ora</button></a>
        </div>
    </div>
    <a class="back-top" href="#"><img src="assets/backtop.webp" alt=""></a>
    <footer>
    <?php include("footer.php"); ?>
    </footer>
</body>
</html>