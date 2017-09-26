<?php 
//include Car picker logic Class
require ('classes/Car.php');
// include validation Class
require('classes/Form.php');
use DWA\Form;
$form = new Form($_POST);
	
	
	
	// capture variables passed from index.php
    
        $country = $form->get('country', 'Country Not Known');
    	$cartype = $form->get('cartype', 'Car Type Not Known');
    	$carneworused = $form->get('carneworused', 'New');
    	$lengthOfOwnership = $form->get('lengthOfOwnership', 'You did not provide how long you have owned your car');
		$currentMake = $form->get('currentMake', 'The make of your current car was not provides');
		$currentMiles = $form->get('currentMiles', '100000');
		
		//validation
		if ($form->isSubmitted()) {
			
		$errors = $form->validate([
			'country' => 'required',
			'cartype' => 'required',
			'carneworused' => 'required',
			'lengthOfOwnership' => 'numeric',
			'currentMiles' => 'required',
			'currentMiles' => 'numeric',
			'currentMake' => 'alpha'
			
		]);
		
		if (!empty($errors)) {
			header("location: index.php");
			echo ("wtf");
		}
			
		}
		
	
	// new car object
	$car = new Car($country,$cartype,$currentMiles,$carneworused);
	
	//grab relavant object properties
	$result = strval($car->getNewOrUsed($car)) ." ". strval($car->getCarType($car)) ." " .strval($car->getCarMake($car)) . "!" ;
	
	
		
	//display results page	
	include('views/displayResults.php');
    

 ?>