
<?php
include('../../config/dbcon.php');
?>

<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=Existing Forest Land Grazing Management Agreement FLGMA.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	$output .="
		<table>
			<h2 style='color:#008B8B;'>ENR Profile : Existing Forest Land Grazing Management Agreement (FLGMA), Region 10</h2>
			<thead> <br>
				<tr style='color:#008B8B;'>
					<th>PENRO</th>
					<th>CENRO</th>
					<th>Municipality/City</th>
					<th>Barangay</th>
					<th>Name of Instrument Holder/Leasee</th>
					<th>Area (ha)</th>
					<th>Status (Existing/expired/cancelled)</th>
				</tr>
			<tbody>
	";
	

	$query = $conn->query("SELECT * FROM `existing_flgma` ORDER BY Penro ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['Penro']."</center></td>
					<td><center>".$fetch['Cenro']."</center></td>
					<td><center>".$fetch['Municipality_City']."</center></td>
					<td><center>".$fetch['Barangay']."</center></td>
					<td><center>".$fetch['Name_of_instrument']."</center></td>
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