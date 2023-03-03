
<?php
include('../../config/dbcon.php');
?>

<?php
    $result = mysqli_query($conn,"SELECT sum(Area_ha) FROM fireline_maintained") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Area_ha=number_format($rows['sum(Area_ha)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Length_m) FROM fireline_maintained") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Length=number_format($rows['sum(Length_m)']);
        }

    $result = mysqli_query($conn,"SELECT sum(Area_ha) FROM fireline_maintained where Penro_Cenro='Valencia City' OR Penro_Cenro='Manolo Fortich' OR Penro_Cenro='Don Carlos' OR Penro_Cenro='Talakag' OR Penro_Cenro='Sub-Office Pangantucan' OR Penro_Cenro='Mt. Kitanglad RNP' OR Penro_Cenro='Mt. Kalatungan RNP' OR Penro_Cenro='Mt. Pantaron' OR Penro_Cenro='Mt. Tago RNP' OR Penro_Cenro='BFI' OR Penro_Cenro='Hineleban Foundation'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$B_total_Units=number_format($rows['sum(Area_ha)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Length_m) FROM fireline_maintained where Penro_Cenro='Valencia City' OR Penro_Cenro='Manolo Fortich' OR Penro_Cenro='Don Carlos' OR Penro_Cenro='Talakag' OR Penro_Cenro='Sub-Office Pangantucan' OR Penro_Cenro='Mt. Kitanglad RNP' OR Penro_Cenro='Mt. Kalatungan RNP' OR Penro_Cenro='Mt. Pantaron' OR Penro_Cenro='Mt. Tago RNP' OR Penro_Cenro='BFI' OR Penro_Cenro='Hineleban Foundation'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$B_total_Estvalue=number_format($rows['sum(Length_m)']);
        }


     $result = mysqli_query($conn,"SELECT sum(Area_ha) FROM fireline_maintained where Penro_Cenro='Non-PA' OR Penro_Cenro='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$C_total_Units=number_format($rows['sum(Area_ha)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Length_m) FROM fireline_maintained where Penro_Cenro='Non-PA' OR Penro_Cenro='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$C_total_Estvalue=number_format($rows['sum(Length_m)']);
        }

     $result = mysqli_query($conn,"SELECT sum(Area_ha) FROM fireline_maintained where Penro_Cenro='Iligan City' OR Penro_Cenro='CENRO Kolambugan' OR Penro_Cenro='Siad Hindang' OR Penro_Cenro='Siad Nunungan' OR Penro_Cenro='Mt. Inayawan RNP' OR Penro_Cenro='Bacolod Kauswagan PLS' OR Penro_Cenro='Lake Lanao WPDP'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lanao_total_Units=number_format($rows['sum(Area_ha)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Length_m) FROM fireline_maintained where Penro_Cenro='Iligan City' OR Penro_Cenro='CENRO Kolambugan' OR Penro_Cenro='Siad Hindang' OR Penro_Cenro='Siad Nunungan' OR Penro_Cenro='Mt. Inayawan RNP' OR Penro_Cenro='Bacolod Kauswagan PLS' OR Penro_Cenro='Lake Lanao WPDP'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lanao_total_Estvalue=number_format($rows['sum(Length_m)']);
        }

     $result = mysqli_query($conn,"SELECT sum(Area_ha) FROM fireline_maintained where Penro_Cenro='CENRO Ozamiz City' OR Penro_Cenro='CENRO Oroquieta City' OR Penro_Cenro='Mt. Malindang RNP' OR Penro_Cenro='Mt. Baliangao PLS'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misocc_total_Units=number_format($rows['sum(Area_ha)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Length_m) FROM fireline_maintained where Penro_Cenro='CENRO Ozamiz City' OR Penro_Cenro='CENRO Oroquieta City' OR Penro_Cenro='Mt. Malindang RNP' OR Penro_Cenro='Mt. Baliangao PLS'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misocc_total_Estvalue=number_format($rows['sum(Length_m)']);
        }


     $result = mysqli_query($conn,"SELECT sum(Area_ha) FROM fireline_maintained where Penro_Cenro='CENRO Initao' OR Penro_Cenro='CENRO Gingoog City' OR Penro_Cenro='Mt. Balatukan' OR Penro_Cenro='Mimbilisan' OR Penro_Cenro='Initao Libertad'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misor_total_Units=number_format($rows['sum(Area_ha)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Length_m) FROM fireline_maintained where Penro_Cenro='CENRO Initao' OR Penro_Cenro='CENRO Gingoog City' OR Penro_Cenro='Mt. Balatukan' OR Penro_Cenro='Mimbilisan' OR Penro_Cenro='Initao Libertad'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misor_total_Estvalue=number_format($rows['sum(Length_m)']);
        }

?>





<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=Fireline Maintained.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	$output .="
		<table>
			<h2 style='color:#008B8B;'>ENR Profile : Fireline Maintained, By Year, Region 10</h2>
			<thead> <br>
				<tr style='color:#008B8B;'>
					<th><h3>PENRO/CENRO</h3></th>
					<th><h3>Area (ha) </h3></th>
					<th><h3>Length (m) </h3></th>
					<th><h3>Year</h3></th>				
				</tr>

				<tr>
					<th>Regional Total</th>
					<th>".$Area_ha."</th>
					<th>".$Length."</th>			
				</tr>

			<tbody>
	";
	

		
	$output .= "
				<tr>
					<td><center><b>Bukidnon</b></center></td>
					<th>".$B_total_Units."</th>
					<th>".$B_total_Estvalue."</th>
				</tr>
	";



	$query = $conn->query("SELECT * FROM `fireline_maintained` where Penro_Cenro='Valencia City' OR Penro_Cenro='Manolo Fortich' OR Penro_Cenro='Don Carlos' OR Penro_Cenro='Talakag' OR Penro_Cenro='Sub-Office Pangantucan' OR Penro_Cenro='Mt. Kitanglad RNP' OR Penro_Cenro='Mt. Kalatungan RNP' OR Penro_Cenro='Mt. Pantaron' OR Penro_Cenro='Mt. Tago RNP' OR Penro_Cenro='BFI' OR Penro_Cenro='Hineleban Foundation' ORDER BY year ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['Penro_Cenro']."</center></td>
					<td><center>".number_format($fetch['Area_ha'])."</center></td>
					<td><center>".number_format($fetch['Length_m'])."</center></td>
					<td><center>".$fetch['Year']."</center></td>
					
				</tr>
	";
	}

	$output .= "
				<tr>
					<td><center><b>Camiguin</b></center></td>
					<th>".$C_total_Units."</th>
					<th>".$C_total_Estvalue."</th>
				</tr>
	";



	$query = $conn->query("SELECT * FROM `fireline_maintained` where Penro_Cenro='Non-PA' OR Penro_Cenro='Mt. Timpoong Hibok-Hibok'  ORDER BY year ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['Penro_Cenro']."</center></td>
					<td><center>".number_format($fetch['Area_ha'])."</center></td>
					<td><center>".number_format($fetch['Length_m'])."</center></td>
					<td><center>".$fetch['Year']."</center></td>
					
				</tr>
	";
	}

	$output .= "
				<tr>
					<td><center><b>Lanao del Norte</b></center></td>
					<th>".$Lanao_total_Units."</th>
					<th>".$Lanao_total_Estvalue."</th>
				</tr>
	";


	$query = $conn->query("SELECT * FROM `fireline_maintained` where Penro_Cenro='Iligan City' OR Penro_Cenro='CENRO Kolambugan' OR Penro_Cenro='Siad Hindang' OR Penro_Cenro='Siad Nunungan' OR Penro_Cenro='Mt. Inayawan RNP' OR Penro_Cenro='Bacolod Kauswagan PLS' OR Penro_Cenro='Lake Lanao WPDP' ORDER BY year ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['Penro_Cenro']."</center></td>
					<td><center>".number_format($fetch['Area_ha'])."</center></td>
					<td><center>".number_format($fetch['Length_m'])."</center></td>
					<td><center>".$fetch['Year']."</center></td>
					
				</tr>
	";
	}

	$output .= "
				<tr>
					<td><center><b>Misamis Occidental</b></center></td>
					<th>".$Misocc_total_Units."</th>
					<th>".$Misocc_total_Estvalue."</th>
				</tr>
	";


	$query = $conn->query("SELECT * FROM `fireline_maintained` where Penro_Cenro='CENRO Ozamiz City' OR Penro_Cenro='CENRO Oroquieta City' OR Penro_Cenro='Mt. Malindang RNP' OR Penro_Cenro='Mt. Baliangao PLS' ORDER BY year ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['Penro_Cenro']."</center></td>
					<td><center>".number_format($fetch['Area_ha'])."</center></td>
					<td><center>".number_format($fetch['Length_m'])."</center></td>
					<td><center>".$fetch['Year']."</center></td>
					
				</tr>
	";
	}


	$output .= "
				<tr>
					<td><center><b>Misamis Oriental</b></center></td>
					<th>".$Misor_total_Units."</th>
					<th>".$Misor_total_Estvalue."</th>
				</tr>
	";


	$query = $conn->query("SELECT * FROM `fireline_maintained` where Penro_Cenro='CENRO Initao' OR Penro_Cenro='CENRO Gingoog City' OR Penro_Cenro='Mt. Balatukan' OR Penro_Cenro='Mimbilisan' OR Penro_Cenro='Initao Libertad' ORDER BY year ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['Penro_Cenro']."</center></td>
					<td><center>".number_format($fetch['Area_ha'])."</center></td>
					<td><center>".number_format($fetch['Length_m'])."</center></td>
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