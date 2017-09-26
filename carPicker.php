<?php 
//include Car picker logic Class
require ('classes/Car.php');
// include validation Class
require('classes/Form.php');
use DWA\Form;
$form = new Form($_POST);
	
	
	
	// capture variables passed from index.php
    try {
        $country = $form->get('country', 'Country Not Known');
    	$cartype = $form->get('cartype', 'Car Type Not Known');
    	$carneworused = $form->get('carneworused', 'New');
    	$lengthOfOwnership = $form->get('lengthOfOwnership', 'You did not provide how long you have owned your car');
		$currentMake = $form->get('currentMake', 'The make of your current car was not provides');
		$currentMiles = $form->get('currentMiles', '100000');
		
	}
	
	catch (Exception $e)  {
        $error = "There was an error with the fields you entered, please try again";
        include('../errors/errorCatcher.php');
		echo ($error);

	}
	
	// new car object
	$car = new Car($country,$cartype,$currentMiles,$carneworused);
	
	//grab relavant object properties
	$result = strval($car->getNewOrUsed($car)) ." ". strval($car->getCarType($car)) ." " .strval($car->getCarMake($car)) . "!" ;
	
	
		
	//display results page	
	include('views/displayResults.php');
    

 ?>