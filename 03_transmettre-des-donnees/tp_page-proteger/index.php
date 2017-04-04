<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page protégée par mot de passe</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="content">
		<h1>Login</h1>



		<?php 
			// Le mot de passe n'a pas été envoyé ou n'est pas bon
			if(!isset($_POST['password']) OR $_POST['password'] != 'kakalake')
			{
				// Afficher le formulaire de saisie du mot de passe
			?>
				<form action="index.php" method="POST" accept-charset="utf-8">

				<input type="text" name="password">
				<input type="submit" value="Voir la page">

				</form>
			<?php
			}
			else
			{
				// Afficher les codes secrets
				?>
				<h1>Voici votre code secre</h1>
				<h4>ASD5 47SF S4E8 SD7T 74S5</h4>
				<p><a href="index.php">Se déconncter</a></p>
				<?php
			}
		?>
	</div>
</body>
</html>