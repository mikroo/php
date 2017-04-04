<?php 
// On démarre la session AVANT d'écrire du code HTML
session_start();

// On s'amuse à créer quelques variables de session dans $_SESSION
$_SESSION['prenom'] = 'Jean';
$_SESSION['nom'] = 'Dupont';
$_SESSION['age'] = 24;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<p>
		Salut <?php echo $_SESSION['prenom']; ?> !<br>
		Tu es à l'accueil de mon site (session.php) Tu veux aller sur une autre page ?
	</p>
	<p>
		<a href="mapage.php">Lien vers mapage.php</a><br>
		<a href="monscript.php">Lien vers monscript.php</a><br>
		<a href="information.php">Lien vers information.php</a><br>
	</p>
</body>
</html>