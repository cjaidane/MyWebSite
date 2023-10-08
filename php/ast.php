<?php
$firstName = htmlspecialchars($_POST['firstName']);
$lastuce = htmlspecialchars($_POST['astuce']);

try {
    $pdo = new PDO('sqlite:base.db');

    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);//utiliser le fetch, récupere les éléments
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//afficher les erreurs et les exceptions 

    //query utilisr sql via php pour communiquer avce base de donne
        //creation de la base de donne
    $pdo->query('CREATE TABLE IF NOT EXISTS astuce( 
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        firstName VARCHAR(100) NOT NULL,
        lastuce VARCHAR(100) NOT NULL
    )'
    );
    
} catch (PDOException $exception) {
    var_dump($exception->getMessage());
}


try{
    //variable dans lequel a reucpere l'appelle de sql
    $statement = $pdo->prepare("INSERT INTO astuce ('firstName', 'lastuce') VALUES (:firstName, :lastuce)");
    $statement->bindValue('firstName', $firstName);
    $statement->bindValue('lastuce', $lastuce);
    $statement->execute();

    header("Location: /");

}catch (PDOException $exception) {
    var_dump($exception->getMessage());
}


