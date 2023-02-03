<?php
	session_start();
	include_once('../../connection/connection.php');

	if(isset($_GET['id'])){
		  $file_id = $_GET['file_id'];
		$sql = "DELETE FROM student WHERE id = '".$_GET['id']."'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'student deleted successfully';
		}
		////////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member deleted successfully';
		// }
		/////////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to delete first';
	}

	header('location: edit_csv.php?file_id='.$file_id);
?>