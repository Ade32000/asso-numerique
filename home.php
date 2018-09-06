			<?php 

			ini_set('display_errors', 1);



// at the click of the inscription button, we generate the interface by calling the class

			if (isset($_POST['registerPage'])) {

				require "GenerInterface.class.php";
				$visitorInterface = new GenerInterface();
				
				$visitorInterface->RegisterPage();


				// We retrieve the data entered by the visitor and send them to the database with the class method

			}

					require 'database.php';

				if(isset($_POST['register']))
				{

					require "Visitor.class.php";


						foreach($_POST['civility'] as $valeur)
						{
						   echo "hey" . $valeur . "heyy";
						   //return $valeur;
						}

					$civility = $valeur; 
						
					$firstName = $_POST['firstName'];
					$lastName = $_POST['lastName'];

						foreach($_POST['status'] as $value)
						{
						   echo "ok" . $value . "okok";
						   //return $value;
						}


					$status = $value;

					$business = $_POST['business'];
					$position = $_POST['position'];
					$city = $_POST['city'];
					$placeKnowEvent = $_POST['placeKnowEvent'];

				

					$visitor = new Visitor($civility, $firstName, $lastName, $status, $business, $position, $city, $placeKnowEvent);

					$visitor->databaseRegister();

					}
 				




			if (isset($_POST['survey'])) {

				require "GenerInterface.class.php";

				$surveyInterface = new GenerInterface();
				
				// $surveyInterface->DisplayCss();

				$surveyInterface->SurveyForm();


			}

			if (isset($_POST['adminAcces'])) {

				require "GenerInterface.class.php";

				$adminAcces = new GenerInterface();
				
				// $surveyInterface->DisplayCss();

				$adminAcces->ConnectForm();


			}

			?>


			
