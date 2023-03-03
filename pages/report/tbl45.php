
<?php
include('../../config/dbcon.php');
?>




<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=Major River Basins.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	$output .="
		<table>
			<h2 style='color:#008B8B;'>ENR Profile : Major River Basins, Region 10</h2>
			<thead> <br>
				<tr style='color:#008B8B;'>
					<th><h3>River Basins</h3></th>
					<th><h3>Area (ha)</h3></th>
					<th><h3>Provinces Convered</h3></th>
					<th><h3>City/Municipality Covered</h3></th>	
					<th><h3>River Tributary</h3></th>				
					<th><h3>Outlet</h3></th>	
				</tr>

			<tbody>
	";
	

	$query = $conn->query("SELECT * FROM `major_river_basins`") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['River_basins']."</center></td>
					<td><center>".$fetch['area_ha']."</center></td>
					<td><center>".$fetch['provinces_covered']."</center></td>
					<td><center>".$fetch['city_municipality_covered']."</center></td>
					<td><center>".$fetch['river_tributary']."</center></td>
					<td><center>".$fetch['outlet']."</center></td>
				</tr>
	";
	}


	
	$output .="
			</tbody>
			
		</table>
	";
	
	echo $output;
	
	
?>