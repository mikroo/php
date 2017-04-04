<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mon super site</title>
</head>
<body>
	<!-- Afficher le prenom -->
	<p>Bonjour <?php echo htmlspecialchars($_POST['prenom']); ?> </p>
	<!-- Afficher le végérarien -->
	<?php  
		if(isset($_POST['vegetarien'])) 
		{
			echo "Vous êtes végétarien";
		}
		else 
		{
			echo "Nom je n'êtes pas végétarien, vous mangez de la viande ";
		}
	?>
</body>
</html>