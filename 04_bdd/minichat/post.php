<?php
include('connexion_sql.php');
// inserer dans la base de données
$requete = $bdd->prepare('INSERT INTO minichat(pseudo, message) VALUES(?, ?)');
$requete->execute(array($_POST['pseudo'], $_POST['message']));

// rediriger dans la page d'accueil
header('Location: index.php');