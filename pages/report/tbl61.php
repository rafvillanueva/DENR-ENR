
<?php
include('../../config/dbcon.php');
?>

<?php
    $result = mysqli_query($conn,"SELECT sum(No_of_CWR_WFP) FROM Summary_of_CWR_Monitored") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$total_Units=number_format($rows['sum(No_of_CWR_WFP)']);
        }



    $result = mysqli_query($conn,"SELECT sum(No_of_CWR_WFP) FROM Summary_of_CWR_Monitored where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$B_total_Units=number_format($rows['sum(No_of_CWR_WFP)']);
        }





     $result = mysqli_query($conn,"SELECT sum(No_of_CWR_WFP) FROM Summary_of_CWR_Monitored where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$C_total_Units=number_format($rows['sum(No_of_CWR_WFP)']);
        }



     $result = mysqli_query($conn,"SELECT sum(No_of_CWR_WFP) FROM Summary_of_CWR_Monitored where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lanao_total_Units=number_format($rows['sum(No_of_CWR_WFP)']);
        }



     $result = mysqli_query($conn,"SELECT sum(No_of_CWR_WFP) FROM Summary_of_CWR_Monitored where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misocc_total_Units=number_format($rows['sum(No_of_CWR_WFP)']);
        }


 

     $result = mysqli_query($conn,"SELECT sum(No_of_CWR_WFP) FROM Summary_of_CWR_Monitored where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misor_total_Units=number_format($rows['sum(No_of_CWR_WFP)']);
        }



?>





<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=Summary of CWR Monitored By Year Region 10.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	$output .="
		<table>
			<h3 style='color:#008B8B;'>ENR Profile : Summary of CWR Monitored By Year Region 10</h3>
			<thead> <br>
				<tr style='color:#008B8B;'>
					<th><h3>Operating Unit</h3></th>
					<th><h3>No. of CWR/WFP</h3></th>
					<th><h3>Year</h3></th>				
				</tr>

				<tr>
					<th>Regional Total</th>
					<th>".$total_Units."</th>
					<th>----</th>
				</tr>

			<tbody>
	";
	

		
	$output .= "
				<tr>
					<td><center><b>Bukidnon</b></center></td>
					<th>".$B_total_Units."</th>
					<th>----</th>
				
				</tr>
	";



	$query = $conn->query("SELECT * FROM `Summary_of_CWR_Monitored` where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'  ORDER BY Year ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['OperatingUnit']."</center></td>
					<td><center>".number_format($fetch['No_of_CWR_WFP'])."</center></td>
					<td><center>".$fetch['Year']."</center></td>
				</tr>
	";
	}

	$output .= "
				<tr>
					<td><center><b>Camiguin</b></center></td>
					<th>".$C_total_Units."</th>
					<th>----</th>
				</tr>
	";



	$query = $conn->query("SELECT * FROM `Summary_of_CWR_Monitored` where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'  ORDER BY Year ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['OperatingUnit']."</center></td>
					<td><center>".number_format($fetch['No_of_CWR_WFP'])."</center></td>
					<td><center>".$fetch['Year']."</center></td>
				</tr>
	";
	}

	$output .= "
				<tr>
					<td><center><b>Lanao del Norte</b></center></td>
					<th>".$Lanao_total_Units."</th>
					<th>----</th>
				</tr>
	";


	$query = $conn->query("SELECT * FROM `Summary_of_CWR_Monitored` where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP' ORDER BY Year ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['OperatingUnit']."</center></td>
					<td><center>".number_format($fetch['No_of_CWR_WFP'])."</center></td>
					<td><center>".$fetch['Year']."</center></td>
				</tr>
	";
	}

	$output .= "
				<tr>
					<td><center><b>Misamis Occidental</b></center></td>
					<th>".$Misocc_total_Units."</th>
					<th>----</th>
				</tr>
	";


	$query = $conn->query("SELECT * FROM `Summary_of_CWR_Monitored` where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS' ORDER BY Year ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['OperatingUnit']."</center></td>
					<td><center>".number_format($fetch['No_of_CWR_WFP'])."</center></td>
					<td><center>".$fetch['Year']."</center></td>
				</tr>
	";
	}


	$output .= "
				<tr>
					<td><center><b>Misamis Oriental</b></center></td>
					<th>".$Misor_total_Units."</th>
					<th>----</th>
				</tr>
	";


	$query = $conn->query("SELECT * FROM `Summary_of_CWR_Monitored` where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad' ORDER BY Year ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['OperatingUnit']."</center></td>
					<td><center>".number_format($fetch['No_of_CWR_WFP'])."</center></td>
					<td><center>".$fetch['Year']."</center></td>
				</tr>
	";
	}

	
	$output .="
			</tbody>
			
		</table>
	";
	
	echo $output;
	
	
?>