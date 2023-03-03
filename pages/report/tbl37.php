
<?php
include('../../config/dbcon.php');
?>




<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=INREMP-Natural Resource Management Area Developed in hectares.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	$output .="
		<table>
			<h3 style='color:#008B8B;'>ENR Profile : INREMP-Natural Resource Management Area Developed in hectares, By Year, Region 10</h3>
			<thead> <br>
				<tr style='color:#008B8B;'>
					<th><h3>Province</h3></th>
					<th><h3>Target (ha)</h3></th>
					<th><h3>Accomplishment (ha)</h3></th>
					<th><h3>Accomplishment (%)</h3></th>	
					<th><h3>Year</h3></th>				
				</tr>

			<tbody>
	";
	

	$query = $conn->query("SELECT * FROM `Inremp_natural_resource_management_area_developed` ORDER BY year ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['Province']."</center></td>
					<td><center>".$fetch['Target']."</center></td>
					<td><center>".$fetch['Accomplishment_ha']."</center></td>
					<td><center>".$fetch['Accomplishment_percent']."</center></td>
					<td><center>".$fetch['Year']."</center></td>
				</tr>
	";
	}


	
	$output .="
			</tbody>
			
		</table>
	";
	
	echo $output;
	
	
?>