
<?php
include('../../config/dbcon.php');

    $result = mysqli_query($conn,"SELECT sum(area_ha) FROM ngp_validated_project_sites") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show1=number_format($rows['sum(area_ha)']);
        }


    $result = mysqli_query($conn,"SELECT sum(no_of_seedlings_validated) FROM ngp_validated_project_sites") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show2=number_format($rows['sum(no_of_seedlings_validated)']);
        }


    $result = mysqli_query($conn,"SELECT sum(no_of_seedlings_planted) FROM ngp_validated_project_sites") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show3=number_format($rows['sum(no_of_seedlings_planted)']);
        }


    $result = mysqli_query($conn,"SELECT sum(no_of_seedlings_contracted) FROM ngp_validated_project_sites") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show4=number_format($rows['sum(no_of_seedlings_contracted)']);
        }


    $result = mysqli_query($conn,"SELECT sum(survival) FROM ngp_validated_project_sites") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show5=number_format($rows['sum(survival)']);
        }




?>

<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=NGP: Seedlings Planted By Commodity.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	$output .="
		<table>
			<h2 style='color:#008B8B;'>ENR Profile :  NGP: Seedlings Planted, By Commodity, Region 10</h2>
			<thead> <br>
				<tr style='color:#008B8B;'>
					<th><h3>PENRO/CENRO/PA</h3></th>
					<th><h3>Area (ha) </h3></th>
					<th><h3>No. of Seedlings Validated</h3></th>	
					<th><h3>No. of Seedlings Planted</h3></th>	
					<th><h3>No. of Seedlings Contracted</h3></th>	
					<th><h3>Survival Rate</h3></th>	
				</tr>

				<tr>
					<th>Regional Total</th>
					<th>".$show1."</th>
					<th>".$show2."</th>
					<th>".$show3."</th>
					<th>".$show4."</th>
					<th>".$show5." %</th>
				</tr>
			<tbody>
	";
	



	$query = $conn->query("SELECT * FROM `ngp_validated_project_sites` order by penro_cenro_pa asc") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>CY ".$fetch['penro_cenro_pa']."</center></td>
					<td><center>".$fetch['area_ha']."</center></td>
					<td><center>".$fetch['no_of_seedlings_validated']."</center></td>
					<td><center>".$fetch['no_of_seedlings_planted']."</center></td>
					<td><center>".$fetch['no_of_seedlings_contracted']."</center></td>
					<td><center>".$fetch['survival']." %</center></td>
	
				</tr>
	";
	}
		
	



	$output .="
			</tbody>
			
		</table>
	";
	
	echo $output;
	
	
?>