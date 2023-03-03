
<?php
include('../../config/dbcon.php');

    $result = mysqli_query($conn,"SELECT sum(area_ha) FROM ngp_area_planted") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$area_ha=number_format($rows['sum(area_ha)']);
        }

?>

<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=NGP: Area Planted in hectares.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	$output .="
		<table>
			<h3 style='color:#008B8B;'>ENR Profile : NGP (Area Planted in hectares, By Year), Region 10</h3>
			<thead> <br>
				<tr style='color:#008B8B;'>
					<th><h3>Province</h3></th>
					<th><h3>Area (ha)</h3></th>
					<th><h3>Year</h3></th>	
					
				</tr>

				<tr>
					<th>Regional Total</th>
					<th>".$area_ha."</th>
					<th>----</th>
			
					
				</tr>
			<tbody>
	";
	

	$query = $conn->query("SELECT * FROM `ngp_area_planted` order by province,year asc") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
				
					<td><center>".$fetch['province']."</center></td>
					<td><center>".number_format($fetch['area_ha'])."</center></td>
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