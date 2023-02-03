<?php
	session_start();
	include_once('../../connection/connection.php');
 
	if(isset($_POST['save'])){
		$id = $_POST['id']; 
		$firstname = $_POST['firstname']; 
		$lastname = $_POST['lastname']; 
		$course = $_POST['course']; 
		$year = $_POST['year']; 
		$section = $_POST['section']; 
		$file_id = $_POST['file_id'];
		$sql = "UPDATE student SET firstname = '$firstname', lastname = '$lastname', course = '$course', year = '$year', section = '$section'  WHERE id = '$id'";
 
		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member updated successfully';
		}
		///////////////
 
		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
 
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to edit first';
	}
 
	header('location: edit_csv.php?file_id='.$file_id);
 
?>