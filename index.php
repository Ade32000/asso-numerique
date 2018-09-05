<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Connexion - Espace Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>

<body>

	<div id="divConnexion">

		<form method="POST" id="formConnexion">

			<div>
				<h3>Connexion</h3>
			</div>

			<div id="inputLogin">
				<input id="login" type="text" name="login" placeholder="Login...">
			</div>

			<div id="inputPassword">
				<input id="password" type="password" name="password" placeholder="Password...">
			</div>

			<div id="inputSubmit">
				<input id="userSubmit" type="submit" name="submit" value="Se connecter">
			</div>

		</form>

		<?php 
		require("authentification.php");
		?>

	</div>

</body>
</html>