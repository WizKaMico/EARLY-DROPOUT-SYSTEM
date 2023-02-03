<?php
    $file_id = $_GET['file_id'];
	header("Content-Type: application/csv");    
	header("Content-Disposition: attachment; filename=student_list.csv");  
	header("Pragma: no-cache"); 
	header("Expires: 0");
 
	include_once('../../connection/connection.php');
 
	$output = "";
 
	$output .="
		<table>
			<thead>
				<tr>
					   <th>ID</th>
						<th>FIRSTNAME</th>
						<th>LASTNAME</th>
						<th>DEPARTMENT</th>
						<th>EMAIL</th>
						<th>CONTACT</th>
				</tr>
			<tbody>
	";
 
	$query = $conn->query("SELECT * FROM `student` WHERE survey_response = '$file_id'") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
 
	$output .= "
				<tr>
					                <td>".$row['id']."</td>
									<td>".$row['first_name']."</td>
									<td>".$row['last_name']."</td>
									<td>".$row['department']."</td>
									<td>".$row['email']."</td>
									<td>".$row['contact_no']."</td>
				</tr>
	";
	}
 
	$output .="
			</tbody>
 
		</table>
	";
 
	echo $output;
 
 
?>