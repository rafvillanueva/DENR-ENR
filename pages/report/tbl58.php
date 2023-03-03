
<?php
include('../../config/dbcon.php');

    $result = mysqli_query($conn,"SELECT sum(E_NIPAS_Area_ha) FROM proclaimed_propected_areas_under") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show1=number_format($rows['sum(E_NIPAS_Area_ha)']);
        }

    $result = mysqli_query($conn,"SELECT sum(PASA_Area_ha) FROM proclaimed_propected_areas_under") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show2=number_format($rows['sum(PASA_Area_ha)']);
        }

     $result = mysqli_query($conn,"SELECT sum(Terrestrial_ha) FROM proclaimed_propected_areas_under") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show3=number_format($rows['sum(Terrestrial_ha)']);
        }

     $result = mysqli_query($conn,"SELECT sum(Seascape_ha) FROM proclaimed_propected_areas_under") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show4=number_format($rows['sum(Seascape_ha)']);
        }


     $result = mysqli_query($conn,"SELECT sum(Mangroves_ha) FROM proclaimed_propected_areas_under") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show5=number_format($rows['sum(Mangroves_ha)']);
        }


     $result = mysqli_query($conn,"SELECT sum(Forestland_ha) FROM proclaimed_propected_areas_under") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show6=number_format($rows['sum(Forestland_ha)']);
        }


     $result = mysqli_query($conn,"SELECT sum(Lakes_ha) FROM proclaimed_propected_areas_under") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show7=number_format($rows['sum(Lakes_ha)']);
        }


     $result = mysqli_query($conn,"SELECT sum(Rivers_ha) FROM proclaimed_propected_areas_under") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show8=number_format($rows['sum(Rivers_ha)']);
        }




?>

<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=Proclaimed Protected Areas under E-NIPAS Region 10.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	$output .="
		<table>
			<h2 style='color:#008B8B;'>ENR Profile : Proclaimed Protected Areas under E-NIPAS, Region 10</h2>
			<thead> <br>
				<tr style='color:#008B8B;'>
					<th><h3>Province</h3></th>
					<th><h3>Name of Protected Area</h3></th>
					<th><h3>E-NIPAS Area(ha)</h3></th>
					<th><h3>PASA Area(ha)</h3></th>
					<th><h3>Category</h3></th>
					<th><h3>Terrestrial(ha)</h3></th>
					<th><h3>Seascape(ha)</h3></th>
					<th><h3>Mangroves(ha)</h3></th>
					<th><h3>Forestland(ha)</h3></th>
					<th><h3>Lakes(ha)</h3></th>
					<th><h3>Rivers(ha)</h3></th>
				</tr>

				<tr>
					<th>Regional Total</th>
					<th></th>
					<th>".$show1."</th>
					<th>".$show2."</th>
					<th></th>
					<th>".$show3."</th>
					<th>".$show4."</th>
					<th>".$show5."</th>
					<th>".$show6."</th>
					<th>".$show7."</th>
					<th>".$show8."</th>
				</tr>
			<tbody>
	";


	$query = $conn->query("SELECT * FROM `proclaimed_propected_areas_under` order by Province asc") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['Province']."</center></td>
					<td><center>".$fetch['Name_of_Protected_Area']."</center></td>
					<td><center>".$fetch['E_NIPAS_Area_ha']."</center></td>
					<td><center>".$fetch['PASA_Area_ha']."</center></td>
					<td><center>".$fetch['Category']."</center></td>
					<td><center>".$fetch['Terrestrial_ha']."</center></td>
					<td><center>".$fetch['Seascape_ha']."</center></td>
					<td><center>".$fetch['Mangroves_ha']."</center></td>
					<td><center>".$fetch['Forestland_ha']."</center></td>
					<td><center>".$fetch['Lakes_ha']."</center></td>
					<td><center>".$fetch['Rivers_ha']."</center></td>
				</tr>
	";
	}


	




	$output .="
			</tbody>
			
		</table>
	";
	
	echo $output;
	
	
?>