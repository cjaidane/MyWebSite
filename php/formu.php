<?php
//CREATION D'UNE TABLE
try {
    $pdo = new PDO('sqlite:base.db');
//methode affiche les erreurs avec pdo
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);//utiliser le fetch, récupere les éléments
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//afficher les erreurs et les exceptions 

    //query utilisr sql via php pour communiquer avce base de donne
        //creation de la base de donne
    $pdo->query('CREATE TABLE IF NOT EXISTS user( 
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        mail VARCHAR(100) NOT NULL UNIQUE,
        mdp VARCHAR(100) NOT NULL
    )'
    );
    
} catch (PDOException $exception) {
    var_dump($exception->getMessage());
}

$mail = htmlspecialchars($_POST['email']);
$mdp = htmlspecialchars($_POST["password"]);
$mdp=password_hash($mdp, PASSWORD_BCRYPT);


try {
   
    $statement = $pdo->prepare("INSERT INTO user ('mail', 'mdp') VALUES (:mail, :mdp)");
    $statement->bindValue('mail', $mail);
    $statement->bindValue('mdp', $mdp);
    $statement->execute();

    header("Location: /");

} catch (PDOException $exception) {
    var_dump($exception->getMessage());
}


