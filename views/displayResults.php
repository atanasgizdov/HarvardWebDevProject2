<?php include 'views/header.php'; ?>
<main>
    <h1>Based on your input, we recommend the following car:</h1>
    <p><b><?php echo htmlspecialchars($result); ?></p></b>
    <img src="<?php echo htmlspecialchars(strval($car->getCarPic($car))); ?>" alt="pic of car" style="width:500px;height:350px;">
        
    <p> Please refer to our friends at Car Gurus if you would like to find a car like this in your area</p>
    <ul>
    	<li>
    		<a href="<?php echo htmlspecialchars(strval($car->getCarLink($car))); ?>">Car Gurus</a>
    	</li>
    </ul>
    
    
    <h2>By trading in your existing car, you may be eligible to save up to: </h2>
    <p><?php echo htmlspecialchars(strval($car->getTradeIn($car))); ?></p>
</main>
<?php include 'views/footer.php'; ?>