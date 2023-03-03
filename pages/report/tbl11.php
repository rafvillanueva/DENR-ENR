
<?php
include('../../config/dbcon.php');
?>

<?php
    $result = mysqli_query($conn,"SELECT sum(For_Renewal_Renewed) FROM csc_within_cbfma") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show1=number_format($rows['sum(For_Renewal_Renewed)']);
        }



    $result = mysqli_query($conn,"SELECT sum(For_ReEvaluation) FROM csc_within_cbfma") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show2=number_format($rows['sum(For_ReEvaluation)']);
        }


    $result = mysqli_query($conn,"SELECT sum(For_Transfer) FROM csc_within_cbfma") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show3=number_format($rows['sum(For_Transfer)']);
        }


    $result = mysqli_query($conn,"SELECT sum(For_Cancellation) FROM csc_within_cbfma") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show4=number_format($rows['sum(For_Cancellation)']);
        }



    $result = mysqli_query($conn,"SELECT sum(Total) FROM csc_within_cbfma") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show5=number_format($rows['sum(Total)']);
        }


    $result = mysqli_query($conn,"SELECT sum(area_ha) FROM csc_within_cbfma") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show6=number_format($rows['sum(area_ha)']);
        }



//query for count the numbers by field's// ######BUKIDNON#####
    $result = mysqli_query($conn,"SELECT sum(For_Renewal_Renewed) FROM csc_within_cbfma where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$B_show1=number_format($rows['sum(For_Renewal_Renewed)']);
        }


    $result = mysqli_query($conn,"SELECT sum(For_ReEvaluation) FROM csc_within_cbfma where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$B_show2=number_format($rows['sum(For_ReEvaluation)']);
        }


    $result = mysqli_query($conn,"SELECT sum(For_Transfer) FROM csc_within_cbfma where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$B_show3=number_format($rows['sum(For_Transfer)']);
        }


    $result = mysqli_query($conn,"SELECT sum(For_Cancellation) FROM csc_within_cbfma where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$B_show4=number_format($rows['sum(For_Cancellation)']);
        }



    $result = mysqli_query($conn,"SELECT sum(Total) FROM csc_within_cbfma where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$B_show5=number_format($rows['sum(Total)']);
        }


    $result = mysqli_query($conn,"SELECT sum(area_ha) FROM csc_within_cbfma where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$B_show6=number_format($rows['sum(area_ha)']);
        }
####END BUKIDNON




//query for count the numbers by field's// ######CAMIGUIN#####
    $result = mysqli_query($conn,"SELECT sum(For_Renewal_Renewed) FROM csc_within_cbfma where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$C_show1=number_format($rows['sum(For_Renewal_Renewed)']);
        }


    $result = mysqli_query($conn,"SELECT sum(For_ReEvaluation) FROM csc_within_cbfma where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$C_show2=number_format($rows['sum(For_ReEvaluation)']);
        }


    $result = mysqli_query($conn,"SELECT sum(For_Transfer) FROM csc_within_cbfma where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$C_show3=number_format($rows['sum(For_Transfer)']);
        }


    $result = mysqli_query($conn,"SELECT sum(For_Cancellation) FROM csc_within_cbfma where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$C_show4=number_format($rows['sum(For_Cancellation)']);
        }



    $result = mysqli_query($conn,"SELECT sum(Total) FROM csc_within_cbfma where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$C_show5=number_format($rows['sum(Total)']);
        }


    $result = mysqli_query($conn,"SELECT sum(area_ha) FROM csc_within_cbfma where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$C_show6=number_format($rows['sum(area_ha)']);
        }
####END CAMIGUIN

//query for count the numbers by field's// ######Lanao del Norte#####
    $result = mysqli_query($conn,"SELECT sum(For_Renewal_Renewed) FROM csc_within_cbfma where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lanao_show1=number_format($rows['sum(For_Renewal_Renewed)']);
        }


    $result = mysqli_query($conn,"SELECT sum(For_ReEvaluation) FROM csc_within_cbfma where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lanao_show2=number_format($rows['sum(For_ReEvaluation)']);
        }


    $result = mysqli_query($conn,"SELECT sum(For_Transfer) FROM csc_within_cbfma where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lanao_show3=number_format($rows['sum(For_Transfer)']);
        }


    $result = mysqli_query($conn,"SELECT sum(For_Cancellation) FROM csc_within_cbfma where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lanao_show4=number_format($rows['sum(For_Cancellation)']);
        }



    $result = mysqli_query($conn,"SELECT sum(Total) FROM csc_within_cbfma where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lanao_show5=number_format($rows['sum(Total)']);
        }


    $result = mysqli_query($conn,"SELECT sum(area_ha) FROM csc_within_cbfma where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lanao_show6=number_format($rows['sum(area_ha)']);
        }
####END Lanao del Norte



//query for count the numbers by field's// ######Misamis Occidental#####
    $result = mysqli_query($conn,"SELECT sum(For_Renewal_Renewed) FROM csc_within_cbfma where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misocc_show1=number_format($rows['sum(For_Renewal_Renewed)']);
        }


    $result = mysqli_query($conn,"SELECT sum(For_ReEvaluation) FROM csc_within_cbfma where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misocc_show2=number_format($rows['sum(For_ReEvaluation)']);
        }


    $result = mysqli_query($conn,"SELECT sum(For_Transfer) FROM csc_within_cbfma where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misocc_show3=number_format($rows['sum(For_Transfer)']);
        }


    $result = mysqli_query($conn,"SELECT sum(For_Cancellation) FROM csc_within_cbfma where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misocc_show4=number_format($rows['sum(For_Cancellation)']);
        }



    $result = mysqli_query($conn,"SELECT sum(Total) FROM csc_within_cbfma where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misocc_show5=number_format($rows['sum(Total)']);
        }


    $result = mysqli_query($conn,"SELECT sum(area_ha) FROM csc_within_cbfma where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misocc_show6=number_format($rows['sum(area_ha)']);
        }
####END Misamis Occidental



//query for count the numbers by field's// ######Misamis Oriental#####
    $result = mysqli_query($conn,"SELECT sum(For_Renewal_Renewed) FROM csc_within_cbfma where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misor_show1=number_format($rows['sum(For_Renewal_Renewed)']);
        }


    $result = mysqli_query($conn,"SELECT sum(For_ReEvaluation) FROM csc_within_cbfma where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misor_show2=number_format($rows['sum(For_ReEvaluation)']);
        }


    $result = mysqli_query($conn,"SELECT sum(For_Transfer) FROM csc_within_cbfma where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misor_show3=number_format($rows['sum(For_Transfer)']);
        }


    $result = mysqli_query($conn,"SELECT sum(For_Cancellation) FROM csc_within_cbfma where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misor_show4=number_format($rows['sum(For_Cancellation)']);
        }



    $result = mysqli_query($conn,"SELECT sum(Total) FROM csc_within_cbfma where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misor_show5=number_format($rows['sum(Total)']);
        }


    $result = mysqli_query($conn,"SELECT sum(area_ha) FROM csc_within_cbfma where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misor_show6=number_format($rows['sum(area_ha)']);
        }
####END Misamis Oriental




?>





<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=Certificate of Stewardship Contract (CSC) Evaluated/Assessed within CBFMA.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	$output .="
		<table>
			<h2 style='color:#008B8B;'>ENR Profile : Certificate of Stewardship Contract (CSC) Evaluated/Assessed within CBFMA</h2>
			<thead> <br>
				<tr style='color:#008B8B;'>
					<th><h3>PENRO/CENRO</h3></th>
					<th><h3>For renewal/Renewed</h3></th>
					<th><h3>For re-evaluation</h3></th>
					<th><h3>For transfer</h3></th>	
					<th><h3>For cancellation</h3></th>	
					<th><h3>Total No.</h3></th>
					<th><h3>Area (ha)</h3></th>
					<th><h3>Year</h3></th>	

				</tr>

				<tr>
					<th>Regional Total</th>
					<th>".$show1."</th>
					<th>".$show2."</th>
					<th>".$show3."</th>
					<th>".$show4."</th>
					<th>".$show5."</th>
					<th>".$show6."</th>
					<th>----</th>
				</tr>

			<tbody>
	";
	

		
	$output .= "
				<tr>
					<td><center><b>Bukidnon</b></center></td>
					<th>".$B_show1."</th>
					<th>".$B_show2."</th>
					<th>".$B_show3."</th>
					<th>".$B_show4."</th>
					<th>".$B_show5."</th>
					<th>".$B_show6."</th>
					<th>----</th>
				</tr>
	";



	$query = $conn->query("SELECT * FROM `csc_within_cbfma` where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation' ORDER BY year ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['OperatingUnit']."</center></td>
					<td><center>".number_format($fetch['For_Renewal_Renewed'])."</center></td>
					<td><center>".number_format($fetch['For_ReEvaluation'])."</center></td>
					<td><center>".number_format($fetch['For_Transfer'])."</center></td>
					<td><center>".number_format($fetch['For_Cancellation'])."</center></td>
					<td><center>".number_format($fetch['Total'])."</center></td>
					<td><center>".number_format($fetch['area_ha'])."</center></td>
					<td><center>".$fetch['year']."</center></td>
					
				</tr>
	";
	}

	$output .= "
				<tr>
					<td><center><b>Camiguin</b></center></td>
					<th>".$C_show1."</th>
					<th>".$C_show2."</th>
					<th>".$C_show3."</th>
					<th>".$C_show4."</th>
					<th>".$C_show5."</th>
					<th>".$C_show6."</th>
					<th>----</th>
				</tr>
	";



	$query = $conn->query("SELECT * FROM `csc_within_cbfma` where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'  ORDER BY year ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['OperatingUnit']."</center></td>
					<td><center>".number_format($fetch['For_Renewal_Renewed'])."</center></td>
					<td><center>".number_format($fetch['For_ReEvaluation'])."</center></td>
					<td><center>".number_format($fetch['For_Transfer'])."</center></td>
					<td><center>".number_format($fetch['For_Cancellation'])."</center></td>
					<td><center>".number_format($fetch['Total'])."</center></td>
					<td><center>".number_format($fetch['area_ha'])."</center></td>
					<td><center>".$fetch['year']."</center></td>
					
				</tr>
	";
	}

	$output .= "
				<tr>
					<td><center><b>Lanao del Norte</b></center></td>
					<th>".$Lanao_show1."</th>
					<th>".$Lanao_show2."</th>
					<th>".$Lanao_show3."</th>
					<th>".$Lanao_show4."</th>
					<th>".$Lanao_show5."</th>
					<th>".$Lanao_show6."</th>
					<th>----</th>
				</tr>
	";


	$query = $conn->query("SELECT * FROM `csc_within_cbfma` where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP' ORDER BY year ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['OperatingUnit']."</center></td>
					<td><center>".number_format($fetch['For_Renewal_Renewed'])."</center></td>
					<td><center>".number_format($fetch['For_ReEvaluation'])."</center></td>
					<td><center>".number_format($fetch['For_Transfer'])."</center></td>
					<td><center>".number_format($fetch['For_Cancellation'])."</center></td>
					<td><center>".number_format($fetch['Total'])."</center></td>
					<td><center>".number_format($fetch['area_ha'])."</center></td>
					<td><center>".$fetch['year']."</center></td>
					
				</tr>
	";
	}

	$output .= "
				<tr>
					<td><center><b>Misamis Occidental</b></center></td>
					<th>".$Misocc_show1."</th>
					<th>".$Misocc_show2."</th>
					<th>".$Misocc_show3."</th>
					<th>".$Misocc_show4."</th>
					<th>".$Misocc_show5."</th>
					<th>".$Misocc_show6."</th>
					<th>----</th>
				</tr>
	";


	$query = $conn->query("SELECT * FROM `csc_within_cbfma` where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS' ORDER BY year ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['OperatingUnit']."</center></td>
					<td><center>".number_format($fetch['For_Renewal_Renewed'])."</center></td>
					<td><center>".number_format($fetch['For_ReEvaluation'])."</center></td>
					<td><center>".number_format($fetch['For_Transfer'])."</center></td>
					<td><center>".number_format($fetch['For_Cancellation'])."</center></td>
					<td><center>".number_format($fetch['Total'])."</center></td>
					<td><center>".number_format($fetch['area_ha'])."</center></td>
					<td><center>".$fetch['year']."</center></td>
					
				</tr>
	";
	}


	$output .= "
				<tr>
					<td><center><b>Misamis Oriental</b></center></td>
					<th>".$Misor_show1."</th>
					<th>".$Misor_show2."</th>
					<th>".$Misor_show3."</th>
					<th>".$Misor_show4."</th>
					<th>".$Misor_show5."</th>
					<th>".$Misor_show6."</th>
					<th>----</th>
				</tr>
	";


	$query = $conn->query("SELECT * FROM `csc_within_cbfma` where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad' ORDER BY year ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['OperatingUnit']."</center></td>
					<td><center>".number_format($fetch['For_Renewal_Renewed'])."</center></td>
					<td><center>".number_format($fetch['For_ReEvaluation'])."</center></td>
					<td><center>".number_format($fetch['For_Transfer'])."</center></td>
					<td><center>".number_format($fetch['For_Cancellation'])."</center></td>
					<td><center>".number_format($fetch['Total'])."</center></td>
					<td><center>".number_format($fetch['area_ha'])."</center></td>
					<td><center>".$fetch['year']."</center></td>
					
				</tr>
	";
	}

	
	$output .="
			</tbody>
			
		</table>
	";
	
	echo $output;
	
	
?>