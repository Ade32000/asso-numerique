<?php 


/**
 * 
 */
class Visitor
{
	
	public  $civility;
	public	$firstName;
	public	$lastName;
	public	$status;
	public	$business;
	public	$position;
	public	$city;
	public	$placeKnowEvent;


	function __construct($civility, $firstName, $lastName, $status, $business, $position, $city, $placeKnowEvent)
	{
		$this->civility = $civility;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->status = $status;
		$this->business = $business;
		$this->position = $position;
		$this->city = $city;
		$this->placeKnowEvent = $placeKnowEvent;
	}

	function databaseRegister()
	{
		require "database.php";

            $req = $db->prepare('INSERT INTO visitor(visitor_civility,visitor_firstName,visitor_lastName,visitor_status,visitor_business,visitor_position,visitor_city,visitor_placeKnowEvent)

                    VALUES (:visitor_civility,:visitor_firstName,:visitor_lastName,:visitor_status,:visitor_business,:visitor_position,:visitor_city,:visitor_placeKnowEvent)');

            $req->execute(array(

                ':visitor_civility' => $this->civility,

                ':visitor_firstName' => $this->firstName,

                ':visitor_lastName' => $this->lastName,

                ':visitor_status' => $this->status,

                ':visitor_business' => $this->business,

                ':visitor_position' => $this->position,

                ':visitor_city' => $this->city,

                ':visitor_placeKnowEvent' => $this->placeKnowEvent

                ));

            return $req;

        
	}
}












 ?>