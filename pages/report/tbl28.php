
<?php
include('../../config/dbcon.php');

     $result = mysqli_query($conn,"SELECT sum(Area_ha) FROM existing_industrial_forest_management_area") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Area_ha=number_format($rows['sum(Area_ha)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Area_planted_ha) FROM existing_industrial_forest_management_area") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Total_area_planted=number_format($rows['sum(Area_planted_ha)']);
        }

?>

<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=Existing Industrial Forest Management Area IFMA.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	$output .="
		<table>
			<h2 style='color:#008B8B;'>ENR Profile : Existing Industrial Forest Management Area (IFMA), Region 10</h2>
			<thead> <br>
				<tr style='color:#008B8B;'>
					<th>PENRO</th>
					<th>CENRO</th>
					<th>Name of Holder</th>
					<th>Location</th>
					<th>Area (ha)</th>
					<th>Area Planted (ha)</th>
					<th>Status (Existing/expired/cancelled)</th>
				</tr>

				<tr>
					<th>Regional Total</th>
					<th></th>
					<th></th>
					<th></th>
					<th>".$Area_ha."</th>
					<th>".$Total_area_planted."</th>
					<th></th>			
				</tr>
			<tbody>
	";
	

	$query = $conn->query("SELECT * FROM `existing_industrial_forest_management_area` ORDER BY Penro ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['Penro']."</center></td>
					<td><center>".$fetch['Cenro']."</center></td>
					<td><center>".$fetch['name_of_holder']."</center></td>
					<td><center>".$fetch['Location']."</center></td>
					<td><center>".$fetch['Area_ha']."</center></td>
					<td><center>".$fetch['Area_planted_ha']."</center></td>
					<td><center>".$fetch['Status']."</center></td>
				</tr>
	";
	}


	
	$output .="
			</tbody>
			
		</table>
	";
	
	echo $output;
	
	
?>