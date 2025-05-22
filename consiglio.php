<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css?v=1.3.0">
        <link rel="stylesheet" href="corsi.css?v=1.3.0">
        <link rel="stylesheet" href="componenti.css?v=1.3.0">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Consiglio Direttivo</title>
</head>
<body>
    <header>
        <?php include("header.php"); ?>
    </header>
    
    <div class="staff">
        <div class="container">
            <h1 class="titcorsi">Presidente</h1>
            <div class="content">
                <div class="persona" id="sinistra">
                    <img src="assets/componenti/socievole.webp" alt="">
                    <div class="desc">
                        <b>Salvatore<br>Socievole</b>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h1 class="titcorsi">Vice-Presidente</h1>
            <div class="content">
                <div class="persona" id="destra">
                    <img src="assets/componenti/berardone.webp" alt="">
                    <div class="desc">
                        <b>Filippo<br>Berardone</b>
                    </div>
                </div>
            </div>
        <div class="container">
            <h1 class="titcorsi">Segretario</h1>
            <div class="content">
                <div class="persona" id="sinistra">
                    <img src="assets/componenti/giliberti.webp" alt="">
                    <div class="desc">
                        <b>Concetta<br>Giliberti</b>
                    </div>
                </div>
            </div>
        <div class="container">
            <h1 class="titcorsi">Tesoriere</h1>
            <div class="content">
                <div class="persona" id="destra">
                    <img src="assets/componenti/user.webp" alt="">
                    <div class="desc">
                        <b>Nome<br>Cognome</b>
                    </div>
                </div>
            </div>
        <div class="container">
            <a href="gloria.php">
                <h1 class="titcorsi">Direttore Artistico</h1>
                <div class="content">
                    <div class="persona" id="sinistra">
                        <img src="assets/componenti/gloria.webp" alt="">
                        <div class="desc">
                            <b>Giuseppe<br>Gloria</b>
                        </div>
                    </div>
                </div>
            </a>
        
        </div>
        </div>
    </div>
    <a class="back-top" href="#"><img src="assets/backtop.webp" alt=""></a>
    <footer>
    <?php include("footer.php"); ?>
    </footer>
</body>
</html>