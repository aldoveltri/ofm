<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=1.3.0">
    <link rel="stylesheet" href="corsi.css?v=1.3.0">
    <link rel="stylesheet" href="contatti.css?v=1.3.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Contatti</title>
</head>
<body>
    <header>
        <?php include("header.php"); ?>
    </header>
    
    <h1 class="titcorsi">Contattaci</h1>
    <p class="desccontatti">Desideri ulteriori informazioni?<br> Non esitare a
    contattarci!</p>

    <section class="section-contact">
        <div class="container">
            <div id="alert" style="display: none;">
                <p>Grazie per averci scritto. Risponderemo entro 24 ore</p>
            </div>
            <form action="https://formspree.io/f/mzzezpop" method="post" class="form" id="form">
                    <p class="titform">Contattaci con il seguente form</p>

					<input type="text" name="nome" class="text" id="nome" required placeholder="Il tuo nome">
                    
					<input type="text" name="email" class="text" id="email" required placeholder="E-mail">

					<input type="text" name='oggetto' class="text" id="oggetto" required placeholder="Oggetto">

					<textarea name="messaggio" name="messaggio" id="messaggio" placeholder="Messaggio..."></textarea>

					<input class="invia" type="submit" value="Invia">
				</form>
			</div>
		</section>

    <p class="desccontatti">Oppure sui social</p>

    <div class="link-contatti">
    <ul>
        <link rel="stylesheet" href="contatti.css">
        <li><a href="https://www.instagram.com/ofmediterranea/"><i class='bx bxl-instagram-alt'></i></a></li>
        <li><a href="https://www.facebook.com/OFMAmantea"><i class='bx bxl-facebook-square' ></i></a></li>
        <li><a href="https://www.youtube.com/@clarmed/"><i class='bx bxl-youtube'></i></a></li>
    </ul>
    </div>
    <a class="back-top" href="#"><img src="assets/backtop.webp" alt=""></a>
    <footer>
    <?php include("footer.php"); ?>
    </footer>

    <script>
        document.getElementById('form').addEventListener('submit', function (e) {
            e.preventDefault(); // Impedisce l'invio tradizionale del form

            fetch(this.action, {
                method: 'POST',
                body: new FormData(this),
                headers: {
                    'Accept': 'application/json'
                }
            })
            .then(response => {
                if (response.ok) {
                    // Mostra il messaggio di successo
                    document.getElementById('alert').style.display = 'block';
                    this.reset(); // Resetta il form
                } else {
                    alert('Si è verificato un errore. Riprova.');
                }
            })
            .catch(error => {
                alert('Si è verificato un errore. Riprova.');
            });
        });
    </script>
</body>
</html>