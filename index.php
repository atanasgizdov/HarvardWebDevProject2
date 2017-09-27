<?php include 'views/header.php'; ?>

<script>
	
</script>

<form action="carPicker.php" method="post" id="aligned">
	<input type="hidden" name="action" value="carPicker">

	<main>
			
    <h1>Please select from the options below and we'll suggest your dream car!</h1>
    
       
        <?php if (isset($errors)) : ?>
		<ul>
			<?php foreach ($errors as $error) : ?>
				<li><?=$error?></li>
			<?php endforeach; ?>	
		</ul>
		<?php endif ?>	
		

        <label>Where do you live?</label>
        <select name = "country">
  				<option value="1">North America</option>
  				<option value="2">Europe</option>
		</select>
		
		<br>

        <label>What type of car do you prefer?</label>
        <select name = "cartype">
  				<option value = "1">Sports Car</option>
  				<option value = "2">Family Car</option>
			</select>
		<br>
		
		<div>
		<label>Do you prefer new or used?</label>
         	<label>
    			<input type="radio" class="radio" name = "carneworused" value="New" checked> New <br>
    			<input type="radio" class="radio" name = "carneworused" value="Used"> Used
    		</label> 			
    	</div>
		<br>
		
		

        <label>Please enter how many years you plan to own the car: </label>
        <input type="number" name="lengthOfOwnership" required><br>		
		<h1>Please give us some info about your current trade in:</h1>
		
		<br>

        <label>Make:</label>
        <input type="text" name="currentMake" required><br>

        <label>Miles:</label>
        <input type="number" name="currentMiles" required><br>

        <label>&nbsp;</label>
        <input type="submit" value="Submit"><br>
    
    </main>
</form>
<?php include 'views/footer.php'; ?>