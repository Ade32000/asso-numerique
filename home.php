<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<title>Home</title>
</head>
<body>

	<div id="home">
		<form action="" method="POST">
			<button type="submit" class="home" name="registerPage">INSCRIPTION</button>


			<?php 

// at the click of the inscription button, we generate the interface by calling the class

			if (isset($_POST['registerPage'])) {
				
				require_once "Interface.class.php";
				$visitorRegister = new Interface;
				$visitorRegister->registerPage();


				// We retrieve the data entered by the visitor and send them to the database with the class method

				if(isset($_POST['register'])){

					require_once "Visitor.class.php";

					$civility = $_POST['civility'];
					$firstName = $_POST['firstName'];
					$lastName = $_POST['lastName'];
					$status = $_POST['status'];
					$business = $_POST['business'];
					$position = $_POST['position'];
					$city = $_POST['city'];
					$placeKnowEvent = $_POST['placeKnowEvent'];


					$visitor = new Visitor($civility, $firstName, $lastName, $status, $business, $position, $city, $placeKnowEvent);

					$visitor->databaseRegister();

				}
			}

			?>


			<button type="submit" class="home" name="survey">QUESTIONNAIRE</button>
			<button type="submit" class="home" name="adminAcces">ACCES ADMIN</button>
		</form>
	</div>
</body>
</html>