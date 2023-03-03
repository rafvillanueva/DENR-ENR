
<?php
include('../../config/dbcon.php');
?>

<?php




##########REGIONAL##########

    $result = mysqli_query($conn,"SELECT sum(Total_Residential_Patents_Issued_Patents_issued_no) FROM land_disposition_issued") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$_1=number_format($rows['sum(Total_Residential_Patents_Issued_Patents_issued_no)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Total_Residential_Patents_Issued_Lot_ha) FROM land_disposition_issued") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$_2=number_format($rows['sum(Total_Residential_Patents_Issued_Lot_ha)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Total_Agricultural_Patents_Issued_Patents_issued_no) FROM land_disposition_issued") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$_3=number_format($rows['sum(Total_Agricultural_Patents_Issued_Patents_issued_no)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Total_Agricultural_Patents_Issued_Lot_ha) FROM land_disposition_issued") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$_4=number_format($rows['sum(Total_Agricultural_Patents_Issued_Lot_ha)']);
        }

  





#########################Bukidnon

    $result = mysqli_query($conn,"SELECT sum(Total_Residential_Patents_Issued_Patents_issued_no) FROM land_disposition_issued where Province='Bukidnon'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$B_1=number_format($rows['sum(Total_Residential_Patents_Issued_Patents_issued_no)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Total_Residential_Patents_Issued_Lot_ha) FROM land_disposition_issued where Province='Bukidnon'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$B_2=number_format($rows['sum(Total_Residential_Patents_Issued_Lot_ha)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Total_Agricultural_Patents_Issued_Patents_issued_no) FROM land_disposition_issued where Province='Bukidnon'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$B_3=number_format($rows['sum(Total_Agricultural_Patents_Issued_Patents_issued_no)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Total_Agricultural_Patents_Issued_Lot_ha) FROM land_disposition_issued where Province='Bukidnon'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$B_4=number_format($rows['sum(Total_Agricultural_Patents_Issued_Lot_ha)']);
        }

  
##end Bukidnon



##Camiguin
    $result = mysqli_query($conn,"SELECT sum(Total_Residential_Patents_Issued_Patents_issued_no) FROM land_disposition_issued where Province='Camiguin'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$C_1=number_format($rows['sum(Total_Residential_Patents_Issued_Patents_issued_no)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Total_Residential_Patents_Issued_Lot_ha) FROM land_disposition_issued where Province='Camiguin'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$C_2=number_format($rows['sum(Total_Residential_Patents_Issued_Lot_ha)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Total_Agricultural_Patents_Issued_Patents_issued_no) FROM land_disposition_issued where Province='Camiguin'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$C_3=number_format($rows['sum(Total_Agricultural_Patents_Issued_Patents_issued_no)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Total_Agricultural_Patents_Issued_Lot_ha) FROM land_disposition_issued where Province='Camiguin'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$C_4=number_format($rows['sum(Total_Agricultural_Patents_Issued_Lot_ha)']);
        }

  

###END Camiguin 





##Lanao del Norte
    $result = mysqli_query($conn,"SELECT sum(Total_Residential_Patents_Issued_Patents_issued_no) FROM land_disposition_issued where Province='Lanao del Norte'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lanao_1=number_format($rows['sum(Total_Residential_Patents_Issued_Patents_issued_no)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Total_Residential_Patents_Issued_Lot_ha) FROM land_disposition_issued where Province='Lanao del Norte'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lanao_2=number_format($rows['sum(Total_Residential_Patents_Issued_Lot_ha)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Total_Agricultural_Patents_Issued_Patents_issued_no) FROM land_disposition_issued where Province='Lanao del Norte'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lanao_3=number_format($rows['sum(Total_Agricultural_Patents_Issued_Patents_issued_no)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Total_Agricultural_Patents_Issued_Lot_ha) FROM land_disposition_issued where Province='Lanao del Norte'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lanao_4=number_format($rows['sum(Total_Agricultural_Patents_Issued_Lot_ha)']);
        }

  


##Misamis Occidental 
    $result = mysqli_query($conn,"SELECT sum(Total_Residential_Patents_Issued_Patents_issued_no) FROM land_disposition_issued where Province='Misamis Occidental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misocc_1=number_format($rows['sum(Total_Residential_Patents_Issued_Patents_issued_no)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Total_Residential_Patents_Issued_Lot_ha) FROM land_disposition_issued where Province='Misamis Occidental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misocc_2=number_format($rows['sum(Total_Residential_Patents_Issued_Lot_ha)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Total_Agricultural_Patents_Issued_Patents_issued_no) FROM land_disposition_issued where Province='Misamis Occidental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misocc_3=number_format($rows['sum(Total_Agricultural_Patents_Issued_Patents_issued_no)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Total_Agricultural_Patents_Issued_Lot_ha) FROM land_disposition_issued where Province='Misamis Occidental '") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misocc_4=number_format($rows['sum(Total_Agricultural_Patents_Issued_Lot_ha)']);
        }

  




##Misamis Oriental  
    $result = mysqli_query($conn,"SELECT sum(Total_Residential_Patents_Issued_Patents_issued_no) FROM land_disposition_issued where Province='Misamis Oriental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misor_1=number_format($rows['sum(Total_Residential_Patents_Issued_Patents_issued_no)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Total_Residential_Patents_Issued_Lot_ha) FROM land_disposition_issued where Province='Misamis Oriental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misor_2=number_format($rows['sum(Total_Residential_Patents_Issued_Lot_ha)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Total_Agricultural_Patents_Issued_Patents_issued_no) FROM land_disposition_issued where Province='Misamis Oriental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misor_3=number_format($rows['sum(Total_Agricultural_Patents_Issued_Patents_issued_no)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Total_Agricultural_Patents_Issued_Lot_ha) FROM land_disposition_issued where Province='Misamis Oriental '") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misor_4=number_format($rows['sum(Total_Agricultural_Patents_Issued_Lot_ha)']);
        }


?>



<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=Land Disposition Issued (Residential & Agricultural).xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	$output .="
		<table>
			<h2 style='color:#008B8B;'>ENR Profile : Land Disposition Issued (Residential & Agricultural), By Province, Region 10</h2>
			<thead>
				<tr style='color:#008B8B;'>
					<th>Province</th>
					<th>Total Residential Patents Issued Patents Issued (No.)</th>
					<th>Total Residential Patents Issued Lot (ha)</th>
					<th>Total Agricultural Patents Issued Patents Issued (No.)</th>
					<th>Total Agricultural Patents Issued Lot (ha)</th>		
				</tr>

			<tbody>
	";

		
	$output .= "
				<tr>
					<td><center><b>Regional Total</b></center></td>
					<td style='font-weight:bold;'><center>".$_1."</center></td>
					<td style='font-weight:bold;'><center>".$_2."</center></td>
					<td style='font-weight:bold;'><center>".$_3."</center></td>
					<td style='font-weight:bold;'><center>".$_4."</center></td>			
				</tr>
	";

		
	$output .= "
				<tr>
					<td><center><b>Bukidnon</b></center></td>
					<td><center>".$B_1."</center></td>
					<td><center>".$B_2."</center></td>
					<td><center>".$B_3."</center></td>
					<td><center>".$B_4."</center></td>

				
				
		
				</tr>
	";


	$output .= "
				<tr>
					<td><center><b>Camiguin</b></center></td>
					<td><center>".$C_1."</center></td>
					<td><center>".$C_2."</center></td>
					<td><center>".$C_3."</center></td>
					<td><center>".$C_4."</center></td>
	
				
				
		
				</tr>
	";


		$output .= "
				<tr>
					<td><center><b>Lanao del Norte</b></center></td>
					<td><center>".$Lanao_1."</center></td>
					<td><center>".$Lanao_2."</center></td>
					<td><center>".$Lanao_3."</center></td>
					<td><center>".$Lanao_4."</center></td>
	
				
				
		
				</tr>
	";





		$output .= "
				<tr>
					<td><center><b>Misamis Occidental</b></center></td>
					<td><center>".$Misocc_1."</center></td>
					<td><center>".$Misocc_2."</center></td>
					<td><center>".$Misocc_3."</center></td>
					<td><center>".$Misocc_4."</center></td>
	
				
				
		
				</tr>
	";




			$output .= "
				<tr>
					<td><center><b>Misamis Oriental</b></center></td>
					<td><center>".$Misor_1."</center></td>
					<td><center>".$Misor_2."</center></td>
					<td><center>".$Misor_3."</center></td>
					<td><center>".$Misor_4."</center></td>

				
				
		
				</tr>
	";


	
	$output .="
			</tbody>
			
		</table>
	";
	
	echo $output;
	
	
?>