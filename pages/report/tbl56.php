
<?php
include('../../config/dbcon.php');

    $result = mysqli_query($conn,"SELECT sum(No_of_Incidents) FROM number_of_incidents_on_apprehended") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show1=number_format($rows['sum(No_of_Incidents)']);
        }


    	$result = mysqli_query($conn,"SELECT sum(No_of_Incidents) FROM number_of_incidents_on_apprehended where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show2=number_format($rows['sum(No_of_Incidents)']);
        }



    $result = mysqli_query($conn,"SELECT sum(No_of_Incidents) FROM number_of_incidents_on_apprehended where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show3=number_format($rows['sum(No_of_Incidents)']);
        }

  


    $result = mysqli_query($conn,"SELECT sum(No_of_Incidents) FROM number_of_incidents_on_apprehended where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show4=number_format($rows['sum(No_of_Incidents)']);
        }

 

    $result = mysqli_query($conn,"SELECT sum(No_of_Incidents) FROM number_of_incidents_on_apprehended where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show5=number_format($rows['sum(No_of_Incidents)']);
        }




    $result = mysqli_query($conn,"SELECT sum(No_of_Incidents) FROM number_of_incidents_on_apprehended where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show6=number_format($rows['sum(No_of_Incidents)']);
        }




?>

<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=Number of Incidents on Apprehended/Seized Forest Products Conveyances Machineries and Implements By Year Region 10.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	$output .="
		<table>
			<h3 style='color:#008B8B;'>ENR Profile : Number of Incidents on Apprehended/Seized Forest Products, Conveyances, Machineries and Implements, By Year, Region 10</h3>
			<thead> <br>
				<tr style='color:#008B8B;'>
					<th><h3>PENRO/CENRO </h3></th>
					<th><h3>No. of Incidents</h3></th>
					<th><h3>Year</h3></th>	
				</tr>

				<tr>
					<th>Regional Total</th>
					<th>".$show1."</th>
					<td style='font-weight:bold;'><center>----</center></td>	
				</tr>
			<tbody>
	";



	$output .= "
				<tr>
					<td><center><b>Bukidnon</b></center></td>
					<th>".$show2."</th>
					<td style='font-weight:bold;'><center>----</center></td>					
					
				</tr>
	";

	$query = $conn->query("SELECT * FROM `number_of_incidents_on_apprehended` where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation' order by Year asc") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['OperatingUnit']."</center></td>
					<td><center>".number_format($fetch['No_of_Incidents'])."</center></td>
					<td><center>".$fetch['Year']."</center></td>
	
				</tr>
	";
	}


	$output .= "
				<tr>
					<td><center><b>Camiguin</b></center></td>
					<th>".$show3."</th>
					<td style='font-weight:bold;'><center>----</center></td>					
					
				</tr>
	";

	$query = $conn->query("SELECT * FROM `number_of_incidents_on_apprehended` where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok' order by Year asc") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['OperatingUnit']."</center></td>
					<td><center>".number_format($fetch['No_of_Incidents'])."</center></td>
					<td><center>".$fetch['Year']."</center></td>
	
				</tr>
	";
	}


		
	
	$output .= "
				<tr>
					<td><center><b>Lanao del Norte</b></center></td>
					<th>".$show4."</th>
					<td style='font-weight:bold;'><center>----</center></td>					
					
				</tr>
	";

	$query = $conn->query("SELECT * FROM `number_of_incidents_on_apprehended`where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP' order by Year asc") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['OperatingUnit']."</center></td>
					<td><center>".number_format($fetch['No_of_Incidents'])."</center></td>
					<td><center>".$fetch['Year']."</center></td>
	
				</tr>
	";
	}



	$output .= "
				<tr>
					<td><center><b>Misamis Occidental </b></center></td>
					<th>".$show5."</th>
					<td style='font-weight:bold;'><center>----</center></td>					
					
				</tr>
	";

	$query = $conn->query("SELECT * FROM `number_of_incidents_on_apprehended` where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS' order by Year asc") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['OperatingUnit']."</center></td>
					<td><center>".number_format($fetch['No_of_Incidents'])."</center></td>
					<td><center>".$fetch['Year']."</center></td>
	
				</tr>
	";
	}


	$output .= "
				<tr>
					<td><center><b>Misamis Oriental</b></center></td>
					<th>".$show6."</th>
					<td style='font-weight:bold;'><center>----</center></td>					
					
				</tr>
	";

	$query = $conn->query("SELECT * FROM `number_of_incidents_on_apprehended` where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad' order by Year asc") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['OperatingUnit']."</center></td>
					<td><center>".number_format($fetch['No_of_Incidents'])."</center></td>
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