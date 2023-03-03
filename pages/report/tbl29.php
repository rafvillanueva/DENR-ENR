
<?php
include('../../config/dbcon.php');

     $result = mysqli_query($conn,"SELECT sum(Area_ha) FROM existing_protection_area_community_brma") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Area_ha=number_format($rows['sum(Area_ha)']);
        }


?>

<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=Existing Protected Area Community-Based Resource Management Agreement PACBRMA.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	$output .="
		<table>
			<h4 style='color:#008B8B;'>ENR Profile : Existing Protected Area Community-Based Resource Management Agreement (PACBRMA), Region 10</h4>
			<thead> <br>
				<tr style='color:#008B8B;'>
					<th>Province</th>
					<th>Name of Protected Area</th>
					<th>Name of PACBRMA Holder</th>
					<th>Location of CBP Area</th>
					<th>Area (ha)</th>
				
				</tr>

				<tr>
					<th>Regional Total</th>
					<th></th>
					<th></th>
					<th></th>
					<th>".$Area_ha."</th>
							
				</tr>
			<tbody>
	";
	

	$query = $conn->query("SELECT * FROM `existing_protection_area_community_brma` ORDER BY Province ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['Province']."</center></td>
					<td><center>".$fetch['Name_of_Protected_Area']."</center></td>
					<td><center>".$fetch['Name_of_PACBRMA_holder']."</center></td>
					<td><center>".$fetch['Location_of_CBP_area']."</center></td>
					<td><center>".$fetch['Area_ha']."</center></td>
	
				</tr>
	";
	}


	
	$output .="
			</tbody>
			
		</table>
	";
	
	echo $output;
	
	
?>