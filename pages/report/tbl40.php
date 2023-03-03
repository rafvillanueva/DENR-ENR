
<?php
include('../../config/dbcon.php');


    $result = mysqli_query($conn,"SELECT sum(Area_ha) FROM key_biodiversity_areas") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$area_ha=number_format($rows['sum(Area_ha)']);
        }

?>




<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=Key Biodiversity Areas.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	$output .="
		<table>
			<h2 style='color:#008B8B;'>ENR Profile : Key Biodiversity Areas, Region 10</h2>
			<thead> <br>
				<tr style='color:#008B8B;'>
					<th><h3>Province</h3></th>
					<th><h3>Key Biodiversity Areas</h3></th>
					<th><h3>Area (ha)</h3></th>
					<th><h3>Legal Basis</h3></th>	
					
				</tr>
				<tr>
					<th>Regional Total</th>
					<th></th>
					<th>".$area_ha."</th>	
					<th></th>		
				</tr>

			<tbody>
	";
	

	$query = $conn->query("SELECT * FROM `key_biodiversity_areas` order by Province asc") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['Province']."</center></td>
					<td><center>".$fetch['Key_Biodiversity_areas']."</center></td>
					<td><center>".$fetch['Area_ha']."</center></td>
					<td><center>".$fetch['Legal_basis']."</center></td>
		
				</tr>
	";
	}


	
	$output .="
			</tbody>
			
		</table>
	";
	
	echo $output;
	
	
?>