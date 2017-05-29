<?php 
// Effectuer ici la requête qui insère le message
// Connexion à la base de données
include('connexion_sql.php');

// On ajoute une entrée dans la table jeux_video
$bdd->exec('INSERT INTO minichats(pseudo,)')



// Puis rediger vers index.php comme ceci :
header('Location: index.php');
