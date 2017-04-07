<?php 
// connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=test','root','root');
$requete = $bdd->prepare('INSERT INTO jeux_video(nom, possesseur) VALUES(?, ?)');
$requete->execute(array($_GET['nom'], $_GET['possesseur']));