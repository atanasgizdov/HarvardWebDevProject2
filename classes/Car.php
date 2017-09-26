<?php 

class Car {

	// globals
	
	public $result;
	private $country;
	private $carfuel;
	private $currentMiles;
	private $tradeinvalue;
	private $cartype;
	private $carpic;
	private $carlink;
	
	public function __construct($country,$cartype,$currentMiles, $carneworused)
	{
		if ($carneworused == "New") {
			$this->carneworused = "New";
		}
		else {
			$this->carneworused = "Used";
		}
	
		if  ($country == 1) {
			$this->carfuel = "Petrol Gas";
		}
		else {
			$this->carfuel = "Diesel";
		}
		
		if  ($currentMiles >= 100000) {
			$this->tradeinvalue = "$3000";
		}
		else {
			$this->tradeinvalue = "$5000";
		}
	
		// based on car preference, set base car type
		
		if  ($cartype == 1) {
			$this->cartype = "BMW";
			$this->carpic = "http://cdn26.us1.fansshare.com/photo/bmwm5/bmw-pic-599415286.jpg";
			$this->carlink = "https://www.cargurus.com/Cars/inventorylisting/viewDetailsFilterViewInventoryListing.action?sourceContext=carGurusHomePage_false_0&formSourceTag=112&newSearchFromOverviewPage=true&inventorySearchWidgetType=AUTO&entitySelectingHelper.selectedEntity=m3&entitySelectingHelper.selectedEntity2=&zip=02138&distance=50&searchChanged=true&modelChanged=true&filtersModified=true";
		}
		else {
			$this->cartype = "Volvo";
			$this->carpic = "http://www.telegraph.co.uk/cars/images/2016/01/15/Volvo-XC90-front-xlarge_trans_NvBQzQNjv4BqZgEkZX3M936N5BQK4Va8Ramu_5TrYCayWOnMLHAQ2N0.jpg";
			$this->carlink = "https://www.cargurus.com/Cars/inventorylisting/viewDetailsFilterViewInventoryListing.action?entitySelectingHelper.selectedEntity=m56&entitySelectingHelper.selectedEntity2=&distance=50&sourceContext=carGurusHomePage_false_0&formSourceTag=111&zip=02138";
		}	
	}

	// helper functions
		
	public function getNewOrUsed ($Car) {
		return $this->carneworused;
	}
	
	public function getCarType ($Car) {
		return $this->carfuel;
	}
	
	public function getTradeIn ($Car) {
		return $this->tradeinvalue;
	}
	
	public function getCarMake ($Car) {
		return $this->cartype;
	}
	
	public function getCarPic ($Car) {
		return $this->carpic;
	}
	
	public function getCarLink ($Car) {
		return $this->carlink;
	}

}

?>