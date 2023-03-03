
<?php
include('../../config/dbcon.php');
?>




<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=Management of Foreshore Areas-Processed and Endorsed.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	$output .="
		<table>
			<h3 style='color:#008B8B;'>ENR Profile : Management of Foreshore Areas-Processed and Endorsed, Region 10</h3>
			<thead> <br>
				<tr style='color:#008B8B;'>
					<th><h3>PENRO/CENRO</h3></th>
					<th><h3>No. of Foreshore Area</h3></th>
					<th><h3>Area (ha)</h3></th>
					<th><h3>Year</h3></th>	
					
				</tr>

			<tbody>
	";
	

	$query = $conn->query("SELECT * FROM `management_of_foreshore_areas_processed_and_endorsed` order by Operating_unit asc") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['Operating_unit']."</center></td>
					<td><center>".$fetch['no_of_foreshore_area']."</center></td>
					<td><center>".$fetch['area_ha']."</center></td>
					<td><center>".$fetch['year']."</center></td>
			
				</tr>
	";
	}


	
	$output .="
			</tbody>
			
		</table>
	";
	
	echo $output;
	
	
?>