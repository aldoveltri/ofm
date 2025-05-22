<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css?v=1.3.0">
        <link rel="stylesheet" href="corsi.css?v=1.3.0">
        <link rel="stylesheet" href="about.css?v=1.3.0">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="stylesheet" href="componenti.css?v=1.1.2">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Componenti</title>
</head>
<body>
    <header>
        <?php include("header.php"); ?>
    </header>
    
    <div class="scelta">
        <div class="dentro">
            <h1 class="tit-about">Consiglio Direttivo</h1>
            <img src="assets/gallery/img8.webp" alt="">
            <p class="subtit-about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ex quaerat quas explicabo sed voluptatum magni fugiat, dolorem nihil, officia obcaecati at repudiandae sunt fugit.</p>
            <a href="consiglio.php"><button>Vedi il Consiglio</button></a>
        </div>

        <div class="dentro">
            <h1 class="tit-about">L'organico</h1>
            <img src="assets/gallery/img4.webp" alt="">
            <p class="subtit-about">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur suscipit cupiditate, sit a qui aliquam est eum repellendus assumenda, dolorem tempora aut, molestias animi perferendis.</p>
            <a href="organico.php"><button>Vedi l'organico</button></a>
        </div>
    </div>
    <a class="back-top" href="#"><img src="assets/backtop.webp" alt=""></a>
    <footer>
    <?php include("footer.php"); ?>
    </footer>
</body>
</html>