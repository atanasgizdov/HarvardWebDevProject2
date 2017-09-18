<?php 
	
    try {
        $country = filter_input(INPUT_POST, 'country');
    	$cartype = filter_input(INPUT_POST, 'cartype');
    	$carneworused = filter_input(INPUT_POST, 'carneworused');
    	$lengthOfOwnership = filter_input(INPUT_POST, 'lengthOfOwnership');
		$currentMake = filter_input(INPUT_POST, 'currentMake');
		$currentMiles = filter_input(INPUT_POST, 'currentMiles');
		
		echo ($country);
		echo ($cartype);
		echo ($carneworused);
		echo ($lengthOfOwnership);
		echo ($currentMake);
		echo ($currentMiles);
		
		
		include('errors/errorCatcher.php');
    }
	
	catch (Exception $e)  {
        $error = "Please enter all the fields and try again.";
        include('../errors/errorCatcher.php');
		echo ($error);

	}

 ?>