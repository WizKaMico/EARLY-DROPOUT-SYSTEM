<?php
	session_start();
	include_once('../../connection/connection.php');

     if(ISSET($_POST['save'])){
		if($_FILES['file']['name']){
			$file_id = $_POST['file_id'];
			$filename = explode(".", $_FILES['file']['name']);
			if($filename[1] == 'csv'){
				$handler = fopen($_FILES['file']['tmp_name'], "r");
				while($data = fgetcsv($handler)){
					$conn->query("INSERT INTO `student` (firstname, lastname, course, year, section, gender, date_created, file_id) VALUES('$data[0]', '$data[1]', '$data[2]', '$data[3]', '$data[4]','$data[5]','$data[6]', '$file_id')");
					
				}
 				$conn->query("INSERT INTO `check_stud_file` (file_id) VALUES('$file_id')");
				fclose($handler);
			}
		}
 
		header('location:index.php');
 
	}

?>