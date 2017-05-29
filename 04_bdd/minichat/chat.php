<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Minichat</title>
	<link rel="stylesheet" type="text/css" href="webroot/css/style.css">
	<link rel="stylesheet" type="text/css" href="webroot/css/font-awesome.css">
	<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
</head>
<body>
	<div id="minichat">

	<!-- # Nom interlocuteur -->
	<div id="allocutaire" >
		<p><i class="fa fa-user" aria-hidden="true"></i></p>
		<span>Christelle</span>
	</div>


	<!-- # Message envoyé par l'interlocuteur -->
	<div id="friendMessage" class="message">
		<div id="leftArrow"></div>
		<p>salut</p>
	</div>

	<!-- # Mes réponses-->
	<div id="myMessage" class="message">
		<div id="rightArrow"></div>
		<p>hee salut toi comment vas-tu ?</p>
	</div>


	<!-- # Formulaire d'envoi des messages -->
	<div id="formulaire">
		<form action="" method="" accept-charset="utf-8">
			<input type="text" name="message">
			<button type="submit">
				<i class="fa fa-paper-plane" aria-hidden="true"></i>
			</button>
			
		</form>
	</div>


	</div>
</body>
</html>

<!-- # -->