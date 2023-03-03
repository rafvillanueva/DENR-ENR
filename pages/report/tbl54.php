
<?php
include('../../config/dbcon.php');

    $result = mysqli_query($conn,"SELECT sum(No_of_MPAs) FROM Nipas_and_locally_managed_marine_protected_areas WHERE a_status='NIPAS'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show1=number_format($rows['sum(No_of_MPAs)']);
        }

        $result = mysqli_query($conn,"SELECT sum(total_area_ha) FROM Nipas_and_locally_managed_marine_protected_areas WHERE a_status='NIPAS'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show2=number_format($rows['sum(total_area_ha)']);
        }


    $result = mysqli_query($conn,"SELECT sum(No_of_MPAs) FROM Nipas_and_locally_managed_marine_protected_areas WHERE a_status='LGU-Managed MPAs'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show3=number_format($rows['sum(No_of_MPAs)']);
        }

        $result = mysqli_query($conn,"SELECT sum(total_area_ha) FROM Nipas_and_locally_managed_marine_protected_areas WHERE a_status='LGU-Managed MPAs'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show4=number_format($rows['sum(total_area_ha)']);
        }

?>

<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=NIPAS and Locally-managed Marine Protected Areas.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	$output .="
		<table>
			<h3 style='color:#008B8B;'>ENR Profile : NIPAS and Locally-managed Marine Protected Areas, Region 10</h3>
			<thead> <br>
				<tr style='color:#008B8B;'>
					<th><h3>Location / Province</h3></th>
					<th><h3>No. of MPAs </h3></th>
					<th><h3>Total Area (ha)</h3></th>	
					<th><h3>Year</h3></th>	
				</tr>

				<tr>
					<th>NIPAS</th>
					<th>".$show1."</th>
					<th>".$show2."</th>
					<td style='font-weight:bold;'><center>----</center></td>	
				</tr>
			<tbody>
	";
	



	$query = $conn->query("SELECT * FROM `Nipas_and_locally_managed_marine_protected_areas` where a_status='NIPAS' order by location_Province asc") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['location_Province']."</center></td>
					<td><center>".$fetch['No_of_MPAs']."</center></td>
					<td><center>".$fetch['total_area_ha']."</center></td>
					<td><center>".$fetch['year']."</center></td>
	
				</tr>
	";
	}


	$output .= "
				<tr>
					<td><center><b>LGU-Managed MPAs</b></center></td>
					<th>".$show3."</th>
					<th>".$show4."</th>
					<td style='font-weight:bold;'><center>----</center></td>					
					
				</tr>
	";



	$query = $conn->query("SELECT * FROM `Nipas_and_locally_managed_marine_protected_areas` where a_status='LGU-Managed MPAs' order by location_Province asc") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['location_Province']."</center></td>
					<td><center>".$fetch['No_of_MPAs']."</center></td>
					<td><center>".$fetch['total_area_ha']."</center></td>
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