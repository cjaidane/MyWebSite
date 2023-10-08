<?php
if (array_key_exists("lang", $_GET) && $_GET['lang'] === 'fr') {
    include 'fr.php';
} elseif (array_key_exists("lang", $_GET) && $_GET['lang'] === 'en') {
    include 'en.php';
} else {
    include 'fr.php';
}
?>

<?php include 'nav.php';?>

<!DOCTYPE html>
<html lang="fr">  
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Sneakers">
	<meta name="keywords" content="Sneakers,sortie,nouveaute">
	<meta name="author" content="Chaïma JAIDANE">
	<meta charset = "utf-8"/>
	<link rel="stylesheet" type="text/css" href="../CSS/feuille_style.css"/>
    <title>Sneakers Addict</title>
    <script src="../JS/VerifieAstuce.js" defer ></script>
</head>
<body>

<section class="astuce">
    <h1><?= $trad["astuce"]["ton astuce"] ?></h1>
    <form method="post">
        <div>
            <label for="firstName"><?= $trad["astuce"]["prénom"] ?></label>
            <input type="text" name="firstName" id="firstName">
        </div>
        
        <div>
            <label for="astuce"> <?= $trad["astuce"]["ecrit ton astuce"] ?></label>
            <textarea type="textarea" name="astuce" id="astuce"></textarea>
        </div>
        <button type="submit"> <?= $trad["astuce"]["envoie ton astuce"] ?></button>
        <button type="button" id="affiche"> <?= $trad["astuce"]["affiche les autres astuces"] ?> </button>

    </form>
</section>
<section id="commentaires"><?= $trad["astuce"]["les astuces"]?></section>

<?php include 'footer.php';?>
<script src="../JS/ajax.js"></script>

</body>
</html>