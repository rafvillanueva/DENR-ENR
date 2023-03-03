
<?php
include('../../config/dbcon.php');
?>

<?php
    $result = mysqli_query($conn,"SELECT sum(Number_of_look_out_tower) FROM List_of_checkpoint") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Number_of_look_out_tower=number_format($rows['sum(Number_of_look_out_tower)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Number_of_look_out_tower) FROM List_of_checkpoint where Cenro='Valencia City' OR Cenro='Manolo Fortich' OR Cenro='Don Carlos' OR Cenro='Talakag' OR Cenro='Sub-Office Pangantucan' OR Cenro='Mt. Kitanglad RNP' OR Cenro='Mt. Kalatungan RNP' OR Cenro='Mt. Pantaron' OR Cenro='Mt. Tago RNP' OR Cenro='BFI' OR Cenro='Hineleban Foundation'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$B_Number_of_look_out_tower=number_format($rows['sum(Number_of_look_out_tower)']);
        }


     $result = mysqli_query($conn,"SELECT sum(Number_of_look_out_tower) FROM List_of_checkpoint where Cenro='Non-PA' OR Cenro='Mt. Timpoong'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$C_Number_of_look_out_tower=number_format($rows['sum(Number_of_look_out_tower)']);
        }




     $result = mysqli_query($conn,"SELECT sum(Number_of_look_out_tower) FROM List_of_checkpoint where Cenro='Iligan City' OR Cenro='CENRO Kolambugan' OR Cenro='Siad Hindang' OR Cenro='Siad Nunungan' OR Cenro='Mt. Inayawan RNP' OR Cenro='Bacolod Kauswagan PLS' OR Cenro='Lake Lanao WPDP'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lanao_Number_of_look_out_tower=number_format($rows['sum(Number_of_look_out_tower)']);
        }
 



     $result = mysqli_query($conn,"SELECT sum(Number_of_look_out_tower) FROM List_of_checkpoint where Cenro='CENRO Ozamiz City' OR Cenro='CENRO Oroquieta City' OR Cenro='Mt. Malindang RNP' OR Cenro='Mt. Baliangao PLS'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misocc_Number_of_look_out_tower=number_format($rows['sum(Number_of_look_out_tower)']);
        }



     $result = mysqli_query($conn,"SELECT sum(Number_of_look_out_tower) FROM List_of_checkpoint where Cenro='CENRO Initao' OR Cenro='CENRO Gingoog City' OR Cenro='Mt. Balatukan' OR Cenro='Mimbilisan' OR Cenro='Initao Libertad'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misor_Number_of_look_out_tower=number_format($rows['sum(Number_of_look_out_tower)']);
        }



?>





<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=List of Checkpoint in Region 10.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	$output .="
		<table>
			<h3 style='color:#008B8B;'>ENR Profile : List of Checkpoint in Region 10</h3>
			<thead> <br>
				<tr style='color:#008B8B;'>
					<th><h3>PENROs/CENROs</h3></th>
					<th><h3>Number of Look-Out Tower</h3></th>
					<th><h3>Location</h3></th>				
				</tr>

				<tr>
					<th>Regional Total</th>
					<th>".$Number_of_look_out_tower."</th>
					<th>----</th>		
				</tr>

			<tbody>
	";
	

		
	$output .= "
				<tr>
					<td><center><b>Bukidnon</b></center></td>
					<th>".$B_Number_of_look_out_tower."</th>
					<th></th>
				</tr>
	";



	$query = $conn->query("SELECT * FROM `List_of_checkpoint` where Cenro='Valencia City' OR Cenro='Manolo Fortich' OR Cenro='Don Carlos' OR Cenro='Talakag' OR Cenro='Sub-Office Pangantucan' OR Cenro='Mt. Kitanglad RNP' OR Cenro='Mt. Kalatungan RNP' OR Cenro='Mt. Pantaron' OR Cenro='Mt. Tago RNP' OR Cenro='BFI' OR Cenro='Hineleban Foundation'  ORDER BY Cenro ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['Cenro']."</center></td>
					<td><center>".number_format($fetch['Number_of_look_out_tower'])."</center></td>
					<td><center>".$fetch['location']."</center></td>		
				</tr>
	";
	}

	$output .= "
				<tr>
					<td><center><b>Camiguin</b></center></td>
					<th>".$C_Number_of_look_out_tower."</th>
					<th></th>
				</tr>
	";



	$query = $conn->query("SELECT * FROM `List_of_checkpoint` where Cenro='Non-PA' OR Cenro='Mt. Timpoong Hibok-Hibok' ORDER BY Cenro ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['Cenro']."</center></td>
					<td><center>".number_format($fetch['Number_of_look_out_tower'])."</center></td>
					<td><center>".$fetch['location']."</center></td>
					
				</tr>
	";
	}

	$output .= "
				<tr>
					<td><center><b>Lanao del Norte</b></center></td>
					<th>".$Lanao_Number_of_look_out_tower."</th>
					<th></th>
				</tr>
	";


	$query = $conn->query("SELECT * FROM `List_of_checkpoint` where Cenro='Iligan City' OR Cenro='CENRO Kolambugan' OR Cenro='Siad Hindang' OR Cenro='Siad Nunungan' OR Cenro='Mt. Inayawan RNP' OR Cenro='Bacolod Kauswagan PLS' OR Cenro='Lake Lanao WPDP' ORDER BY Cenro ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['Cenro']."</center></td>
					<td><center>".number_format($fetch['Number_of_look_out_tower'])."</center></td>
					<td><center>".$fetch['location']."</center></td>
					
				</tr>
	";
	}
	$output .= "
				<tr>
					<td><center><b>Misamis Occidental</b></center></td>
					<th>".$Misocc_Number_of_look_out_tower."</th>
					<th></th>
				</tr>
	";


	$query = $conn->query("SELECT * FROM `List_of_checkpoint` where Cenro='CENRO Ozamiz City' OR Cenro='CENRO Oroquieta City' OR Cenro='Mt. Malindang RNP' OR Cenro='Mt. Baliangao PLS' ORDER BY Cenro ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['Cenro']."</center></td>
					<td><center>".number_format($fetch['Number_of_look_out_tower'])."</center></td>
					<td><center>".($fetch['location'])."</center></td>
					
				</tr>
	";
	}


	$output .= "
				<tr>
					<td><center><b>Misamis Oriental</b></center></td>
					<th>".$Misor_Number_of_look_out_tower."</th>
					<th></th>
				</tr>
	";


	$query = $conn->query("SELECT * FROM `List_of_checkpoint` where Cenro='CENRO Initao' OR Cenro='CENRO Gingoog City' OR Cenro='Mt. Balatukan' OR Cenro='Mimbilisan' OR Cenro='Initao Libertad' ORDER BY Cenro ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['Cenro']."</center></td>
					<td><center>".number_format($fetch['Number_of_look_out_tower'])."</center></td>
					<td><center>".($fetch['location'])."</center></td>
					
				</tr>
	";
	}

	
	$output .="
			</tbody>
			
		</table>
	";
	
	echo $output;
	
	
?>