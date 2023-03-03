
<?php
include('../../config/dbcon.php');

     $result = mysqli_query($conn,"SELECT sum(Area_ha) FROM existing_slup") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Area_ha=number_format($rows['sum(Area_ha)'],2);
        }

?>

<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=Existing Special Land Use Plan SLUP.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	$output .="
		<table>
			<h2 style='color:#008B8B;'>ENR Profile : Existing Special Land Use Plan (SLUP), Region 10</h2>
			<thead> <br>
				<tr style='color:#008B8B;'>
					<th>PENRO</th>
					<th>CENRO</th>
					<th>Location</th>
					<th>Name of Permittee</th>
					<th>Type of Slup</th>
					<th>Area (ha)</th>
					<th>Status (Existing/expired/cancelled)</th>
				</tr>

				<tr>
					<th>Regional Total</th>
					<th></th>
					<th></th>			
					<th></th>
					<th></th>
					<th>".$Area_ha."</th>			
					<th></th>
				</tr>
			<tbody>
	";
	

	$query = $conn->query("SELECT * FROM `existing_slup` ORDER BY Penro ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['Penro']."</center></td>
					<td><center>".$fetch['Cenro']."</center></td>
					<td><center>".$fetch['Location']."</center></td>
					<td><center>".$fetch['Name_of_Permittee']."</center></td>
					<td><center>".$fetch['Type_of_slup']."</center></td>
					<td><center>".$fetch['Area_ha']."</center></td>
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