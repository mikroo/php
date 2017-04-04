<?php
// Récupérer les paramètres en PHP

// Tester l'existence des variables avec [isset()]
// Contrôler la valeur des paramètres

if(isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['repeter'])) 
{
	$nom = $_GET['nom'];
	$prenom = $_GET['prenom'];
	$repeter = $_GET['repeter'];

	// convertir la variable repeter en nombre
	$repeter = (int) $repeter;

	// si la variable repeter n'est pas supérieur à 100
	if($repeter > 0 && $repeter <= 100) {
		for($i = 0; $i < $repeter; $i++){
			echo "Bonjour ". $nom . ' ' . $prenom . '<br />';
		}
	}
	else 
	{
		echo "Entrer un nombre inférieur à 100";
	}
}
else // Il manque des paramètres, on avertit le visiteur
{
	echo "Il faut renseigner un nom et un prénom !";
}