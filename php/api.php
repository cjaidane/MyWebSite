<?php

// fichier appelé par l'appel AJAX pour charger les commentaires dans le fichier principal

try {
    $pdo = new PDO('sqlite:base.db');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 

    $comment = $pdo->query('SELECT * FROM astuce');
    $retour =$comment->fetchAll();

    foreach($retour as $retour){

        echo '<article>';
        echo '<p>' . $retour['firstName'] . '</p>';
        echo '<p>' . $retour['lastuce'] . '</p>';
        echo '</article>';
    }

} catch (Exception $exception) {
    var_dump($exception->getMessage());
}
