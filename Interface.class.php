<?php 


/**
 generates the various pages of the application
 */
class Interface
{
	
	function __construct(argument)
	{
		# code...
	}

	function RegisterPage(){

		echo '<div id="divRegister">
				<form action="" method="POST" id="registerplaceholderm">

					<label for="civility">Civilité</label>
					<select name="civility">
						<option value="">M</option>
						<option value="">MME</option>
					</select>

					<label for="firstName"></label>
					<input name="firstName" placeholder="Prénom" class="inputRegister">

					<label for="lastName"></label>
					<input name="lastName" placeholder="Nom" class="inputRegister">

					<label for="status"></label>
					<select name="status">
						<option value="">Professionnel</option>
						<option value="">Particulier</option>
					</select>

					<label for="business"></label>
					<input name="business" placeholder="Entreprise" class="inputRegister">

					<label for="position"></label>
					<input name="position" placeholder="Poste occupé" class="inputRegister">

					<label for="city"></label>
					<input name="city" placeholder="Ville" class="inputRegister">
					
					<label for="placeKnowEvent"></label>
					<input name="placeKnowEvent" placeholder="Ex : Salon TAF" class="inputRegister">

					<input type="submit" name="register">
				</form>
			</div>';
	}



}




 ?>