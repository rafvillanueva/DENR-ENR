
<?php
include('../../config/dbcon.php');

    $result = mysqli_query($conn,"SELECT sum(no_of_polygons) FROM ngp_number_of_polygons") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show1=number_format($rows['sum(no_of_polygons)']);
        }

    $result = mysqli_query($conn,"SELECT sum(no_of_sites) FROM ngp_number_of_polygons") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show2=number_format($rows['sum(no_of_sites)']);
        }

      $result = mysqli_query($conn,"SELECT sum(no_of_beneficiaries) FROM ngp_number_of_polygons") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show3=number_format($rows['sum(no_of_beneficiaries)']);
        }


    $result = mysqli_query($conn,"SELECT sum(no_of_polygons) FROM ngp_number_of_polygons WHERE province='Bukidnon'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$B_show1=number_format($rows['sum(no_of_polygons)']);
        }

    $result = mysqli_query($conn,"SELECT sum(no_of_sites) FROM ngp_number_of_polygons WHERE province='Bukidnon'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$B_show2=number_format($rows['sum(no_of_sites)']);
        }

      $result = mysqli_query($conn,"SELECT sum(no_of_beneficiaries) FROM ngp_number_of_polygons WHERE province='Bukidnon'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$B_show3=number_format($rows['sum(no_of_beneficiaries)']);
        }

    $result = mysqli_query($conn,"SELECT sum(no_of_polygons) FROM ngp_number_of_polygons WHERE province='Camiguin'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$C_show1=number_format($rows['sum(no_of_polygons)']);
        }

    $result = mysqli_query($conn,"SELECT sum(no_of_sites) FROM ngp_number_of_polygons WHERE province='Camiguin'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$C_show2=number_format($rows['sum(no_of_sites)']);
        }

      $result = mysqli_query($conn,"SELECT sum(no_of_beneficiaries) FROM ngp_number_of_polygons WHERE province='Camiguin'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$C_show3=number_format($rows['sum(no_of_beneficiaries)']);
        }



    $result = mysqli_query($conn,"SELECT sum(no_of_polygons) FROM ngp_number_of_polygons WHERE province='Lanao del Norte'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lanao_show1=number_format($rows['sum(no_of_polygons)']);
        }

    $result = mysqli_query($conn,"SELECT sum(no_of_sites) FROM ngp_number_of_polygons WHERE province='Lanao del Norte'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lanao_show2=number_format($rows['sum(no_of_sites)']);
        }

      $result = mysqli_query($conn,"SELECT sum(no_of_beneficiaries) FROM ngp_number_of_polygons WHERE province='Lanao del Norte'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lanao_show3=number_format($rows['sum(no_of_beneficiaries)']);
        }


    $result = mysqli_query($conn,"SELECT sum(no_of_polygons) FROM ngp_number_of_polygons WHERE province='Lake Lanao WPDP'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lake_show1=number_format($rows['sum(no_of_polygons)']);
        }

    $result = mysqli_query($conn,"SELECT sum(no_of_sites) FROM ngp_number_of_polygons WHERE province='Lake Lanao WPDP'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lake_show2=number_format($rows['sum(no_of_sites)']);
        }

      $result = mysqli_query($conn,"SELECT sum(no_of_beneficiaries) FROM ngp_number_of_polygons WHERE province='Lake Lanao WPDP'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lake_show3=number_format($rows['sum(no_of_beneficiaries)']);
        }


    $result = mysqli_query($conn,"SELECT sum(no_of_polygons) FROM ngp_number_of_polygons WHERE province='Misamis Occidental '") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misocc_show1=number_format($rows['sum(no_of_polygons)']);
        }

    $result = mysqli_query($conn,"SELECT sum(no_of_sites) FROM ngp_number_of_polygons WHERE province='Misamis Occidental '") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misocc_show2=number_format($rows['sum(no_of_sites)']);
        }

      $result = mysqli_query($conn,"SELECT sum(no_of_beneficiaries) FROM ngp_number_of_polygons WHERE province='Misamis Occidental '") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misocc_show3=number_format($rows['sum(no_of_beneficiaries)']);
        }


    $result = mysqli_query($conn,"SELECT sum(no_of_polygons) FROM ngp_number_of_polygons WHERE province='Misamis Oriental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misor_show1=number_format($rows['sum(no_of_polygons)']);
        }

    $result = mysqli_query($conn,"SELECT sum(no_of_sites) FROM ngp_number_of_polygons WHERE province='Misamis Oriental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misor_show2=number_format($rows['sum(no_of_sites)']);
        }

      $result = mysqli_query($conn,"SELECT sum(no_of_beneficiaries) FROM ngp_number_of_polygons WHERE province='Misamis Oriental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misor_show3=number_format($rows['sum(no_of_beneficiaries)']);
        }




?>

<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=NGP: Number of Polygons Sites & Beneficiaries.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	$output .="
		<table>
			<h3 style='color:#008B8B;'>ENR Profile : NGP (Number of Polygons, Sites & Beneficiaries) Region 10</h3>
			<thead> <br>
				<tr style='color:#008B8B;'>
					<th><h3>Province</h3></th>
					<th><h3>No. of Polygons</h3></th>
					<th><h3>No. of Sites</h3></th>	
					<th><h3>No. of Beneficiaries</h3></th>	
				</tr>

				<tr>
					<th>Regional Total</th>
					<th>".$show1."</th>
					<th>".$show2."</th>
					<th>".$show3."</th>
					
				</tr>
			<tbody>
	";
	

		
	$output .= "
				<tr>
					<td><center>Bukidnon</center></td>
					<td><center>".$B_show1."</center></td>
					<td><center>".$B_show2."</center></td>
					<td><center>".$B_show3."</center></td>			
				</tr>
	";


		
	$output .= "
				<tr>
					<td><center>Camiguin</center></td>
					<td><center>".$C_show1."</center></td>
					<td><center>".$C_show2."</center></td>
					<td><center>".$C_show3."</center></td>			
				</tr>
	";

	$output .= "
				<tr>
					<td><center>Lanao del Norte</center></td>
					<td><center>".$Lanao_show1."</center></td>
					<td><center>".$Lanao_show2."</center></td>
					<td><center>".$Lanao_show3."</center></td>			
				</tr>
	";


		$output .= "
				<tr>
					<td><center>Lake Lanao WPDP</center></td>
					<td><center>".$Lake_show1."</center></td>
					<td><center>".$Lake_show2."</center></td>
					<td><center>".$Lake_show3."</center></td>			
				</tr>
	";

	$output .= "
				<tr>
					<td><center>Misamis Occidental </center></td>
					<td><center>".$Misocc_show1."</center></td>
					<td><center>".$Misocc_show2."</center></td>
					<td><center>".$Misocc_show3."</center></td>			
				</tr>
	";


	$output .= "
				<tr>
					<td><center>Misamis Oriental</center></td>
					<td><center>".$Misor_show1."</center></td>
					<td><center>".$Misor_show2."</center></td>
					<td><center>".$Misor_show3."</center></td>			
				</tr>
	";

	
	$output .="
			</tbody>
			
		</table>
	";
	
	echo $output;
	
	
?>