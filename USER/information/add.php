<?php
	session_start();
	include_once('../../connection/connection.php');

	if(isset($_POST['add'])){
		$survey_name = $_POST['survey_name'];
		$start_date = $_POST['start_date'];
		$end_date = $_POST['end_date'];
		$date_created = $_POST['date_created'];
		$sql = "INSERT INTO suvery (survey_name, start_date, end_date, date_created) VALUES  ('$survey_name', '$start_date', '$end_date', '$date_created')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member added successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: index.php');
?>