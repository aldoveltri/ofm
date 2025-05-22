<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=1.3.0">
    <link rel="stylesheet" href="about.css?v=1.3.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Home</title>
</head>
<body>
    <header>
        <?php include("header.php"); ?>
    </header>
    <div class="dona">
        <div class="content">
                <h1 class="tit-dona">Sostieni l'OFM</h1>
                <img src="assets/donazioni.webp" alt="">
                <p class="subtit-dona">Sostieni le attività
                    dell'Orchestra effettuando una donazione.
                    In più riceverai la nostra
                    Tessera Sostenitore "Amico dell'Associazione"
                    valida per il 2025.
                </p>
                <a href="dona.php"><button>Dona ora</button></a>
            </div>
    </div>

    <div class="corsi">
        <h2>I nostri corsi</h2>
        <div class="content">
            <h3>Corsi di formazione</h3>
            <img src="assets/lezioni.webp" alt="">
            <div class="desc">
                <p>I corsi riguardano l'insegnamento dei seguenti
                    strumenti:<br>Flauto, Clarinetto, Corno, Tromba,
                    Trombone, Euphonium, Tuba, Percussioni.
                </p>
                <a href="corsi.php"><button>Scopri di più</button></a>
            </div>
        </div>
    </div>
    <a class="back-top" href="#"><img src="assets/backtop.webp" alt=""></a>
    <footer>
    <?php include("footer.php"); ?>
    </footer>
</body>
</html>