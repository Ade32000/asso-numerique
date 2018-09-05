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

	function databaseRegister(){


        //     $req = $db->prepare('INSERT INTO visitor(visitor_civility,visitor_firstName,visitor_lastName,product_place,product_description,product_size,product_weight,product_reference,product_state)

        //             VALUES (:product_name,:product_price,:product_stock,:product_place,:product_description,:product_size,:product_weight,:product_reference,:product_state)');

        //     $req->execute(array(

        //         ':product_name' => $product_name,

        //         ':product_price' => $product_price,

        //         ':product_stock' => $product_stock,

        //         ':product_place' => $product_place,

        //         ':product_description' => $product_description,

        //         ':product_size' => $product_size,

        //         ':product_weight' => $product_weight,

        //         ':product_reference' => $product_reference,

        //         ':product_state' => $product_state

        //         ));

        //     return $req;

        // }
	}
}












 ?>