
<?php
include('../../config/dbcon.php');
?>




<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=Classified Major Rivers.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	$output .="
		<table>
			<h2 style='color:#008B8B;'>ENR Profile : Classified Major Rivers, Region 10</h2>
			<thead> <br>
				<tr style='color:#008B8B;'>
					<th><h3>Name of Rivers</h3></th>
					<th><h3>Category</h3></th>
					<th><h3>Classification</h3></th>
					<th><h3>Location</h3></th>	
					<th><h3>Exit point</h3></th>				
				</tr>

			<tbody>
	";
	

	$query = $conn->query("SELECT * FROM `classified_major_rivers`") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['Name_Rivers']."</center></td>
					<td><center>".$fetch['Category']."</center></td>
					<td><center>".$fetch['Classification']."</center></td>
					<td><center>".$fetch['Location']."</center></td>
					<td><center>".$fetch['Exit_point']."</center></td>
				</tr>
	";
	}


	
	$output .="
			</tbody>
			
		</table>
	";
	
	echo $output;
	
	
?>