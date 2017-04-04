<?php session_start(); // On démarre la session avant toute chose ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<p>Re-bonjour</p>
	<p>
		je me souviens de toi ! Tu t'appelles <?php echo $_SESSION['prenom'] .' '.$_SESSION['nom']; ?> ! <br>
		Et ton âge hummm... tu a <?php echo $_SESSION['age']; ?>
	</p>
</body>
</html>