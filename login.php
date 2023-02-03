<?php include('connection/connection.php'); ?>
<?php session_start(); ?>
<?php
	if (isset($_POST['login']))
		{
			$username = mysqli_real_escape_string($conn, $_POST['user']);
			$password = mysqli_real_escape_string($conn, $_POST['pass']);
 
			$query 		= mysqli_query($conn, "SELECT * FROM users WHERE  password='$password' and username='$username'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
 
			if ($num_row > 0) 
				{			
					$_SESSION['user_id']=$row['user_id'];
					header('location: USER/index.php?view=HOME');
 
				}
			else
				{
					header('location: index.php');
				}
		}
  ?>