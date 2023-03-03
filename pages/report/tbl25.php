
<?php
include('../../config/dbcon.php');
?>

<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=Existing Community-Based Forest Management Agreement.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	$output .="
		<table>
			<h2 style='color:#008B8B;'>ENR Profile : Existing Community-Based Forest Management Agreement (CFBMA), Region 10</h2>
			<thead> <br>
				<tr style='color:#008B8B;'>
					<th>Province</th>
					<th>No. of CFBMA Holders</th>
					<th>Area (ha)</th>
					<th>Status (Existing/expired/cancelled)</th>
				</tr>
			<tbody>
	";
	

	$query = $conn->query("SELECT * FROM `existing_cfbma` ORDER BY Province ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['Province']."</center></td>
					<td><center>".$fetch['No_cbfma']."</center></td>
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