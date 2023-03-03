
<?php
include('../../config/dbcon.php');
?>

<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=Critical Watersheds.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	$output .="
		<table>
			<h2 style='color:#008B8B;'>ENR Profile : Critical Watersheds, Region 10</h2>
			<thead> <br>
				<tr style='color:#008B8B;'>
					<th><h3>Province</h3></th>
					<th><h3>Name of Watershed</h3></th>
					<th><h3>Area (ha)</h3></th>
				</tr>
			<tbody>
	";
	

	$query = $conn->query("SELECT * FROM `critical_watersheds`") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['Province']."</center></td>
					<td><center>".$fetch['Name_watershed']."</center></td>
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