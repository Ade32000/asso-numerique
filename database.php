<?php 

try  
{
	$db = new PDO('mysql:host=localhost;dbname=asso;charset=utf8', 'annie', '12345678');
}
		// in case of error, display a message :
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
} 

?>