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
	<link href='http://fonts.googleapis.com/css?family=Ewert' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type='html/css' href="car_calc.css">
	
	<!-- Below enables dragability of images -->
	<script>
		$(document).ready(function()
			{
				$( '.img-polaroid' ).resizable();
				$( '.img-polaroid' ).draggable();
			});
  	</script>
	

</head>
<body>
	<div id='top_nav'>
<!-- 		<h1>Car Haggler</h1> -->		
<img id= 'logo' src="http://www.logomaker.com/logo-images/9847677fc7a8eec4.gif"/>
<!-- 
<img src="http://www.logomaker.com/logo-images/9847677fc7a8eec4.gif"/>
<a href="http://www.logomaker.com"><img src="http://www.logomaker.com/images/logos.gif" alt="logos" border="0"/></a> -->
	</div>

	<div id='center_shell'>
			<!--below, is the form for submitting a new dealer offer -->		
			<form action= 'car_calc_process.php' method = 'post'>
			<input type="text" name = 'dealer' placeholder = 'Dealer'>
			<br>
			<input type="text" name = 'car_type' placeholder = 'Car Type'>
			<br>
			<input type="text" name = 'monthly_payment' placeholder='Monthly Payment'>
			<br>
			<input type="text" name = 'num_months' placeholder='Number of Months'>
			OR
			<input type="text" name = 'num_years' placeholder='Number of Years'>
			<br>
			<input type="text" name = 'apr' placeholder='APR %'>
			<br>
			<input type="text" name = 'down_payment' placeholder='Down Payment %'>
			<br>
			<input type="text" name = 'sec_dep' placeholder='Security Deposit %'>
			<br>
			<input type = 'hidden' name = 'action' value = 'add_calc'>
			<input type="submit" class="btn btn-success" value='Calculate NPV'>
		</form>
		<!-- End of adding new dealer offer Form -->

	</div>
	
	
	




</body>
</html> 