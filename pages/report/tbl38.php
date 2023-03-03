
<?php
include('../../config/dbcon.php');
?>




<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=Integrated Watershed Management Plan Prepared.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	$output .="
		<table>
			<h3 style='color:#008B8B;'>ENR Profile : Integrated Watershed Management Plan Prepared, Region 10</h3>
			<thead> <br>
				<tr style='color:#008B8B;'>
					<th><h3>Province</h3></th>
					<th><h3>Name of Watershed</h3></th>
					<th><h3>City/Municipality</h3></th>
					<th><h3>Area (ha)</h3></th>	
					<th><h3>Year</h3></th>				
				</tr>

			<tbody>
	";
	

	$query = $conn->query("SELECT * FROM `Inregrated_watershed_management_plan_prepared` ORDER BY Province ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['Province']."</center></td>
					<td><center>".$fetch['Name_of_watershed']."</center></td>
					<td><center>".$fetch['City_Municipality']."</center></td>
					<td><center>".$fetch['Area_ha']."</center></td>
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