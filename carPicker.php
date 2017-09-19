<?php 
	
	// set globals
	$carfuel;
	$cartype;
	$tradeinvalue;
	
	// capture variables passed from index.php
    try {
        $country = filter_input(INPUT_POST, 'country');
    	$cartype = filter_input(INPUT_POST, 'cartype');
    	$carneworused = filter_input(INPUT_POST, 'carneworused');
    	$lengthOfOwnership = filter_input(INPUT_POST, 'lengthOfOwnership');
		$currentMake = filter_input(INPUT_POST, 'currentMake');
		$currentMiles = filter_input(INPUT_POST, 'currentMiles');
		
	}
	
	catch (Exception $e)  {
        $error = "There was an error with the fields you entered, please try again";
        include('../errors/errorCatcher.php');
		echo ($error);

	}
	// calculate a car based on inputs
	
	// based on coutnry, set Diesel or Gas 
		if  ($country == 1) {
			$carfuel = "Petrol Gas";
		}
		else {
			$carfuel = "Diesel";
		}
		
		// based on car preference, set base car type
		
		if  ($cartype == 1) {
			$cartype = "BMW";
			$carpic = "http://cdn26.us1.fansshare.com/photo/bmwm5/bmw-pic-599415286.jpg";
			$carlink = "https://www.cargurus.com/Cars/inventorylisting/viewDetailsFilterViewInventoryListing.action?sourceContext=carGurusHomePage_false_0&formSourceTag=112&newSearchFromOverviewPage=true&inventorySearchWidgetType=AUTO&entitySelectingHelper.selectedEntity=m3&entitySelectingHelper.selectedEntity2=&zip=02138&distance=50&searchChanged=true&modelChanged=true&filtersModified=true";
		}
		else {
			$cartype = "Volvo";
			$carpic = "http://www.telegraph.co.uk/cars/images/2016/01/15/Volvo-XC90-front-xlarge_trans_NvBQzQNjv4BqZgEkZX3M936N5BQK4Va8Ramu_5TrYCayWOnMLHAQ2N0.jpg";
			$carlink = "https://www.cargurus.com/Cars/inventorylisting/viewDetailsFilterViewInventoryListing.action?entitySelectingHelper.selectedEntity=m56&entitySelectingHelper.selectedEntity2=&distance=50&sourceContext=carGurusHomePage_false_0&formSourceTag=111&zip=02138";
		}
		
		// calculate trade in value based on current car
		
		if  ($currentMiles >= 100000) {
			$tradeinvalue = "$3000";
		}
		else {
			$tradeinvalue = "$5000";
		}
		
		$result = "$carneworused $carfuel $cartype!";
		
		include('views/displayResults.php');
    

 ?>