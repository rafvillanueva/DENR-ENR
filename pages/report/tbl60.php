
<?php
include('../../config/dbcon.php');

    $result = mysqli_query($conn,"SELECT sum(No_of_CBFMA) FROM Status_of_Community_Resource_Management_Framework") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show1=number_format($rows['sum(No_of_CBFMA)']);
        }

        $result = mysqli_query($conn,"SELECT sum(CBFMA_With_No_CRMF) FROM Status_of_Community_Resource_Management_Framework") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show2=number_format($rows['sum(CBFMA_With_No_CRMF)']);
        }

        $result = mysqli_query($conn,"SELECT sum(CBFMA_With_CRMF_Needs_Updating) FROM Status_of_Community_Resource_Management_Framework") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show3=number_format($rows['sum(CBFMA_With_CRMF_Needs_Updating)']);
        }

        $result = mysqli_query($conn,"SELECT sum(CBFMA_With_Updated_CRMF) FROM Status_of_Community_Resource_Management_Framework") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show4=number_format($rows['sum(CBFMA_With_Updated_CRMF)']);
        }

        $result = mysqli_query($conn,"SELECT sum(CBFMA_With_Affirmed_CRMF) FROM Status_of_Community_Resource_Management_Framework") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show5=number_format($rows['sum(CBFMA_With_Affirmed_CRMF)']);
        }





    $result = mysqli_query($conn,"SELECT sum(No_of_CBFMA) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show6=number_format($rows['sum(No_of_CBFMA)']);
        }

        $result = mysqli_query($conn,"SELECT sum(CBFMA_With_No_CRMF) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show7=number_format($rows['sum(CBFMA_With_No_CRMF)']);
        }

        $result = mysqli_query($conn,"SELECT sum(CBFMA_With_CRMF_Needs_Updating) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show8=number_format($rows['sum(CBFMA_With_CRMF_Needs_Updating)']);
        }

        $result = mysqli_query($conn,"SELECT sum(CBFMA_With_Updated_CRMF) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show9=number_format($rows['sum(CBFMA_With_Updated_CRMF)']);
        }


        $result = mysqli_query($conn,"SELECT sum(CBFMA_With_Affirmed_CRMF) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show10=number_format($rows['sum(CBFMA_With_Affirmed_CRMF)']);
        }







    $result = mysqli_query($conn,"SELECT sum(No_of_CBFMA) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show11=number_format($rows['sum(No_of_CBFMA)']);
        }

        $result = mysqli_query($conn,"SELECT sum(CBFMA_With_No_CRMF) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show12=number_format($rows['sum(CBFMA_With_No_CRMF)']);
        }

        $result = mysqli_query($conn,"SELECT sum(CBFMA_With_CRMF_Needs_Updating) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show13=number_format($rows['sum(CBFMA_With_CRMF_Needs_Updating)']);
        }

        $result = mysqli_query($conn,"SELECT sum(CBFMA_With_Updated_CRMF) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show14=number_format($rows['sum(CBFMA_With_Updated_CRMF)']);
        }


        $result = mysqli_query($conn,"SELECT sum(CBFMA_With_Affirmed_CRMF) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show15=number_format($rows['sum(CBFMA_With_Affirmed_CRMF)']);
        }


    $result = mysqli_query($conn,"SELECT sum(No_of_CBFMA) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show16=number_format($rows['sum(No_of_CBFMA)']);
        }

        $result = mysqli_query($conn,"SELECT sum(CBFMA_With_No_CRMF) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show17=number_format($rows['sum(CBFMA_With_No_CRMF)']);
        }

        $result = mysqli_query($conn,"SELECT sum(CBFMA_With_CRMF_Needs_Updating) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show18=number_format($rows['sum(CBFMA_With_CRMF_Needs_Updating)']);
        }

        $result = mysqli_query($conn,"SELECT sum(CBFMA_With_Updated_CRMF) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show19=number_format($rows['sum(CBFMA_With_Updated_CRMF)']);
        }

        $result = mysqli_query($conn,"SELECT sum(CBFMA_With_Affirmed_CRMF) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show20=number_format($rows['sum(CBFMA_With_Affirmed_CRMF)']);
        }







    $result = mysqli_query($conn,"SELECT sum(No_of_CBFMA) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show21=number_format($rows['sum(No_of_CBFMA)']);
        }

        $result = mysqli_query($conn,"SELECT sum(CBFMA_With_No_CRMF) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show22=number_format($rows['sum(CBFMA_With_No_CRMF)']);
        }

        $result = mysqli_query($conn,"SELECT sum(CBFMA_With_CRMF_Needs_Updating) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show23=number_format($rows['sum(CBFMA_With_CRMF_Needs_Updating)']);
        }

        $result = mysqli_query($conn,"SELECT sum(CBFMA_With_Updated_CRMF) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show24=number_format($rows['sum(CBFMA_With_Updated_CRMF)']);
        }

        $result = mysqli_query($conn,"SELECT sum(CBFMA_With_Affirmed_CRMF) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show25=number_format($rows['sum(CBFMA_With_Affirmed_CRMF)']);
        }





    $result = mysqli_query($conn,"SELECT sum(No_of_CBFMA) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show26=number_format($rows['sum(No_of_CBFMA)']);
        }

        $result = mysqli_query($conn,"SELECT sum(CBFMA_With_No_CRMF) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show27=number_format($rows['sum(CBFMA_With_No_CRMF)']);
        }

        $result = mysqli_query($conn,"SELECT sum(CBFMA_With_CRMF_Needs_Updating) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show28=number_format($rows['sum(CBFMA_With_CRMF_Needs_Updating)']);
        }

        $result = mysqli_query($conn,"SELECT sum(CBFMA_With_Updated_CRMF) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show29=number_format($rows['sum(CBFMA_With_Updated_CRMF)']);
        }

        $result = mysqli_query($conn,"SELECT sum(CBFMA_With_Affirmed_CRMF) FROM Status_of_Community_Resource_Management_Framework where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show30=number_format($rows['sum(CBFMA_With_Affirmed_CRMF)']);
        }




  



?>

<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=Status of Community Resource Management Framework Region 10.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	$output .="
		<table>
			<h2 style='color:#008B8B;'>ENR Profile : Status of Community Resource Management Framework, Region 10</h2>
			<thead> <br>
				<tr style='color:#008B8B;'>
					<th><h3>PENRO/CENRO </h3></th>
					<th><h3>No. of CBFMA</h3></th>
					<th><h3>CBFMA With No CRMF</h3></th>	
					<th><h3>CBFMA With CRMF Needs Updating</h3></th>
					<th><h3>CBFMA With Updated CRMF</h3></th>
					<th><h3>CBFMA With Affirmed CRMF</h3></th>	
				</tr>

				<tr>
					<th>Regional Total</th>
					<th>".$show1."</th>
					<th>".$show2."</th>
					<th>".$show3."</th>
					<th>".$show4."</th>
					<th>".$show5."</th>
						
				</tr>
			<tbody>
	";



	$output .= "
				<tr>
					<td><center><b>Bukidnon</b></center></td>
					<th>".$show6."</th>
					<th>".$show7."</th>
					<th>".$show8."</th>
					<th>".$show9."</th>
					<th>".$show10."</th>
									
					
				</tr>
	"; 

	$query = $conn->query("SELECT * FROM `Status_of_Community_Resource_Management_Framework` where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation' order by OperatingUnit asc") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['OperatingUnit']."</center></td>
					<td><center>".number_format($fetch['No_of_CBFMA'])."</center></td>
					<td><center>".number_format($fetch['CBFMA_With_No_CRMF'])."</center></td>
					<td><center>".number_format($fetch['CBFMA_With_CRMF_Needs_Updating'])."</center></td>
					<td><center>".number_format($fetch['CBFMA_With_Updated_CRMF'])."</center></td>
					<td><center>".number_format($fetch['CBFMA_With_Affirmed_CRMF'])."</center></td>
				</tr>
	";
	}


	$output .= "
				<tr>
					<td><center><b>Camiguin</b></center></td>
					<th>".$show11."</th>
					<th>".$show12."</th>
					<th>".$show13."</th>
					<th>".$show14."</th>
					<th>".$show15."</th>			
				</tr>
	";

	$query = $conn->query("SELECT * FROM `Status_of_Community_Resource_Management_Framework` where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok' order by OperatingUnit asc") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['OperatingUnit']."</center></td>
					<td><center>".number_format($fetch['No_of_CBFMA'])."</center></td>
					<td><center>".number_format($fetch['CBFMA_With_No_CRMF'])."</center></td>
					<td><center>".number_format($fetch['CBFMA_With_CRMF_Needs_Updating'])."</center></td>
					<td><center>".number_format($fetch['CBFMA_With_Updated_CRMF'])."</center></td>
					<td><center>".number_format($fetch['CBFMA_With_Affirmed_CRMF'])."</center></td>
				</tr>
	";
	}
	
	
	$output .= "
				<tr>
					<td><center><b>Lanao del Norte</b></center></td>
					<th>".$show16."</th>
					<th>".$show17."</th>
					<th>".$show18."</th>
					<th>".$show19."</th>
					<th>".$show20."</th>
										
					
				</tr>
	";

	$query = $conn->query("SELECT * FROM `Status_of_Community_Resource_Management_Framework`where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP' order by OperatingUnit asc") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['OperatingUnit']."</center></td>
					<td><center>".number_format($fetch['No_of_CBFMA'])."</center></td>
					<td><center>".number_format($fetch['CBFMA_With_No_CRMF'])."</center></td>
					<td><center>".number_format($fetch['CBFMA_With_CRMF_Needs_Updating'])."</center></td>
					<td><center>".number_format($fetch['CBFMA_With_Updated_CRMF'])."</center></td>
					<td><center>".number_format($fetch['CBFMA_With_Affirmed_CRMF'])."</center></td>
				</tr>
	";
	}



	$output .= "
				<tr>
					<td><center><b>Misamis Occidental </b></center></td>
					<th>".$show21."</th>
					<th>".$show22."</th>
					<th>".$show23."</th>
					<th>".$show24."</th>
					<th>".$show25."</th>
					
				</tr>
	";

	$query = $conn->query("SELECT * FROM `Status_of_Community_Resource_Management_Framework` where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS' order by OperatingUnit asc") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['OperatingUnit']."</center></td>
					<td><center>".number_format($fetch['No_of_CBFMA'])."</center></td>
					<td><center>".number_format($fetch['CBFMA_With_No_CRMF'])."</center></td>
					<td><center>".number_format($fetch['CBFMA_With_CRMF_Needs_Updating'])."</center></td>
					<td><center>".number_format($fetch['CBFMA_With_Updated_CRMF'])."</center></td>
					<td><center>".number_format($fetch['CBFMA_With_Affirmed_CRMF'])."</center></td>
				</tr>
	";
	}




	$output .= "
				<tr>
					<td><center><b>Misamis Oriental</b></center></td>
					<th>".$show26."</th>
					<th>".$show27."</th>
					<th>".$show28."</th>
					<th>".$show29."</th>
					<th>".$show30."</th>
										
					
				</tr>
	";

	$query = $conn->query("SELECT * FROM `Status_of_Community_Resource_Management_Framework` where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad' order by OperatingUnit asc") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['OperatingUnit']."</center></td>
					<td><center>".number_format($fetch['No_of_CBFMA'])."</center></td>
					<td><center>".number_format($fetch['CBFMA_With_No_CRMF'])."</center></td>
					<td><center>".number_format($fetch['CBFMA_With_CRMF_Needs_Updating'])."</center></td>
					<td><center>".number_format($fetch['CBFMA_With_Updated_CRMF'])."</center></td>
					<td><center>".number_format($fetch['CBFMA_With_Affirmed_CRMF'])."</center></td>
				</tr>
	";
	}





	$output .="
			</tbody>
			
		</table>
	";
	
	echo $output;
	
	
?>