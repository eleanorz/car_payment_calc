<?php ?> 
<html>
<head>
	<title>Build Me a House!</title>
	<link rel="icon" type="image/ico" href="pic/red_car.ico">
	<script src="http://d3js.org/d3.v3.min.js"></script>
	<link href="../../bootstrap/docs/assets/css/bootstrap.css" rel="stylesheet" media="screen"> 
	<script type="text/javascript" src='http://code.jquery.com/jquery-1.9.1.js'></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
	<script src="../../bootstrap/docs/assets/js/bootstrap.min.js"></script>
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

	<div id='left_nav'>
		<input type="submit" class="btn btn-success" value="Add First Floor Room">
		<input type="submit" class="btn btn-success" value="Add Second Floor Room">
	</div>

	<div id='center_shell'>

		<form action="submit">
			<input type="text" placeholder='Monthly Payment'>
			<br>
			<input type="text" placeholder='Number of Months'>
			OR
			<input type="text" placeholder='Number of Years'>
			<br>
			<input type="text" placeholder='APR %'>
			<br>
			<input type="button" class="btn btn-success" value='Calculate NPV'>
		</form>

	</div>
	
	
	




</body>
</html> 