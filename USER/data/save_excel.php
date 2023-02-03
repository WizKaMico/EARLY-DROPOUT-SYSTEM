<?php
    $file_id = $_GET['file_id'];
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=student_list.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");
 
	include_once('../../connection/connection.php');
 
	$output = "";
 
	$output .="
		<table>
			<thead>
				<tr>
					   <th>FIRSTNAME</th>
                        <th>LASTNAME</th>
                        <th>COURSE</th>
                        <th>YEAR</th>
                        <th>SECTION</th>
                        <th>ACTION</th>
				</tr>
			<tbody>
	";
 
	$query = $conn->query("SELECT * FROM `student` WHERE file_id = '$file_id'") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
 
	$output .= "
				<tr>
					<td>".$fetch['firstname']."</td>
					<td>".$fetch['lastname']."</td>
					<td>".$fetch['course']."</td>
					<td>".$fetch['year']."</td>
					<td>".$fetch['section']."</td>
				</tr>
	";
	}
 
	$output .="
			</tbody>
 
		</table>
	";
 
	echo $output;
 
 
?>