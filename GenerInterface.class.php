<?php 

ini_set('display_errors', 1);
/**
 generates the various pages of the application
 */
class GenerInterface
{
	
// think to add the doctype and the tag 'head' and 'body'
// 	public function DisplayCss(){

// 		echo '	<!DOCTYPE html>
// 				<html lang="fr">
// 				<head
// 					<meta charset="utf-8" />
// 					<meta http-equiv="X-UA-Compatible" content="IE=edge">
// 					<title>Home</title>
// 					<meta name="viewport" content="width=device-width, initial-scale=1">
// 					<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
// 				</head>
// 				<body>
// 				</body>
// 				</html>';

// }


// display description page
	public function RegisterPage(){

		echo '<!DOCTYPE html>
				<html lang="fr">
				<head>
					<meta charset="utf-8" />
					<meta http-equiv="X-UA-Compatible" content="IE=edge">
					<title>Home</title>
					<meta name="viewport" content="width=device-width, initial-scale=1">
					<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
				</head>
				<body>
					<div id="divRegister">
						<form action="home.php" method="POST" id="registerform">

							<label for="civility">Civilité</label>
							<select name="civility[]">
								<option value="M">M</option>
								<option value="MME">MME</option>
							</select>

							<label for="firstName">Prénom</label>
							<input name="firstName" placeholder="Prénom" class="inputRegister">

							<label for="lastName">Nom</label>
							<input name="lastName" placeholder="Nom" class="inputRegister">

							<label for="status">Statut</label>
							<select name="status[]">
								<option value="Professionnel">Professionnel</option>
								<option value="Particulier">Particulier</option>
							</select>

							<label for="business">Entreprise</label>
							<input name="business" placeholder="Entreprise" class="inputRegister">

							<label for="position">Poste</label>
							<input name="position" placeholder="Poste occupé" class="inputRegister">

							<label for="city">Ville</label>
							<input name="city" placeholder="Ville" class="inputRegister">
							
							<label for="placeKnowEvent">Où avez-vous entendu parler de cet événement ?</label>
							<input name="placeKnowEvent" placeholder="Ex : Salon TAF" class="inputRegister">

							<input type="submit" name="register">
						</form>
					</div>
				</body>
			</html>';
	}

public function SurveyForm(){


		echo '

		<!DOCTYPE html>
				<html lang="fr">
				<head>
					<meta charset="utf-8" />
					<meta http-equiv="X-UA-Compatible" content="IE=edge">
					<title>Home</title>
					<meta name="viewport" content="width=device-width, initial-scale=1">
					<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
				</head>
				<body>
		 <div id="surveyForm">
		<form action="" method="POST">
			<label for="stand[]" class="surveyLabel">Quels stands, ateliers ou présentations avez-vous le plus apprécié ?</label>
			<input type="checkbox" name="stand[]" value="Langage Web">
			<input type="checkbox" name="stand[]" value="Langage Orienté Objet">
			<input type="checkbox" name="stand[]" value="Les Frameworks">
			<input type="checkbox" name="stand[]" value="Les Media Queries">
			<input type="checkbox" name="stand[]" value="Atelier Scratch">
			<input type="checkbox" name="stand[]" value="Atelier Code Combat">
			<input type="checkbox" name="stand[]" value="Les BDD">
			<input type="checkbox" name="stand[]" value="La méthode Agile">

			<label for="" class="surveyLabel">Exprimez-vous :</label>
			<textarea id="express" name="express"></textarea> 

			<label for="" class="surveyLabel">Souhaitez-vous être recontacté prochainement ? </label>
			<input type="radio" name="contact" value="Oui">
			<input type="radio" name="contact" value="Non">
			
			<div id="contact">
				<label for="" class="surveyLabel">Veuillez renseigner vos disponibilités et moyens de contact :</label>
				<input type="date" name="date" >
				<input type="time" name="time" >
				<input type="email" name="email" >
				<input type="number" name="number" >
			</div>

			<label for="" class="surveyLabel">Quelles sont vos attentes vis-à-vis de notre structure ?</label>
			<textarea id="expressHope"></textarea> 
			
			<input type="submit" name="envoyer" value="Envoyer">
		</form>
	</div>
	</body>
	</html>';
}

public function ConnectForm(){

echo '<div id="divConnexion">

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

		</form>';

		
		require("authentification.php");
		
// If you want to close the div (for example) you must add "echo" to the closing div tag
	echo '</div>';
}


}




 ?>