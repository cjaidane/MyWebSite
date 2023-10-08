<?php
if (array_key_exists("lang", $_GET) && $_GET['lang'] === 'fr') {
    include 'fr.php';
} elseif (array_key_exists("lang", $_GET) && $_GET['lang'] === 'en') {
    include 'en.php';
} else {
    include 'fr.php';
}
?>


<?php
include 'nav.php';
?>


<!DOCTYPE html>
<html lang="fr">
    
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Sneakers">
	<meta name="keywords" content="Sneakers,sortie,nouveaute">
	<meta name="author" content="Chaïma JAIDANE">
	<meta charset = "utf-8"/>
	<link rel="stylesheet" type="text/css" href="../CSS/feuille_style.css"/>
    <script src="../JS/VerifieForm.js" defer ></script>
    <title>Sneakers Addict</title>

  
</head>

<body>
<section class="formulaire" >
    <form method="post" action="formu.php">
        <h1><?= $trad["connecter"]["Connexion"]; ?></h1>
        <div>
            <label for="email"> <?= $trad["connecter"]["adresse mail"]; ?></label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="password">  <?= $trad["connecter"]["mot de passe"];?> </label>
            <input type="password" name="password" id="password">
        </div>

        <button type="submit"> <?= $trad["connecter"]["enregistrer"];?></button>
    </form>
</section>


<?php
include 'footer.php';
?>


</body>
</html>


