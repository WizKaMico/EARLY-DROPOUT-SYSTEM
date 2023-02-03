<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>EOD</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
	<style>
		.height10{
			height:10px;
		}
		.mtop10{
			margin-top:10px;
		}
		.modal-label{
			position:relative;
			top:7px
		}
	</style>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="row">
			<?php
				if(isset($_SESSION['error'])){
					echo
					"
					<div class='alert alert-danger text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['error']."
					</div>
					";
					unset($_SESSION['error']);
				}
				if(isset($_SESSION['success'])){
					echo
					"
					<div class='alert alert-success text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['success']."
					</div>
					";
					unset($_SESSION['success']);
				}
			?>
			</div>
			<div class="row">
				<a href="#addnew" data-toggle="modal" class="btn btn-primary" style="background-color:black; border-color:black;"><span class="glyphicon glyphicon-plus"></span> UPLOAD CSV</a>
			</div>
			<div class="height10">
			</div>
			<div class="row">
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th>SECTION</th>
						<th>FILE</th>
						<th>DATE UPLOADED</th>
						<th>ACTION</th>
						
					</thead>
					<tbody>
						<?php
							include_once('../../connection/connection.php');
							$sql = "SELECT *, file.file_id as rfile, check_stud_file.file_id as tfile FROM file left join check_stud_file ON file.file_id = check_stud_file.file_id";

							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
								$name = explode('/', $row['file']);
								echo 
								"<tr>
									<td>".$row['section']."</td>
									<td>".$row['name']."</td>
									<td>".date('F d, Y', strtotime($row['date_uploaded']))."</td>
								
									<td>";
                                     
                                     if(empty($row['tfile'])){
									   echo"
										<a href='download.php?file=".$name[1]."' class='btn btn-primary' style='background-color:black; border-color:black;'><span class='glyphicon glyphicon-download'></span></a>
										<a href='view_csv.php?csv=".$row['file']."' class='btn btn-primary' style='background-color:black; border-color:black;'><span class='glyphicon glyphicon-book'></span></a>
										<a href='#edit_".$row['rfile']."' class='btn btn-primary' data-toggle='modal' style='background-color:black; border-color:black;'><span class='glyphicon glyphicon-upload'></span></a>
										";
									}else{
										echo"
										<a href='download.php?file=".$name[1]."' class='btn btn-primary' style='background-color:black; border-color:black;'><span class='glyphicon glyphicon-download'></span></a>
										<a href='edit_csv.php?file_id=".$row['rfile']."' class='btn btn-primary' style='background-color:black; border-color:black;'><span class='glyphicon glyphicon-book'></span></a>
										
										";	

									}	

									echo" </td>
								</tr>";
								include('edit_delete_modal.php');
							}
							/////////////////

							//use for MySQLi Procedural
							// $query = mysqli_query($conn, $sql);
							// while($row = mysqli_fetch_assoc($query)){
							// 	echo
							// 	"<tr>
							// 		<td>".$row['id']."</td>
							// 		<td>".$row['firstname']."</td>
							// 		<td>".$row['lastname']."</td>
							// 		<td>".$row['address']."</td>
							// 		<td>
							// 			<a href='#edit_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>
							// 			<a href='#delete_".$row['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>
							// 		</td>
							// 	</tr>";
							// 	include('edit_delete_modal.php');
							// }
							/////////////////

						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php include('add_modal.php') ?>

<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
<!-- generate datatable on our table -->
<script>
$(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});
</script>
</body>
</html>