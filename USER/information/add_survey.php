<?php
	require_once '../../connection/connection.php';
 
	if(ISSET($_POST['submit'])){
		if($_FILES['upload']['name'] != "") {
			$file = $_FILES['upload'];
			date_default_timezone_set('Asia/Manila');
 			$date_uploaded = date('Y-m-d');	
 			$id = $_POST['id'];
			$file_name = $file['name'];
			$file_temp = $file['tmp_name'];
			$name = explode('.', $file_name);
			$path = "files/".$file_name;
 
			$conn->query("INSERT INTO `survey_file` VALUES('', '$name[0]', '$path', '$id', '$date_uploaded')") or die(mysqli_error());
 
			move_uploaded_file($file_temp, $path);
			header("location:index.php");
 
		}else{
			echo "<script>alert('Required Field!')</script>";
			echo "<script>window.location='index.php'</script>";
		}
	}
?>