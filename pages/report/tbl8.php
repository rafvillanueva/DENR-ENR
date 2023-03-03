
<?php
include('../../config/dbcon.php');
include('k_controller.php');
?>
<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=Baseline-for-Certificate-of-Stewardship-Contract.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	$output .="
		<table>
			<h2 style='color:#008B8B;'>ENR Profile : Baseline for Certificate of Stewardship Contract (CSC), Region 10</h2>
			<thead> <br>
				<tr style='color:#008B8B;' class='active'>
							<th> Province</th>
                            <th> Within CBFM Area (No.)</th>
                            <th> Within CBFM Area (Area ha)</th>
                            <th> DENR Jurisdiction (No.)</th>
                            <th> DENR Jurisdiction Area (ha)</th>
                            <th> Devolved to LGUs (No.)</th>
                            <th> Devolved to LGUs Area (ha)</th>
			
				</tr>
			<tbody>

				<tr>
					<td><b>Regional Total</b></td>
					<td><center><b>".number_format($Within_CBFM_Area_No)."</b></center></td>
					<td><center><b>".number_format($Within_CBFM_Area_ha)."</b></center></td>
					<td><center><b>".number_format($DENR_Jurisdiction_Area_No)."</b></center></td>
					<td><center><b>".number_format($DENR_Jurisdiction_ha)."</b></center></td>
					<td><center><b>".number_format($Devolved_to_LGUs_No)."</b></center></td>
					<td><center><b>".number_format($Devolved_to_LGUs_ha)."</b></center></td>
			
				</tr>

	";
	
#SHOW BUKIDNON TOTAL	
	$output .= "
				<tr>
					<td><b>Bukidnon</b></td>
					<td><center><b>".number_format($B_Within_CBFM_Area_No)."</b></center></td>
					<td><center><b>".number_format($B_Within_CBFM_Area_ha)."</b></center></td>
					<td><center><b>".number_format($B_DENR_Jurisdiction_Area_No)."</b></center></td>
					<td><center><b>".number_format($B_DENR_Jurisdiction_ha)."</b></center></td>
					<td><center><b>".number_format($B_Devolved_to_LGUs_No)."</b></center></td>
					<td><center><b>".number_format($B_Devolved_to_LGUs_ha)."</b></center></td>
			
				</tr>
	";
#END BUKIDNON TOTAL	

	$query = $conn->query("SELECT * FROM `baseline_for_csc` where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['OperatingUnit']."</center></td>
					<td><center>".number_format($fetch['Within_CBFM_Area_No'])."</center></td>
					<td><center>".number_format($fetch['Within_CBFM_Area_ha'])."</center></td>
					<td><center>".number_format($fetch['DENR_Jurisdiction_Area_No'])."</center></td>
					<td><center>".number_format($fetch['DENR_Jurisdiction_ha'])."</center></td>
					<td><center>".number_format($fetch['Devolved_to_LGUs_No'])."</center></td>
					<td><center>".number_format($fetch['Devolved_to_LGUs_ha'])."</center></td>			
				</tr>
	";
	}


#SHOW CAMIGUIN TOTAL	
	$output .= "
				<tr>
					<td><b>Camiguin</b></td>
					<td><center><b>".number_format($C_Within_CBFM_Area_No)."</b></center></td>
					<td><center><b>".number_format($C_Within_CBFM_Area_ha)."</b></center></td>
					<td><center><b>".number_format($C_DENR_Jurisdiction_Area_No)."</b></center></td>
					<td><center><b>".number_format($C_DENR_Jurisdiction_ha)."</b></center></td>
					<td><center><b>".number_format($C_Devolved_to_LGUs_No)."</b></center></td>
					<td><center><b>".number_format($C_Devolved_to_LGUs_ha)."</b></center></td>
			
				</tr>
	";


	$query = $conn->query("SELECT * FROM `baseline_for_csc` where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['OperatingUnit']."</center></td>
					<td><center>".number_format($fetch['Within_CBFM_Area_No'])."</center></td>
					<td><center>".number_format($fetch['Within_CBFM_Area_ha'])."</center></td>
					<td><center>".number_format($fetch['DENR_Jurisdiction_Area_No'])."</center></td>
					<td><center>".number_format($fetch['DENR_Jurisdiction_ha'])."</center></td>
					<td><center>".number_format($fetch['Devolved_to_LGUs_No'])."</center></td>
					<td><center>".number_format($fetch['Devolved_to_LGUs_ha'])."</center></td>			
				</tr>
	";
	}

#END CAMIGUIN TOTAL	


#SHOW Lanao del Norte TOTAL	
	$output .= "
				<tr>
					<td><b>Lanao del Norte</b></td>
					<td><center><b>".number_format($Lanao_Within_CBFM_Area_No)."</b></center></td>
					<td><center><b>".number_format($Lanao_Within_CBFM_Area_ha)."</b></center></td>
					<td><center><b>".number_format($Lanao_DENR_Jurisdiction_Area_No)."</b></center></td>
					<td><center><b>".number_format($Lanao_DENR_Jurisdiction_ha)."</b></center></td>
					<td><center><b>".number_format($Lanao_Devolved_to_LGUs_No)."</b></center></td>
					<td><center><b>".number_format($Lanao_Devolved_to_LGUs_ha)."</b></center></td>
			
				</tr>
	";


	$query = $conn->query("SELECT * FROM `baseline_for_csc` where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['OperatingUnit']."</center></td>
					<td><center>".number_format($fetch['Within_CBFM_Area_No'])."</center></td>
					<td><center>".number_format($fetch['Within_CBFM_Area_ha'])."</center></td>
					<td><center>".number_format($fetch['DENR_Jurisdiction_Area_No'])."</center></td>
					<td><center>".number_format($fetch['DENR_Jurisdiction_ha'])."</center></td>
					<td><center>".number_format($fetch['Devolved_to_LGUs_No'])."</center></td>
					<td><center>".number_format($fetch['Devolved_to_LGUs_ha'])."</center></td>			
				</tr>
	";
	}
	
#END Lanao del Norte TOTAL	


#SHOW Misamis Occidental TOTAL	
	$output .= "
				<tr>
					<td><b>Misamis Occidental</b></td>
					<td><center><b>".number_format($Misocc_Within_CBFM_Area_No)."</b></center></td>
					<td><center><b>".number_format($Misocc_Within_CBFM_Area_ha)."</b></center></td>
					<td><center><b>".number_format($Misocc_DENR_Jurisdiction_Area_No)."</b></center></td>
					<td><center><b>".number_format($Misocc_DENR_Jurisdiction_ha)."</b></center></td>
					<td><center><b>".number_format($Misocc_Devolved_to_LGUs_No)."</b></center></td>
					<td><center><b>".number_format($Misocc_Devolved_to_LGUs_ha)."</b></center></td>
			
				</tr>
	";

	$query = $conn->query("SELECT * FROM `baseline_for_csc` where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['OperatingUnit']."</center></td>
					<td><center>".number_format($fetch['Within_CBFM_Area_No'])."</center></td>
					<td><center>".number_format($fetch['Within_CBFM_Area_ha'])."</center></td>
					<td><center>".number_format($fetch['DENR_Jurisdiction_Area_No'])."</center></td>
					<td><center>".number_format($fetch['DENR_Jurisdiction_ha'])."</center></td>
					<td><center>".number_format($fetch['Devolved_to_LGUs_No'])."</center></td>
					<td><center>".number_format($fetch['Devolved_to_LGUs_ha'])."</center></td>			
				</tr>
	";
	}
	
#END Misamis Occidental TOTAL	

#SHOW Misamis Oriental TOTAL	
	$output .= "
				<tr>
					<td><b>Misamis Oriental</b></td>
					<td><center><b>".number_format($Misor_Within_CBFM_Area_No)."</b></center></td>
					<td><center><b>".number_format($Misor_Within_CBFM_Area_ha)."</b></center></td>
					<td><center><b>".number_format($Misor_DENR_Jurisdiction_Area_No)."</b></center></td>
					<td><center><b>".number_format($Misor_DENR_Jurisdiction_ha)."</b></center></td>
					<td><center><b>".number_format($Misor_Devolved_to_LGUs_No)."</b></center></td>
					<td><center><b>".number_format($Misor_Devolved_to_LGUs_ha)."</b></center></td>
			
				</tr>
	";

	$query = $conn->query("SELECT * FROM `baseline_for_csc` where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['OperatingUnit']."</center></td>
					<td><center>".number_format($fetch['Within_CBFM_Area_No'])."</center></td>
					<td><center>".number_format($fetch['Within_CBFM_Area_ha'])."</center></td>
					<td><center>".number_format($fetch['DENR_Jurisdiction_Area_No'])."</center></td>
					<td><center>".number_format($fetch['DENR_Jurisdiction_ha'])."</center></td>
					<td><center>".number_format($fetch['Devolved_to_LGUs_No'])."</center></td>
					<td><center>".number_format($fetch['Devolved_to_LGUs_ha'])."</center></td>			
				</tr>
	";
	}
	
#END Misamis Oriental TOTAL		





	$output .="
			</tbody>
			
		</table>
	";
	
	echo $output;
	
	
?>