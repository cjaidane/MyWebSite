<?php
if (array_key_exists("lang", $_GET) && $_GET['lang'] === 'fr') {
    include 'php/fr.php';
} elseif (array_key_exists("lang", $_GET) && $_GET['lang'] === 'en') {
    include 'php/en.php';
} else {
    include 'php/fr.php';
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Sneakers">
	<meta name="keywords" content="Sneakers,sortie,nouveaute">
	<meta name="author" content="Chaïma JAIDANE">
	<meta charset = "utf-8"/>
    <link rel="stylesheet" type="text/css" href="CSS/feuille_style.css"/>
    <title>Sneakers Addict</title>
</head>
<body>


<?php include 'php/nav.php';?>


<h2><?= $trad["page d'acceuil"]["collab"] ?></h2>
<p><?= $trad["page d'acceuil"]["intro"] ?></p>
<section class="Articles">
    <article>
    <img src="image/tra.jpeg" alt="Photo de la chaussure de Tarvis Scott x Fragment x Air Jordan 1 Low"/>
    <div class="right">
        <h4> Tarvis Scott x Fragment x Air Jordan 1 Low</h4>  
        <p><?= $trad ["page d'acceuil"]["travis"] ?></p>
    </div>
    </article>


    <article>
        <img src="image/yee.jpeg" alt="Photo de la chaussure d'Adidas Yeezy Foam Runner"/>
        <div class="right">
            <h4> Adidas Yeezy Foam Runner</h4>  
            <p> <?= $trad ["page d'acceuil"]["adidas"] ?></p>
        </div>
    </article>

    <article>
        <img src="image/aime1.jpeg" alt="Photo de la chaussure New Balance 550 x Aime Leon Dore"/>
        <div class="right">
        
            <h4> New Balance 550 x Aime Leon Dore</h4>  
           
                <p> <?= $trad ["page d'acceuil"]["nb"] ?></p>
        </div>
    </article>

    <article>
        <img src="image/converseC.jpeg" alt="Photo de la chaussure Converse x Feng Chen Wang"/>
        <div class="right">
            <h4> Converse x Feng Chen Wang </h4>  
                <p> <?= $trad ["page d'acceuil"]["converse"] ?></p>
        </div>
    </article>
</section>


<?php include 'php/footer.php';?>
</body>
</html>