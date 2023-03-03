
<?php
include('../../config/dbcon.php');
?>

<?php
    $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_No) FROM csc_issued") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show1=number_format($rows['sum(Within_CBFM_Area_No)']);
        }



    $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_ha) FROM csc_issued") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show2=number_format($rows['sum(Within_CBFM_Area_ha)']);
        }


    $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_Area_No) FROM csc_issued") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show3=number_format($rows['sum(DENR_Jurisdiction_Area_No)']);
        }


    $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_ha) FROM csc_issued") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show4=number_format($rows['sum(DENR_Jurisdiction_ha)']);
        }



    $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_No) FROM csc_issued") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show5=number_format($rows['sum(Devolved_to_LGUs_No)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_ha) FROM csc_issued") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $show6=number_format($rows['sum(Devolved_to_LGUs_ha)']);
        }

    $result = mysqli_query($conn,"SELECT sum(Total_no) FROM csc_issued") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $show7=number_format($rows['sum(Total_no)']);
        }

    $result = mysqli_query($conn,"SELECT sum(Total_area_ha) FROM csc_issued") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $show8=number_format($rows['sum(Total_area_ha)']);
        }

//query for count the numbers by field's// ######BUKIDNON#####
    $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_No) FROM csc_issued where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $B_show1=number_format($rows['sum(Within_CBFM_Area_No)']);
        }

    $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_ha) FROM csc_issued where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $B_show2=number_format($rows['sum(Within_CBFM_Area_ha)']);
        }
    $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_Area_No) FROM csc_issued where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $B_show3=number_format($rows['sum(DENR_Jurisdiction_Area_No)']);
        }
    $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_ha) FROM csc_issued where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $B_show4=number_format($rows['sum(DENR_Jurisdiction_ha)']);
        }
    $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_No) FROM csc_issued where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $B_show5=number_format($rows['sum(Devolved_to_LGUs_No)']);
        }
    $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_ha) FROM csc_issued where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $B_show6=number_format($rows['sum(Devolved_to_LGUs_ha)']);
        }
    $result = mysqli_query($conn,"SELECT sum(Total_no) FROM csc_issued where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $B_show7=number_format($rows['sum(Total_no)']);
        }
    $result = mysqli_query($conn,"SELECT sum(Total_area_ha) FROM csc_issued where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $B_show8=number_format($rows['sum(Total_area_ha)']);
        }



####END BUKIDNON




//query for count the numbers by field's// ######CAMIGUIN#####
    $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_No) FROM csc_issued where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $C_show1=number_format($rows['sum(Within_CBFM_Area_No)']);
        }

    $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_ha) FROM csc_issued where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $C_show2=number_format($rows['sum(Within_CBFM_Area_ha)']);
        }
    $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_Area_No) FROM csc_issued where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $C_show3=number_format($rows['sum(DENR_Jurisdiction_Area_No)']);
        }
    $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_ha) FROM csc_issued where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $C_show4=number_format($rows['sum(DENR_Jurisdiction_ha)']);
        }
    $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_No) FROM csc_issued where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $C_show5=number_format($rows['sum(Devolved_to_LGUs_No)']);
        }
    $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_ha) FROM csc_issued where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $C_show6=number_format($rows['sum(Devolved_to_LGUs_ha)']);
        }
    $result = mysqli_query($conn,"SELECT sum(Total_no) FROM csc_issued where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $C_show7=number_format($rows['sum(Total_no)']);
        }
    $result = mysqli_query($conn,"SELECT sum(Total_area_ha) FROM csc_issued where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $C_show8=number_format($rows['sum(Total_area_ha)']);
        }

####END CAMIGUIN

//query for count the numbers by field's// ######Lanao del Norte#####
    $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_No) FROM csc_issued where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $Lanao_show1=number_format($rows['sum(Within_CBFM_Area_No)']);
        }
    $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_ha) FROM csc_issued where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $Lanao_show2=number_format($rows['sum(Within_CBFM_Area_ha)']);
        }
    $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_Area_No) FROM csc_issued where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $Lanao_show3=number_format($rows['sum(DENR_Jurisdiction_Area_No)']);
        }
    $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_ha) FROM csc_issued where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $Lanao_show4=number_format($rows['sum(DENR_Jurisdiction_ha)']);
        }
    $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_No) FROM csc_issued where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $Lanao_show5=number_format($rows['sum(Devolved_to_LGUs_No)']);
        }
    $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_ha) FROM csc_issued where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $Lanao_show6=number_format($rows['sum(Devolved_to_LGUs_ha)']);
        }
    $result = mysqli_query($conn,"SELECT sum(Total_no) FROM csc_issued where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $Lanao_show7=number_format($rows['sum(Total_no)']);
        }
    $result = mysqli_query($conn,"SELECT sum(Total_area_ha) FROM csc_issued where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $Lanao_show8=number_format($rows['sum(Total_area_ha)']);
        }

####END Lanao del Norte



//query for count the numbers by field's// ######Misamis Occidental#####
    $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_No) FROM csc_issued where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $Misocc_show1=number_format($rows['sum(Within_CBFM_Area_No)']);
        }
     $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_ha) FROM csc_issued where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $Misocc_show2=number_format($rows['sum(Within_CBFM_Area_ha)']);
        }
     $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_Area_No) FROM csc_issued where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $Misocc_show3=number_format($rows['sum(DENR_Jurisdiction_Area_No)']);
        }
     $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_ha) FROM csc_issued where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $Misocc_show4=number_format($rows['sum(DENR_Jurisdiction_ha)']);
        }
     $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_No) FROM csc_issued where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $Misocc_show5=number_format($rows['sum(Devolved_to_LGUs_No)']);
        }
     $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_ha) FROM csc_issued where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $Misocc_show6=number_format($rows['sum(Devolved_to_LGUs_ha)']);
        }
     $result = mysqli_query($conn,"SELECT sum(Total_no) FROM csc_issued where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $Misocc_show7=number_format($rows['sum(Total_no)']);
        }
     $result = mysqli_query($conn,"SELECT sum(Total_area_ha) FROM csc_issued where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $Misocc_show8=number_format($rows['sum(Total_area_ha)']);
        }



####END Misamis Occidental



//query for count the numbers by field's// ######Misamis Oriental#####
    $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_No) FROM csc_issued where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $Misor_show1=number_format($rows['sum(Within_CBFM_Area_No)']);
        }
    $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_ha) FROM csc_issued where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $Misor_show2=number_format($rows['sum(Within_CBFM_Area_ha)']);
        }
    $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_Area_No) FROM csc_issued where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $Misor_show3=number_format($rows['sum(DENR_Jurisdiction_Area_No)']);
        }
    $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_ha) FROM csc_issued where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $Misor_show4=number_format($rows['sum(DENR_Jurisdiction_ha)']);
        }
    $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_No) FROM csc_issued where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $Misor_show5=number_format($rows['sum(Devolved_to_LGUs_No)']);
        }
    $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_ha) FROM csc_issued where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $Misor_show6=number_format($rows['sum(Devolved_to_LGUs_ha)']);
        }
    $result = mysqli_query($conn,"SELECT sum(Total_no) FROM csc_issued where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $Misor_show7=number_format($rows['sum(Total_no)']);
        }
    $result = mysqli_query($conn,"SELECT sum(Total_area_ha) FROM csc_issued where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $Misor_show8=number_format($rows['sum(Total_area_ha)']);
        }


####END Misamis Oriental




?>





<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=Certificate of Stewardship Contract (CSC) Issued.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	$output .="
		<table>
			<h2 style='color:#008B8B;'>ENR Profile : Certificate of Stewardship Contract (CSC) Issued, Region 10</h2>
			<thead> <br>
				<tr style='color:#008B8B;'>
					<th><h3>PENRO/CENRO</h3></th>
					<th><h3>Within CBFM Area No.</h3></th>
					<th><h3>Within CBFM Area(ha)</h3></th>
					<th><h3>DENR Jurisdiction No.</h3></th>	
					<th><h3>DENR Jurisdiction Area(ha)</h3></th>	
					<th><h3>Devolved to LGUs No.</h3></th>
					<th><h3>Devolved to LGUs Area(ha)</h3></th>
					<th><h3>Total No.</h3></th>    
                    <th><h3>Total Area(ha)</h3></th> 

				</tr>

				<tr>
					<th>Regional Total</th>
					<th>".$show1."</th>
					<th>".$show2."</th>
					<th>".$show3."</th>
					<th>".$show4."</th>
					<th>".$show5."</th>
					<th>".$show6."</th>
                    <th>".$show7."</th>
                    <th>".$show8."</th>
					
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
                    <th>".$B_show7."</th>
                    <th>".$B_show8."</th>
		
				</tr>
	";



	$query = $conn->query("SELECT * FROM `csc_issued` where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysqli_errno());
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
                    <td><center>".number_format($fetch['Total_no'])."</center></td>
                    <td><center>".number_format($fetch['Total_area_ha'])."</center></td>
					
					
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
                    <th>".$C_show7."</th>
                    <th>".$C_show8."</th>
					
				</tr>
	";



	$query = $conn->query("SELECT * FROM `csc_issued` where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysqli_errno());
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
                    <td><center>".number_format($fetch['Total_no'])."</center></td>
                    <td><center>".number_format($fetch['Total_area_ha'])."</center></td>
					
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
                    <th>".$Lanao_show7."</th>
                    <th>".$Lanao_show8."</th>
				
				</tr>
	";


	$query = $conn->query("SELECT * FROM `csc_issued` where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysqli_errno());
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
                    <td><center>".number_format($fetch['Total_no'])."</center></td>
                    <td><center>".number_format($fetch['Total_area_ha'])."</center></td>
					
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
                    <th>".$Misocc_show7."</th>
                    <th>".$Misocc_show8."</th>
				
				</tr>
	";


	$query = $conn->query("SELECT * FROM `csc_issued` where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysqli_errno());
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
                    <td><center>".number_format($fetch['Total_no'])."</center></td>
                    <td><center>".number_format($fetch['Total_area_ha'])."</center></td>
					
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
                    <th>".$Misor_show7."</th>
                    <th>".$Misor_show8."</th>
					
				</tr>
	";


	$query = $conn->query("SELECT * FROM `csc_issued` where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysqli_errno());
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
                    <td><center>".number_format($fetch['Total_no'])."</center></td>
                    <td><center>".number_format($fetch['Total_area_ha'])."</center></td>
					
				</tr>
	";
	}

	
	$output .="
			</tbody>
			
		</table>
	";
	
	echo $output;
	
	
?>