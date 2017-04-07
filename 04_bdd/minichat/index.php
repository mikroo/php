<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mini-chat</title>
</head>
<body>
	<div id="centre">
		<form action="post.php" method="POST">
			<label>Pseudo : <input type="text" name="pseudo"></label> <br>
			<label>Message : <input type="text" name="message"></label> <br>
			<input type="submit" value="Envoyer">
		</form>
		<p><a href="index.php">Rafraichir la page</a></p>
		<div id="message">
			<!-- Afficher les message -->
			<?php 
				include('connexion_sql.php');
				$reponse = $bdd->query('SELECT * FROM minichat ORDER BY id DESC');
				while($donnees = $reponse->fetch())
				{
					echo "<p><strong>".htmlspecialchars($donnees['pseudo'])."</strong> : " . htmlspecialchars($donnees['message']).'</p>'; 
				}
				$reponse->closeCursor();
			?>
		</div>
	</div>
</body>
</html>