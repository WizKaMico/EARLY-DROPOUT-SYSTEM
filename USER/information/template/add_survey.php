<?php
	session_start();
	include_once('../../../connection/connection.php');

	if(isset($_POST['save'])){


		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$department = $_POST['department'];
		$email = $_POST['email'];
		$contact_no = $_POST['contact_no'];
		date_default_timezone_set('Asia/Manila');
		$date_created = date('Y-m-d');
		$survey_id = $_POST['survey_id'];
		$sql = "INSERT INTO survey_response (first_name, last_name, department, email, contact_no, survey_id, date_created) VALUES  ('$first_name', '$last_name', '$department', '$email', '$contact_no', '$survey_id', '$date_created')";

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

	header('location: index.php?id='.$survey_id);
?>