
<?php
include('../../config/dbcon.php');
?>

<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=Watershed Characterization/Profiling Region 10.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	$output .="
		<table>
			<h2 style='color:#008B8B;'>ENR Profile : Watershed Characterization/Profiling, Region 10</h2>
			<thead> <br>
				<tr style='color:#008B8B;'>
					<th>Year</th>
					<th>Province</th>
					<th>Name of Watershed</th>
					<th>City/Municipality/Barangay</th>
					<th>Area (ha</th>
				</tr>

			<tbody>
	";
	

	$query = $conn->query("SELECT * FROM `watershed_characterization_profiling` ORDER BY Year ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['Year']."</center></td>
					<td><center>".$fetch['Province']."</center></td>
					<td><center>".$fetch['Name_of_Watershed']."</center></td>
					<td><center>".$fetch['City_Municipality_Barangay']."</center></td>
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