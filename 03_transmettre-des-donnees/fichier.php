<?php 
// Le traitement de l'envoi en php
// Vérifier si le visiteur a bien envoyé un fichier
if(isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
{
	$fichier = $_FILES['monfichier'];
	// Vérifier si la taille du fichier ne dépasse 1mb
	if($fichier['size'] <= 1000000)
	{
		// Vérifier si l'extension du fichier est autorisé
		$infosfichier = pathinfo($fichier['name']);
		$extension_upload = $infosfichier['extension'];
		$extension_autorise = array('jpg','png','gif','jpeg');
		if(in_array($extension_upload, $extension_autorise))
		{
			// déplacer le fichier dans le serveur
			move_uploaded_file($fichier['tmp_name'], 'upload/'.basename($fichier['name']));
			echo "L'envoi a bien été effectué";
		}
		else
		{
			echo "L'extension n'est pas autorisé";
		}
	}
	else
	{
		echo "Le fichier est trop gros DSL";
	}
}
else
{
	// Afficher le message d'erreur
	echo "Envoyer seulement un fichier svp";
}