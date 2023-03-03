<?php 

#tbl8 report###
######REGIOANL TOTAL
    $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_No) FROM baseline_for_csc") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $Within_CBFM_Area_No=$rows['sum(Within_CBFM_Area_No)'];
        }

    $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_ha) FROM baseline_for_csc") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $Within_CBFM_Area_ha=$rows['sum(Within_CBFM_Area_ha)'];
        }

   $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_Area_No) FROM baseline_for_csc") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $DENR_Jurisdiction_Area_No=$rows['sum(DENR_Jurisdiction_Area_No)'];
        }

   $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_ha) FROM baseline_for_csc") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $DENR_Jurisdiction_ha=$rows['sum(DENR_Jurisdiction_ha)'];
        }
   $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_No) FROM baseline_for_csc") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $Devolved_to_LGUs_No=$rows['sum(Devolved_to_LGUs_No)'];
        }

   $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_ha) FROM baseline_for_csc") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
        $Devolved_to_LGUs_ha=$rows['sum(Devolved_to_LGUs_ha)'];
        }
#####END REGIONAL TOTAL######


#BUKIDNON TOTAL FUNCTION
    $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_No) FROM baseline_for_csc where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
    $B_Within_CBFM_Area_No=$rows['sum(Within_CBFM_Area_No)'];
        }

    $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_ha) FROM baseline_for_csc where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
    $B_Within_CBFM_Area_ha=$rows['sum(Within_CBFM_Area_ha)'];
        }

   $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_Area_No) FROM baseline_for_csc where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
    $B_DENR_Jurisdiction_Area_No=$rows['sum(DENR_Jurisdiction_Area_No)'];
        }

   $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_ha) FROM baseline_for_csc where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
    $B_DENR_Jurisdiction_ha=$rows['sum(DENR_Jurisdiction_ha)'];
        }
   $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_No) FROM baseline_for_csc where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
    $B_Devolved_to_LGUs_No=$rows['sum(Devolved_to_LGUs_No)'];
        }

   $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_ha) FROM baseline_for_csc where OperatingUnit='Valencia City' OR OperatingUnit='Manolo Fortich' OR OperatingUnit='Don Carlos' OR OperatingUnit='Talakag' OR OperatingUnit='Sub-Office Pangantucan' OR OperatingUnit='Mt. Kitanglad RNP' OR OperatingUnit='Mt. Kalatungan RNP' OR OperatingUnit='Mt. Pantaron' OR OperatingUnit='Mt. Tago RNP' OR OperatingUnit='BFI' OR OperatingUnit='Hineleban Foundation'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
    $B_Devolved_to_LGUs_ha=$rows['sum(Devolved_to_LGUs_ha)'];
        }
#END BUKIDNON FUNCTION



#CAMIGUIN TOTAL FUNCTION
    $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_No) FROM baseline_for_csc where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
    $C_Within_CBFM_Area_No=$rows['sum(Within_CBFM_Area_No)'];
        }

    $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_ha) FROM baseline_for_csc where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
    $C_Within_CBFM_Area_ha=$rows['sum(Within_CBFM_Area_ha)'];
        }

   $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_Area_No) FROM baseline_for_csc where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
    $C_DENR_Jurisdiction_Area_No=$rows['sum(DENR_Jurisdiction_Area_No)'];
        }

   $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_ha) FROM baseline_for_csc where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
    $C_DENR_Jurisdiction_ha=$rows['sum(DENR_Jurisdiction_ha)'];
        }
   $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_No) FROM baseline_for_csc where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
    $C_Devolved_to_LGUs_No=$rows['sum(Devolved_to_LGUs_No)'];
        }

   $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_ha) FROM baseline_for_csc where OperatingUnit='Non-PA' OR OperatingUnit='Mt. Timpoong Hibok-Hibok'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
    $C_Devolved_to_LGUs_ha=$rows['sum(Devolved_to_LGUs_ha)'];
        }
#END CAMIGUIN FUNCTION



#Lanao del Norte TOTAL FUNCTION
    $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_No) FROM baseline_for_csc where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
    $Lanao_Within_CBFM_Area_No=$rows['sum(Within_CBFM_Area_No)'];
        }

    $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_ha) FROM baseline_for_csc where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
    $Lanao_Within_CBFM_Area_ha=$rows['sum(Within_CBFM_Area_ha)'];
        }

   $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_Area_No) FROM baseline_for_csc where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
    $Lanao_DENR_Jurisdiction_Area_No=$rows['sum(DENR_Jurisdiction_Area_No)'];
        }

   $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_ha) FROM baseline_for_csc where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
    $Lanao_DENR_Jurisdiction_ha=$rows['sum(DENR_Jurisdiction_ha)'];
        }
   $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_No) FROM baseline_for_csc where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
    $Lanao_Devolved_to_LGUs_No=$rows['sum(Devolved_to_LGUs_No)'];
        }

   $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_ha) FROM baseline_for_csc where OperatingUnit='Iligan City' OR OperatingUnit='CENRO Kolambugan' OR OperatingUnit='Siad Hindang' OR OperatingUnit='Siad Nunungan' OR OperatingUnit='Mt. Inayawan RNP' OR OperatingUnit='Bacolod Kauswagan PLS' OR OperatingUnit='Lake Lanao WPDP'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
    $Lanao_Devolved_to_LGUs_ha=$rows['sum(Devolved_to_LGUs_ha)'];
        }
#END Lanao del Norte FUNCTION

#Misamis Occidental FUNCTION
    $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_No) FROM baseline_for_csc where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
    $Misocc_Within_CBFM_Area_No=$rows['sum(Within_CBFM_Area_No)'];
        }

    $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_ha) FROM baseline_for_csc where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
    $Misocc_Within_CBFM_Area_ha=$rows['sum(Within_CBFM_Area_ha)'];
        }

   $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_Area_No) FROM baseline_for_csc where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
    $Misocc_DENR_Jurisdiction_Area_No=$rows['sum(DENR_Jurisdiction_Area_No)'];
        }

   $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_ha) FROM baseline_for_csc where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
    $Misocc_DENR_Jurisdiction_ha=$rows['sum(DENR_Jurisdiction_ha)'];
        }
   $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_No) FROM baseline_for_csc where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
    $Misocc_Devolved_to_LGUs_No=$rows['sum(Devolved_to_LGUs_No)'];
        }

   $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_ha) FROM baseline_for_csc where OperatingUnit='CENRO Ozamiz City' OR OperatingUnit='CENRO Oroquieta City' OR OperatingUnit='Mt. Malindang RNP' OR OperatingUnit='Mt. Baliangao PLS'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
    $Misocc_Devolved_to_LGUs_ha=$rows['sum(Devolved_to_LGUs_ha)'];
        }
#END Misamis Occidental FUNCTION

#Misamis Oriental FUNCTION
    $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_No) FROM baseline_for_csc where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
    $Misor_Within_CBFM_Area_No=$rows['sum(Within_CBFM_Area_No)'];
        }

    $result = mysqli_query($conn,"SELECT sum(Within_CBFM_Area_ha) FROM baseline_for_csc where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
    $Misor_Within_CBFM_Area_ha=$rows['sum(Within_CBFM_Area_ha)'];
        }

   $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_Area_No) FROM baseline_for_csc where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
    $Misor_DENR_Jurisdiction_Area_No=$rows['sum(DENR_Jurisdiction_Area_No)'];
        }

   $result = mysqli_query($conn,"SELECT sum(DENR_Jurisdiction_ha) FROM baseline_for_csc where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
    $Misor_DENR_Jurisdiction_ha=$rows['sum(DENR_Jurisdiction_ha)'];
        }
   $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_No) FROM baseline_for_csc where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
    $Misor_Devolved_to_LGUs_No=$rows['sum(Devolved_to_LGUs_No)'];
        }

   $result = mysqli_query($conn,"SELECT sum(Devolved_to_LGUs_ha) FROM baseline_for_csc where OperatingUnit='CENRO Initao' OR OperatingUnit='CENRO Gingoog City' OR OperatingUnit='Mt. Balatukan' OR OperatingUnit='Mimbilisan' OR OperatingUnit='Initao Libertad'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
    $Misor_Devolved_to_LGUs_ha=$rows['sum(Devolved_to_LGUs_ha)'];
        }
#END Misamis Oriental FUNCTION








##end tbl8 report##

 ?>