<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Send a file</title>
</head>
<body>
	<form action="fichier.php" method="POST" enctype="multipart/form-data">
		<p>Formulaire d'envoi de fichier</p>
		<input type="file" name="monfichier">
		<input type="submit" value="Envoyer le fichier">
	</form>
</body>
</html>