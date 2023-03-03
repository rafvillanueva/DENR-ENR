
<?php
include('../../config/dbcon.php');
?>

<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=Watershed Supporting River Irrigation System of NIA Region 10.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	$output .="
		<table>
			<h2 style='color:#008B8B;'>ENR Profile : Watershed Supporting River Irrigation System of NIA, Region 10</h2>
			<thead> <br>
				<tr style='color:#008B8B;'>
					<th>Name of Watershed </th>
					<th>Regional Irrigation System (RIS)</th>
					<th>Province</th>
					<th>Municipality</th>
					<th>Watershed Area(ha)</th>
					<th>RIS Service Area (ha)</th>
				</tr>
			<tbody>
	";
	

	$query = $conn->query("SELECT * FROM `Watershed_Supporting_River_Irrigation_System_of_NIA` ORDER BY Province ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['Name_of_Watershed']."</center></td>
					<td><center>".$fetch['Regional_Irrigation_System_RIS']."</center></td>
					<td><center>".$fetch['Province']."</center></td>
					<td><center>".$fetch['Municipality']."</center></td>
					<td><center>".number_format($fetch['Watershed_Area_ha'])."</center></td>
					<td><center>".number_format($fetch['RIS_Service_Area_ha'])."</center></td>
				</tr>
	";
	}


	
	$output .="
			</tbody>
			
		</table>
	";
	
	echo $output;
	
	
?>