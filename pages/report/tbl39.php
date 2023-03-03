
<?php
include('../../config/dbcon.php');
?>

<?php
    $result = mysqli_query($conn,"SELECT sum(No_of_CWR_holders) FROM Inventory_of_CWR_Monitored") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Regional=number_format($rows['sum(No_of_CWR_holders)']);
        }




    $result = mysqli_query($conn,"SELECT sum(No_of_CWR_holders) FROM Inventory_of_CWR_Monitored where Province='Valencia City' OR Province='Manolo Fortich' OR Province='Don Carlos' OR Province='Talakag' OR Province='Sub-Office Pangantucan' OR Province='Mt. Kitanglad RNP' OR Province='Mt. Kalatungan RNP' OR Province='Mt. Pantaron' OR Province='Mt. Tago RNP' OR Province='BFI' OR Province='Hineleban Foundation'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$B_total_Units=number_format($rows['sum(No_of_CWR_holders)']);
        }



     $result = mysqli_query($conn,"SELECT sum(No_of_CWR_holders) FROM Inventory_of_CWR_Monitored where Province='Non-PA' OR Province='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$C_total_Units=number_format($rows['sum(No_of_CWR_holders)']);
        }



     $result = mysqli_query($conn,"SELECT sum(No_of_CWR_holders) FROM Inventory_of_CWR_Monitored where Province='Iligan City' OR Province='CENRO Kolambugan' OR Province='Siad Hindang' OR Province='Siad Nunungan' OR Province='Mt. Inayawan RNP' OR Province='Bacolod Kauswagan PLS' OR Province='Lake Lanao WPDP'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lanao_total_Units=number_format($rows['sum(No_of_CWR_holders)']);
        }




     $result = mysqli_query($conn,"SELECT sum(No_of_CWR_holders) FROM Inventory_of_CWR_Monitored where Province='CENRO Ozamiz City' OR Province='CENRO Oroquieta City' OR Province='Mt. Malindang RNP' OR Province='Mt. Baliangao PLS'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misocc=number_format($rows['sum(No_of_CWR_holders)']);
        }





     $result = mysqli_query($conn,"SELECT sum(No_of_CWR_holders) FROM Inventory_of_CWR_Monitored where Province='CENRO Initao' OR Province='CENRO Gingoog City' OR Province='Mt. Balatukan' OR Province='Mimbilisan' OR Province='Initao Libertad'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misor=number_format($rows['sum(No_of_CWR_holders)']);
        }


?>





<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=Inventory of CWR Monitored.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	$output .="
		<table>
			<h3 style='color:#008B8B;'>ENR Profile : Inventory of CWR Monitored, By Year, Region 10</h3>
			<thead> <br>
				<tr style='color:#008B8B;'>
					<th><h3>Province</h3></th>
					<th><h3>No. of CWR Holders</h3></th>
					<th><h3>Year</h3></th>				
				</tr>

				<tr>
					<th>Regional Total</th>
					<th>".$Regional."</th>
					<th>--</th>
				</tr>

			<tbody>
	";
	

		
	$output .= "
				<tr>
					<td><center><b>Bukidnon</b></center></td>
					<th>".$B_total_Units."</th>
					<th>--</th>
					
				</tr>
	";



	$query = $conn->query("SELECT * FROM `Inventory_of_CWR_Monitored` where Province='Valencia City' OR Province='Manolo Fortich' OR Province='Don Carlos' OR Province='Talakag' OR Province='Sub-Office Pangantucan' OR Province='Mt. Kitanglad RNP' OR Province='Mt. Kalatungan RNP' OR Province='Mt. Pantaron' OR Province='Mt. Tago RNP' OR Province='BFI' OR Province='Hineleban Foundation'  ORDER BY Year ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['Province']."</center></td>
					<td><center>".number_format($fetch['No_of_CWR_holders'])."</center></td>
					<td><center>".$fetch['Year']."</center></td>
					
				</tr>
	";
	}

	
	$output .= "
				<tr>
					<td><center><b>Camiguin</b></center></td>
					<th>".$C_total_Units."</th>
					<th>--</th>
					
				</tr>
	";



	$query = $conn->query("SELECT * FROM `Inventory_of_CWR_Monitored` where Province='Non-PA' OR Province='Mt. Timpoong Hibok-Hibok' ORDER BY Year ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['Province']."</center></td>
					<td><center>".number_format($fetch['No_of_CWR_holders'])."</center></td>
					<td><center>".$fetch['Year']."</center></td>
					
				</tr>
	";
	}


	
	$output .= "
				<tr>
					<td><center><b>Lanao del Norte</b></center></td>
					<th>".$Lanao_total_Units."</th>
					<th>--</th>
					
				</tr>
	";



	$query = $conn->query("SELECT * FROM `Inventory_of_CWR_Monitored`where Province='Iligan City' OR Province='CENRO Kolambugan' OR Province='Siad Hindang' OR Province='Siad Nunungan' OR Province='Mt. Inayawan RNP' OR Province='Bacolod Kauswagan PLS' OR Province='Lake Lanao WPDP' ORDER BY Year ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['Province']."</center></td>
					<td><center>".number_format($fetch['No_of_CWR_holders'])."</center></td>
					<td><center>".$fetch['Year']."</center></td>
					
				</tr>
	";
	}


	
	$output .= "
				<tr>
					<td><center><b>Misamis Occidental</b></center></td>
					<th>".$Misocc."</th>
					<th>--</th>
					
				</tr>
	";



	$query = $conn->query("SELECT * FROM `Inventory_of_CWR_Monitored` where Province='CENRO Ozamiz City' OR Province='CENRO Oroquieta City' OR Province='Mt. Malindang RNP' OR Province='Mt. Baliangao PLS' ORDER BY Year ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['Province']."</center></td>
					<td><center>".number_format($fetch['No_of_CWR_holders'])."</center></td>
					<td><center>".$fetch['Year']."</center></td>
					
				</tr>
	";
	}


	$output .= "
				<tr>
					<td><center><b>Misamis Oriental</b></center></td>
					<th>".$Misor."</th>
					<th>--</th>
					
				</tr>
	";



	$query = $conn->query("SELECT * FROM `Inventory_of_CWR_Monitored` where Province='CENRO Initao' OR Province='CENRO Gingoog City' OR Province='Mt. Balatukan' OR Province='Mimbilisan' OR Province='Initao Libertad' ORDER BY Year ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['Province']."</center></td>
					<td><center>".number_format($fetch['No_of_CWR_holders'])."</center></td>
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