
<?php
include('../../config/dbcon.php');
?>

<?php
    $result = mysqli_query($conn,"SELECT sum(Close) FROM forest_cover") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Closed=number_format($rows['sum(Close)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Open) FROM forest_cover") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Open=number_format($rows['sum(Open)']);
        }

    $result = mysqli_query($conn,"SELECT sum(Mangrove) FROM forest_cover") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Mangrove=number_format($rows['sum(Mangrove)']);
        }

    $result = mysqli_query($conn,"SELECT sum(Total) FROM forest_cover") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Total=number_format($rows['sum(Total)']);
        }





    $result = mysqli_query($conn,"SELECT sum(Close) FROM forest_cover where Province='Bukidnon'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$B_1=number_format($rows['sum(Close)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Open) FROM forest_cover where Province='Bukidnon'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$B_2=number_format($rows['sum(Open)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Mangrove) FROM forest_cover where Province='Bukidnon'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$B_3=number_format($rows['sum(Mangrove)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Total) FROM forest_cover where Province='Bukidnon'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$B_4=number_format($rows['sum(Total)']);
        }





    $result = mysqli_query($conn,"SELECT sum(Close) FROM forest_cover where Province='Camiguin'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$C_1=number_format($rows['sum(Close)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Open) FROM forest_cover where Province='Camiguin'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$C_2=number_format($rows['sum(Open)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Mangrove) FROM forest_cover where Province='Camiguin'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$C_3=number_format($rows['sum(Mangrove)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Total) FROM forest_cover where Province='Camiguin'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$C_4=number_format($rows['sum(Total)']);
        }





    $result = mysqli_query($conn,"SELECT sum(Close) FROM forest_cover where Province='Lanao del Norte'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lanao_1=number_format($rows['sum(Close)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Open) FROM forest_cover where Province='Lanao del Norte'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lanao_2=number_format($rows['sum(Open)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Mangrove) FROM forest_cover where Province='Lanao del Norte'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lanao_3=number_format($rows['sum(Mangrove)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Total) FROM forest_cover where Province='Lanao del Norte'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lanao_4=number_format($rows['sum(Total)']);
        }





    $result = mysqli_query($conn,"SELECT sum(Close) FROM forest_cover where Province='Misamis Occidental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Missocc_1=number_format($rows['sum(Close)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Open) FROM forest_cover where Province='Misamis Occidental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Missocc_2=number_format($rows['sum(Open)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Mangrove) FROM forest_cover where Province='Misamis Occidental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Missocc_3=number_format($rows['sum(Mangrove)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Total) FROM forest_cover where Province='Misamis Occidental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Missocc_4=number_format($rows['sum(Total)']);
        }



    $result = mysqli_query($conn,"SELECT sum(Close) FROM forest_cover where Province='Misamis Oriental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Missor_1=number_format($rows['sum(Close)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Open) FROM forest_cover where Province='Misamis Oriental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Missor_2=number_format($rows['sum(Open)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Mangrove) FROM forest_cover where Province='Misamis Oriental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Missor_3=number_format($rows['sum(Mangrove)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Total) FROM forest_cover where Province='Misamis Oriental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Missor_4=number_format($rows['sum(Total)']);
        }



?>





<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=Forest Cover in hectares.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	$output .="
		<table>
			<h2 style='color:#008B8B;'>ENR Profile : Forest Cover in hectares, Region 10</h2>
			<thead> <br>
				<tr style='color:#008B8B;'>
					<th><h3>Province</h3></th>
					<th><h3>Closed</h3></th>
					<th><h3>Open</h3></th>
					<th><h3>Mangrove</h3></th>				
					<th><h3>Total</h3></th>	
				</tr>

				<tr>
					<th>Regional Total</th>
					<th>".$Closed."</th>
					<th>".$Open."</th>			
					<th>".$Mangrove."</th>
					<th>".$Total."</th>
				</tr>

			<tbody>
	";
	

		
	$output .= "
				<tr>
					<td><center><b>Bukidnon</b></center></td>
					<th>".$B_1."</th>
					<th>".$B_2."</th>
					<th>".$B_3."</th>
					<th>".$B_4."</th>
				</tr>
	";





	$output .= "
				<tr>
					<td><center><b>Camiguin</b></center></td>
					<th>".$C_1."</th>
					<th>".$C_2."</th>
					<th>".$C_3."</th>
					<th>".$C_4."</th>
				</tr>
	";




	$output .= "
				<tr>
					<td><center><b>Lanao del Norte</b></center></td>
					<th>".$Lanao_1."</th>
					<th>".$Lanao_2."</th>
					<th>".$Lanao_3."</th>
					<th>".$Lanao_4."</th>
				</tr>
	";



	$output .= "
				<tr>
					<td><center><b>Misamis Occidental</b></center></td>
					<th>".$Missocc_1."</th>
					<th>".$Missocc_2."</th>
					<th>".$Missocc_3."</th>
					<th>".$Missocc_4."</th>
				</tr>
	";




	$output .= "
				<tr>
					<td><center><b>Misamis Oriental</b></center></td>
					<th>".$Missor_1."</th>
					<th>".$Missor_2."</th>
					<th>".$Missor_3."</th>
					<th>".$Missor_4."</th>
					
				</tr>
	";




	
	$output .="
			</tbody>
			
		</table>
	";
	
	echo $output;
	
	
?>