<?php include 'views/header.php'; ?>
<main>
    <h1>Based on your input, we recommend the following car:</h1>
    <p><b><?php echo htmlspecialchars($result); ?></p></b>
    <img src="<?php echo htmlspecialchars($carpic); ?>" alt="volvo" style="width:500px;height:350px;">
    <br>
    
    <p> Please refer to our friends at Car Gurus if you would like to find a car like this in your area</p>
    <ul>
    	<li>
    		<a href="<?php echo htmlspecialchars($carlink); ?>">Car Gurus</a>
    	</li>
    </ul>
    <br>
    
    <h2>By trading in your existing car, you may be eligible to save up to: </h2>
    <p><?php echo htmlspecialchars($tradeinvalue); ?></p>
</main>
<?php include 'views/footer.php'; ?>