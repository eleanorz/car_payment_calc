<?php 
	// require('greenbelt_connection.php');

	if(isset($_POST['action']) AND $_POST['action'] == 'add_calc')
	{
		$dealer = $_POST['dealer'];
		$car_type = $_POST['car_type'];
		$monthly_payment = $_POST['monthly_payment'];
		$num_months = $_POST['num_months'];
		$num_years = $_POST['num_years'];
		$apr = $_POST['apr'];
		$down_payment = $_POST['down_payment'];
		$sec_dep = $_POST['sec_dep'];

		echo "hi guys";

		die();


		// $first_name = mysql_real_escape_string($_POST['first_name']);
		// $last_name = mysql_real_escape_string($_POST['last_name']);
		// $password = mysql_real_escape_string($_POST['password']);
		// $query = "INSERT INTO users (first_name, last_name, created_at, updated_at, password ) VALUES ('{$first_name}', '{$last_name}', NOW(), NOW(), '{$password}' )";
		// mysql_query($query);
		// $o1 = mysql_real_escape_string($_POST['option1']);
		// $o2 = mysql_real_escape_string($_POST['option2']);
		// $o3 = mysql_real_escape_string($_POST['option3']);
		// $o4 = mysql_real_escape_string($_POST['option4']);		


		// $title = mysql_real_escape_string($_POST['title']);
		// $desc = mysql_real_escape_string($_POST['desc']);
		// $o1 = mysql_real_escape_string($_POST['option1']);
		// $o2 = mysql_real_escape_string($_POST['option2']);
		// $o3 = mysql_real_escape_string($_POST['option3']);
		// $o4 = mysql_real_escape_string($_POST['option4']);

		// $query1 = "INSERT INTO polls (name, description, created_at, updated_at) VALUES ('{$title}', '{$desc}', NOW(), NOW() )";
		// mysql_query($query1);

		// $poll_id = mysql_insert_id();

		// if (isset($_POST['option1'])) {
		// 	$query2 = "INSERT INTO poll_options (poll_id, name, created_at, updated_at) VALUES ('{$poll_id}', '{$o1}', NOW(), NOW() )";
		// 	mysql_query($query2);
		// }

		// if (isset($_POST['option2'])) {
		// 	$query2 = "INSERT INTO poll_options (poll_id, name, created_at, updated_at) VALUES ('{$poll_id}', '{$o2}', NOW(), NOW() )";
		// 	mysql_query($query2);
		// }
		// if (isset($_POST['option3'])) {
		// 	$query2 = "INSERT INTO poll_options (poll_id, name, created_at, updated_at) VALUES ('{$poll_id}', '{$o3}', NOW(), NOW() )";
		// 	mysql_query($query2);
		// }

		// if (isset($_POST['option4'])) {
		// 	$query2 = "INSERT INTO poll_options (poll_id, name, created_at, updated_at) VALUES ('{$poll_id}', '{$o4}', NOW(), NOW() )";
		// 	mysql_query($query2);
		// }

		// $find_max=mysql_query("SELECT MAX(id) FROM polls");
		// var_dump($find_max);

		// $max = $find_max[0];
		//echo $max;


		// $query2 = "INSERT INTO poll_options (name, created_at, updated_at) VALUES ('{$o1}', NOW(), NOW() )";
		// mysql_query($query1);

		// echo $query2;

	
		// mysql_query($query2);
		// mysql_query($query2);
	}

	// if(isset($_POST['action']) AND $_POST['action'] == 'addpoll'){
		
	// }

	header('location: car_calc.php');
?>
