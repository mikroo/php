<?php 
if(isset($_GET['console']))
{
	$bdd = new PDO('mysql:host=localhost;dbname=test','root','root');
	$requete = $bdd->prepare('SELECT * FROM jeux_video WHERE console = ?');
	$requete->execute(array($_GET['console']));
	// $donnees = $reponse->fetch();
	while($donnees = $requete->fetch())
	{
		echo '<p>' . $donnees['console'] .' - '. $donnees['nom'] . '<p/>';
	}
}