<?php include 'header.php'; ?>

<script>
$('input[type="checkbox"]').on('change', function() {
   $('input[type="checkbox"]').not(this).prop('checked', false);
});
</script>




<main>
    <h1>Please select from the options below and we'll suggest your dream car!</h1>
    <form action="." method="post" id="aligned">
        <input type="hidden" name="action" value="add_technician">

        <label>Where do you live?</label>
        	<select>
  				<option value="NA">North America</option>
  				<option value="EU">Europe</option>
			</select>
		<br>

        <label>What type of car do you prefer?</label>
        <select>
  				<option value="Sports">Sports Car</option>
  				<option value="Family">Family Car</option>
			</select>
		<br>
		
		<div>
		<label>Do you prefer new or used?</label>
         	<label>
    			<input type="checkbox" class="radio" value="1" name="fooby[1][]" />New</label>
  			<input type="checkbox" />
  			
    	</div>
		<br>
		
		

        <label>Please enter how many years you plan to own the car: </label>
        <input type="number" name="lengthofownership"><br>		
		<h1>Please give us some info about your current trade in:</h1>
		
		<br>

        <label>Make:</label>
        <input type="text" name="currentMake"><br>

        <label>Miles:</label>
        <input type="number" name="currentMiles"><br>

        <label>&nbsp;</label>
        <input type="submit" value="Submit"><br>
    </form>

</main>
<?php include 'footer.php'; ?>