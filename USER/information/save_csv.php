<?php
    $file_id = $_GET['id'];
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
 
	$query = $conn->query("SELECT * FROM `survey_response` WHERE survey_id = '$file_id'") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
 
	$output .= "
				<tr>
					                <td>".$fetch['id']."</td>
									<td>".$fetch['first_name']."</td>
									<td>".$fetch['last_name']."</td>
									<td>".$fetch['department']."</td>
									<td>".$fetch['email']."</td>
									<td>".$fetch['contact_no']."</td>
				</tr>
	";
	}
 
	$output .="
			</tbody>
 
		</table>
	";
 
	echo $output;
 
 
?>