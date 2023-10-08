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
    <title>Sneakers Addict</title>
</head>

<body>
<?php include 'contenu.php' ?>

<?php include 'footer.php';?>
</body>
</html>

