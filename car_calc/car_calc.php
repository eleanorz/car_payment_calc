<?php ?> 
<html>
<head>
	<title>Car Haggler</title>
	<link rel="icon" type="image/ico" href="pic/red_car.ico">
	<script src="http://d3js.org/d3.v3.min.js"></script>
	<link href="../../bootstrap/docs/assets/css/bootstrap.css" rel="stylesheet" media="screen"> 
	<script type="text/javascript" src='http://code.jquery.com/jquery-1.9.1.js'></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
	<script src="../../bootstrap/docs/assets/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type='html/css' href="car_calc.css">
</head>

	<div class='container'>	
		<div id='top_nav' class='row'>
			<img id= 'logo' src="pic/logo.gif"/>

			<div id = 'login'>
				<input type="text" name = 'email' placeholder = 'email'>	
				<input type="text" name = 'password' placeholder = 'password'>
				<input type="submit" class = 'btn btn-default btn-xs' value='login'>
				<br><a href="">new user?</a>
			</div>
				
		</div>
	</div>
<body>

	<div id='center_shell'>
			<!--below, is the form for submitting a new dealer offer -->		
		<form id = 'add_new' action= 'car_calc_process.php' method = 'post'>
			<h4>Add New Offer</h4>
			<input type="text" name = 'dealer' placeholder = 'dealer'>
			<br>
			<input type="text" name = 'car_type' placeholder = 'car type'>
			<br>
			<input type="text" name = 'monthly_payment' placeholder='monthly payment'>
			<br>
			<input type="text" name = 'num_months' placeholder='number of months'>
			<br>
			<input type="text" name = 'num_years' placeholder='or number of years'>
			<br>
			<input type="text" name = 'apr' placeholder='APR'>
			<br>
			<input type="text" name = 'down_payment' placeholder='down payment'>
			<br>
			<input type="text" name = 'sec_dep' placeholder='security deposit'>
			<br>
			<input type = 'hidden' name = 'action' value = 'add_calc'>
			<input type="submit" class="btn btn-primary btn-lg" value='calculate !'>
		</form>
		<!-- End of adding new dealer offer Form -->

		<div id = 'taglines'>
			<h1>		
				Calculate the total cost of any offer, on the spot. 
			</h1>

			<br>

			<h2>
				We track all your offers, for free.
			</h2>

			<h4>				
			 	Try us, no sign-up, to the right!
			</h4>			
		</div>


	</div>




</body>
</html> 