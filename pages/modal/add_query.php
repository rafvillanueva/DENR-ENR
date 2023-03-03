      <?php 
        
        if (isset($_POST['tbl1_save'])) 
        { 
          $NoUnits=$_POST['NoUnits'];
          $EstValue=$_POST['EstValue'];
          $Year=$_POST['Year'];
          $OperatingUnit=$_POST['OperatingUnit'];
          
          mysqli_query($conn,"INSERT into apprehended_conveyances(NoUnits,EstValue,Year,OperatingUnit)
          values('$NoUnits','$EstValue','$Year','$OperatingUnit')");
           echo "<script>alert('Success! New Record Created.'); window.location='Apprehended-Conveyances'</script>";
       }

        else if (isset($_POST['tbl2_save'])) 
        { 
          $Volume_inPcs=$_POST['Volume_inPcs'];
          $EstValue=$_POST['EstValue'];
          $Year=$_POST['Year'];
          $OperatingUnit=$_POST['OperatingUnit'];
          
          mysqli_query($conn,"INSERT into apprehended_finished_products(Volume_inPcs,EstValue,Year,OperatingUnit)
          values('$Volume_inPcs','$EstValue','$Year','$OperatingUnit')");
           echo "<script>alert('Success! New Record Created.'); window.location='Apprehended-Finished-Products'</script>";
       }

        else if (isset($_POST['tbl3_save'])) 
        { 
          $Volume_inBoardFeet=$_POST['Volume_inBoardFeet'];
          $EstValue=$_POST['EstValue'];
          $Year=$_POST['Year'];
          $OperatingUnit=$_POST['OperatingUnit'];
          
          mysqli_query($conn,"INSERT into apprehended_forest_products(Volume_inBoardFeet,EstValue,Year,OperatingUnit)
          values('$Volume_inBoardFeet','$EstValue','$Year','$OperatingUnit')");
           echo "<script>alert('Success! New Record Created.'); window.location='Apprehended-Forest-Products'</script>";
       }


        else if (isset($_POST['tbl4_save'])) 
        { 
          $NoUnits=$_POST['NoUnits'];
          $EstValue=$_POST['EstValue'];
          $Year=$_POST['Year'];
          $OperatingUnit=$_POST['OperatingUnit'];
          
          mysqli_query($conn,"INSERT into apprehended_implements_equipment(NoUnits,EstValue,Year,OperatingUnit)
          values('$NoUnits','$EstValue','$Year','$OperatingUnit')");
           echo "<script>alert('Success! New Record Created.'); window.location='Apprehended-Implements-Equipment'</script>";
       }


        else if (isset($_POST['tbl5_save'])) 
        { 
          $Volume_inLinealMeters=$_POST['Volume_inLinealMeters'];
          $EstValue=$_POST['EstValue'];
          $Year=$_POST['Year'];
          $OperatingUnit=$_POST['OperatingUnit'];
          
          mysqli_query($conn,"INSERT into apprehended_rattan_poles(Volume_inLinealMeters,EstValue,Year,OperatingUnit)
          values('$Volume_inLinealMeters','$EstValue','$Year','$OperatingUnit')");
           echo "<script>alert('Success! New Record Created.'); window.location='Apprehended-Rattan-Poles'</script>";
       }

        else if (isset($_POST['tbl6_save'])) 
        { 
          $Volume_inSacks=$_POST['Volume_inSacks'];
          $EstValue=$_POST['EstValue'];
          $Year=$_POST['Year'];
          $OperatingUnit=$_POST['OperatingUnit'];
          
          mysqli_query($conn,"INSERT into apprehended_wood_charcoal(Volume_inSacks,EstValue,Year,OperatingUnit)
          values('$Volume_inSacks','$EstValue','$Year','$OperatingUnit')");
           echo "<script>alert('Success! New Record Created.'); window.location='Apprehended-Wood-Charcoal'</script>";
       }


        else if (isset($_POST['tbl7_save'])) 
        { 
          $Universe=$_POST['Universe'];
          $Baseline=$_POST['Baseline'];
          $NGP_Accomplishment=$_POST['NGP_Accomplishment'];
          $Inremp=$_POST['Inremp'];
          $CBFM_CARP=$_POST['CBFM_CARP'];
          $Tenurial_Instrument=$_POST['Tenurial_Instrument'];
          $Province=$_POST['Province'];
          $Total = $NGP_Accomplishment + $Inremp + $CBFM_CARP + $Tenurial_Instrument;
          
          mysqli_query($conn,"INSERT into area_developed(Universe,Baseline,NGP_Accomplishment,Inremp,CBFM_CARP,Tenurial_Instrument,Province,Total)
          values('$Universe','$Baseline','$NGP_Accomplishment','$Inremp','$CBFM_CARP','$Tenurial_Instrument','$Province','$Total')");
           echo "<script>alert('Success! New Record Created.'); window.location='Area-developed'</script>";
       }

        else if (isset($_POST['tbl8_save'])) 
        { 
          $OperatingUnit=$_POST['OperatingUnit'];
          $Within_CBFM_Area_No=$_POST['Within_CBFM_Area_No'];
          $Within_CBFM_Area_ha=$_POST['Within_CBFM_Area_ha'];
          $DENR_Jurisdiction_Area_No=$_POST['DENR_Jurisdiction_Area_No'];
          $DENR_Jurisdiction_ha=$_POST['DENR_Jurisdiction_ha'];
          $Devolved_to_LGUs_No=$_POST['Devolved_to_LGUs_No'];
          $Devolved_to_LGUs_ha=$_POST['Devolved_to_LGUs_ha'];
          
          
            mysqli_query($conn,"INSERT into baseline_for_csc(OperatingUnit,Within_CBFM_Area_No,Within_CBFM_Area_ha,DENR_Jurisdiction_Area_No,DENR_Jurisdiction_ha,Devolved_to_LGUs_No,Devolved_to_LGUs_ha)values('$OperatingUnit','$Within_CBFM_Area_No','$Within_CBFM_Area_ha','$DENR_Jurisdiction_Area_No','$DENR_Jurisdiction_ha','$Devolved_to_LGUs_No','$Devolved_to_LGUs_ha')");
            echo "<script>alert('Success! New Record Created.'); window.location='Baseline-CSC'</script>";
        }


        else if(isset($_POST['tbl9_save'])) 
        { 
          $Province=$_POST['Province'];
          $Municipality=$_POST['Municipality'];
          $Uncontested=$_POST['Uncontested'];
          $Contested=$_POST['Contested'];
          
          mysqli_query($conn,"INSERT into Cadastral_Survey(Province,Municipality,Uncontested,Contested)
          values('$Province','$Municipality','$Uncontested','$Contested')");
           echo "<script>alert('Success! New Record Created.'); window.location='Cadastral-Survey'</script>";
       }


        else if(isset($_POST['tbl10_save'])) 
        { 
          $OperatingUnit=$_POST['OperatingUnit'];
          $For_Renewal_Renewed=$_POST['For_Renewal_Renewed'];
          $For_ReEvaluation=$_POST['For_ReEvaluation'];
          $For_Transfer=$_POST['For_Transfer'];
          $For_Cancellation=$_POST['For_Cancellation'];
          $Total=$For_Renewal_Renewed + $For_ReEvaluation + $For_Transfer + $For_Cancellation;
          $area_ha=$_POST['area_ha'];
          $year=$_POST['year'];
          
  mysqli_query($conn,"INSERT into csc_outside_cbfma(OperatingUnit,For_Renewal_Renewed,For_ReEvaluation,For_Transfer,For_Cancellation,Total,area_ha,year)
          values('$OperatingUnit','$For_Renewal_Renewed','$For_ReEvaluation','$For_Transfer','$For_Cancellation','$Total','$area_ha','$year')");
           echo "<script>alert('Success! New Record Created.'); window.location='CSC-outside-CBFMA'</script>";
       }


        else if(isset($_POST['tbl11_save'])) 
        { 
          $OperatingUnit=$_POST['OperatingUnit'];
          $For_Renewal_Renewed=$_POST['For_Renewal_Renewed'];
          $For_ReEvaluation=$_POST['For_ReEvaluation'];
          $For_Transfer=$_POST['For_Transfer'];
          $For_Cancellation=$_POST['For_Cancellation'];
          $Total=$For_Renewal_Renewed + $For_ReEvaluation + $For_Transfer + $For_Cancellation;
          $area_ha=$_POST['area_ha'];          
          $year=$_POST['year'];
          
  mysqli_query($conn,"INSERT into csc_within_cbfma(OperatingUnit,For_Renewal_Renewed,For_ReEvaluation,For_Transfer,For_Cancellation,Total,area_ha,year)
          values('$OperatingUnit','$For_Renewal_Renewed','$For_ReEvaluation','$For_Transfer','$For_Cancellation','$Total','$area_ha','$year')");
           echo "<script>alert('Success! New Record Created.'); window.location='CSC-within-CBFMA'</script>";
       }


        else if (isset($_POST['tbl12_save'])) 
        { 
          $OperatingUnit=$_POST['OperatingUnit'];
          $Within_CBFM_Area_No=$_POST['Within_CBFM_Area_No'];
          $Within_CBFM_Area_ha=$_POST['Within_CBFM_Area_ha'];
          $DENR_Jurisdiction_Area_No=$_POST['DENR_Jurisdiction_Area_No'];
          $DENR_Jurisdiction_ha=$_POST['DENR_Jurisdiction_ha'];
          $Devolved_to_LGUs_No=$_POST['Devolved_to_LGUs_No'];
          $Devolved_to_LGUs_ha=$_POST['Devolved_to_LGUs_ha'];
          $Total_no = $Within_CBFM_Area_No + $DENR_Jurisdiction_Area_No + $Devolved_to_LGUs_No;
          $Total_area_ha = $Within_CBFM_Area_ha + $DENR_Jurisdiction_ha + $Devolved_to_LGUs_ha;
          
          
            mysqli_query($conn,"INSERT into csc_issued(OperatingUnit,Within_CBFM_Area_No,Within_CBFM_Area_ha,DENR_Jurisdiction_Area_No,DENR_Jurisdiction_ha,Devolved_to_LGUs_No,Devolved_to_LGUs_ha,Total_no,Total_area_ha)values('$OperatingUnit','$Within_CBFM_Area_No','$Within_CBFM_Area_ha','$DENR_Jurisdiction_Area_No','$DENR_Jurisdiction_ha','$Devolved_to_LGUs_No','$Devolved_to_LGUs_ha','$Total_no','$Total_area_ha')");
            echo "<script>alert('Success! New Record Created.'); window.location='CSC-issued'</script>";
        }




        else if(isset($_POST['tbl13_save'])) 
        { 
          $Coastal_name_wbl=$_POST['Coastal_name_wbl'];
          $Category=$_POST['Category'];
          $Classification=$_POST['Classification'];
          $Location=$_POST['Location'];
          $Exit_point=$_POST['Exit_point'];
          
  mysqli_query($conn,"INSERT into classified_coastal_wbl(Coastal_name_wbl,Category,Classification,Location,Exit_point)
          values('$Coastal_name_wbl','$Category','$Classification','$Location','$Exit_point')");
           echo "<script>alert('Success! New Record Created.'); window.location='Classified-Coastal-WBL'</script>";
       }



        else if(isset($_POST['tbl14_save'])) 
        { 
          $Name_Rivers=$_POST['Name_Rivers'];
          $Category=$_POST['Category'];
          $Classification=$_POST['Classification'];
          $Location=$_POST['Location'];
          $Exit_point=$_POST['Exit_point'];
          
  mysqli_query($conn,"INSERT into classified_major_rivers(Name_Rivers,Category,Classification,Location,Exit_point)
          values('$Name_Rivers','$Category','$Classification','$Location','$Exit_point')");
           echo "<script>alert('Success! New Record Created.'); window.location='Classified-Major-Rivers'</script>";
       }

        else if(isset($_POST['tbl15_save'])) 
        { 
          $Name_Rivers=$_POST['Name_Rivers'];
          $Category=$_POST['Category'];
          $Classification=$_POST['Classification'];
          $Location=$_POST['Location'];
          $Exit_point=$_POST['Exit_point'];
          
  mysqli_query($conn,"INSERT into classified_minor_rivers(Name_Rivers,Category,Classification,Location,Exit_point)
          values('$Name_Rivers','$Category','$Classification','$Location','$Exit_point')");
           echo "<script>alert('Success! New Record Created.'); window.location='Classified-Minor-Rivers'</script>";
       }

        else if(isset($_POST['tbl16_save'])) 
        { 
          $Name_Rivers=$_POST['Name_Rivers'];
          $Category=$_POST['Category'];
          $Classification=$_POST['Classification'];
          $Location=$_POST['Location'];
          $Exit_point=$_POST['Exit_point'];
          
  mysqli_query($conn,"INSERT into classified_principle_rivers(Name_Rivers,Category,Classification,Location,Exit_point)
          values('$Name_Rivers','$Category','$Classification','$Location','$Exit_point')");
           echo "<script>alert('Success! New Record Created.'); window.location='Classified-Principle-Rivers'</script>";
       }

        else if (isset($_POST['tbl17_save'])) 
        { 
          $penro_cenro=$_POST['penro_cenro'];
          $numbers=$_POST['numbers'];
          $year=$_POST['year'];
      
          mysqli_query($conn,"INSERT into cbep_extension_officer(penro_cenro,numbers,year)
          values('$penro_cenro','$numbers','$year')");
           echo "<script>alert('Success! New Record Created.'); window.location='CBEP-extension-officer'</script>";
       }

        else if (isset($_POST['tbl18_save'])) 
        { 
          $penro_cenro=$_POST['penro_cenro'];
          $numbers=$_POST['numbers'];
          $year=$_POST['year'];
      
          mysqli_query($conn,"INSERT into cbep_jobs_generated(penro_cenro,numbers,year)
          values('$penro_cenro','$numbers','$year')");
           echo "<script>alert('Success! New Record Created.'); window.location='CBEP-job-generated'</script>";
       }



        else if (isset($_POST['tbl19_save'])) 
        { 
          $penro_cenro=$_POST['penro_cenro'];
          $numbers=$_POST['numbers'];
          $year=$_POST['year'];
      
          mysqli_query($conn,"INSERT into cbep_persons_employed(penro_cenro,numbers,year)
          values('$penro_cenro','$numbers','$year')");
           echo "<script>alert('Success! New Record Created.'); window.location='CBEP-persons-employed'</script>";
       }

        else if (isset($_POST['tbl20_save'])) 
        { 
          $NoUnits=$_POST['NoUnits'];
          $EstValue=$_POST['EstValue'];
          $Year=$_POST['Year'];
          $OperatingUnit=$_POST['OperatingUnit'];
          
          mysqli_query($conn,"INSERT into confiscated_conveyances(NoUnits,EstValue,Year,OperatingUnit)
          values('$NoUnits','$EstValue','$Year','$OperatingUnit')");
           echo "<script>alert('Success! New Record Created.'); window.location='Confiscated-Conveyances'</script>";
       }


        else if (isset($_POST['tbl21_save'])) 
        { 
          $Volume_inBoardFeet=$_POST['Volume_inBoardFeet'];
          $EstValue=$_POST['EstValue'];
          $Year=$_POST['Year'];
          $OperatingUnit=$_POST['OperatingUnit'];
          
          mysqli_query($conn,"INSERT into confiscated_forest_products(Volume_inBoardFeet,EstValue,Year,OperatingUnit)
          values('$Volume_inBoardFeet','$EstValue','$Year','$OperatingUnit')");
           echo "<script>alert('Success! New Record Created.'); window.location='Confiscated-Forest-Products'</script>";
       }

      else if (isset($_POST['tbl22_save'])) 
        { 
          $NoUnits=$_POST['NoUnits'];
          $EstValue=$_POST['EstValue'];
          $Year=$_POST['Year'];
          $OperatingUnit=$_POST['OperatingUnit'];
          
          mysqli_query($conn,"INSERT into confiscated_implements_equipment(NoUnits,EstValue,Year,OperatingUnit)
          values('$NoUnits','$EstValue','$Year','$OperatingUnit')");
           echo "<script>alert('Success! New Record Created.'); window.location='Confiscated-Implements-Equipment'</script>";
       }

        else if (isset($_POST['tbl23_save'])) 
        { 
          $Volume_inLinealMeters=$_POST['Volume_inLinealMeters'];
          $EstValue=$_POST['EstValue'];
          $Year=$_POST['Year'];
          $OperatingUnit=$_POST['OperatingUnit'];
          
          mysqli_query($conn,"INSERT into confiscated_rattan_poles(Volume_inLinealMeters,EstValue,Year,OperatingUnit)
          values('$Volume_inLinealMeters','$EstValue','$Year','$OperatingUnit')");
           echo "<script>alert('Success! New Record Created.'); window.location='Confiscated-Rattan-Poles'</script>";
       }

        else if (isset($_POST['tbl24_save'])) 
        { 
          $Province=$_POST['Province'];
          $Name_watershed=$_POST['Name_watershed'];
          $Area_ha=$_POST['Area_ha'];
    
          
          mysqli_query($conn,"INSERT into critical_watersheds(Province,Name_watershed,Area_ha)
          values('$Province','$Name_watershed','$Area_ha')");
           echo "<script>alert('Success! New Record Created.'); window.location='Critical-Watersheds'</script>";
       }


        else if (isset($_POST['tbl25_save'])) 
        { 
          $Province=$_POST['Province'];
          $No_cbfma=$_POST['No_cbfma'];
          $Area_ha=$_POST['Area_ha'];
          $Status=$_POST['Status'];
          
          mysqli_query($conn,"INSERT into existing_cfbma(Province,No_cbfma,Area_ha,Status)
          values('$Province','$No_cbfma','$Area_ha','$Status')");
           echo "<script>alert('Success! New Record Created.'); window.location='Existing_CFBMA'</script>";
       }

        else if (isset($_POST['tbl26_save'])) 
        { 
          $Penro=$_POST['Penro'];
          $Cenro=$_POST['Cenro'];
          $Municipality_City=$_POST['Municipality_City'];
          $Barangay=$_POST['Barangay'];
          $Name_of_instrument=$_POST['Name_of_instrument'];
          $Area_ha=$_POST['Area_ha'];
          $Status=$_POST['Status'];
          
          mysqli_query($conn,"INSERT into existing_flgla(Penro,Cenro,Municipality_City,Barangay,Name_of_instrument,Area_ha,Status)
          values('$Penro','$Cenro','$Municipality_City','$Barangay','$Name_of_instrument','$Area_ha','$Status')");
           echo "<script>alert('Success! New Record Created.'); window.location='Existing_FLGLA'</script>";
       }

        else if (isset($_POST['tbl27_save'])) 
        { 
          $Penro=$_POST['Penro'];
          $Cenro=$_POST['Cenro'];
          $Municipality_City=$_POST['Municipality_City'];
          $Barangay=$_POST['Barangay'];
          $Name_of_instrument=$_POST['Name_of_instrument'];
          $Area_ha=$_POST['Area_ha'];
          $Status=$_POST['Status'];
          
          mysqli_query($conn,"INSERT into existing_flgma(Penro,Cenro,Municipality_City,Barangay,Name_of_instrument,Area_ha,Status)
          values('$Penro','$Cenro','$Municipality_City','$Barangay','$Name_of_instrument','$Area_ha','$Status')");
           echo "<script>alert('Success! New Record Created.'); window.location='Existing_FLGMA'</script>";
       }


        else if (isset($_POST['tbl28_save'])) 
        { 
          $Penro=$_POST['Penro'];
          $Cenro=$_POST['Cenro'];
          $name_of_holder=$_POST['name_of_holder'];
          $Location=$_POST['Location'];
          $Area_ha=$_POST['Area_ha'];
          $Area_planted_ha=$_POST['Area_planted_ha'];
          $Status=$_POST['Status'];
 
          
          mysqli_query($conn,"INSERT into existing_industrial_forest_management_area(Penro,Cenro,name_of_holder,Location,Area_ha,Area_planted_ha,Status)
          values('$Penro','$Cenro','$name_of_holder','$Location','$Area_ha','$Area_planted_ha','$Status')");
           echo "<script>alert('Success! New Record Created.'); window.location='Existing-Industrial-FMA'</script>";
       }


        else if (isset($_POST['tbl29_save'])) 
        { 
          $Province=$_POST['Province'];
          $Name_of_Protected_Area=$_POST['Name_of_Protected_Area'];
          $Name_of_PACBRMA_holder=$_POST['Name_of_PACBRMA_holder'];
          $Location_of_CBP_area=$_POST['Location_of_CBP_area'];
          $Area_ha=$_POST['Area_ha'];

 
          
          mysqli_query($conn,"INSERT into existing_protection_area_community_brma(Province,Name_of_Protected_Area,Name_of_PACBRMA_holder,Location_of_CBP_area,Area_ha)
          values('$Province','$Name_of_Protected_Area','$Name_of_PACBRMA_holder','$Location_of_CBP_area','$Area_ha')");
           echo "<script>alert('Success! New Record Created.'); window.location='Existing-PACBRMA'</script>";
       }


        else if (isset($_POST['tbl30_save'])) 
        { 
          $Penro=$_POST['Penro'];
          $Cenro=$_POST['Cenro'];
          $Name_of_leasee=$_POST['Name_of_leasee'];
          $Area_ha=$_POST['Area_ha'];
          $Area_planted_ha=$_POST['Area_planted_ha'];
          $Status=$_POST['Status'];
          
          mysqli_query($conn,"INSERT into existing_sifma(Penro,Cenro,Name_of_leasee,Area_ha,Area_planted_ha,Status)
          values('$Penro','$Cenro','$Name_of_leasee','$Area_ha','$Area_planted_ha','$Status')");
           echo "<script>alert('Success! New Record Created.'); window.location='Existing-SIFMA'</script>";
       }


        else if (isset($_POST['tbl31_save'])) 
        { 
          $Penro=$_POST['Penro'];
          $Cenro=$_POST['Cenro'];
          $Location=$_POST['Location'];
          $Name_of_Permittee=$_POST['Name_of_Permittee'];
          $Type_of_slup=$_POST['Type_of_slup'];
          $Area_ha=$_POST['Area_ha'];
          $Status=$_POST['Status'];
          
          mysqli_query($conn,"INSERT into existing_slup(Penro,Cenro,Location,Name_of_Permittee,Type_of_slup,Area_ha,Status)
          values('$Penro','$Cenro','$Location','$Name_of_Permittee','$Type_of_slup','$Area_ha','$Status')");
           echo "<script>alert('Success! New Record Created.'); window.location='Existing-SLUP'</script>";
       }


        else if (isset($_POST['tbl32_save'])) 
        { 
          $Penro=$_POST['Penro'];
          $Cenro=$_POST['Cenro'];
          $Name_of_holder=$_POST['Name_of_holder'];
          $Location=$_POST['Location'];
          $Area_ha=$_POST['Area_ha'];
          $Status=$_POST['Status'];
          
          mysqli_query($conn,"INSERT into existing_tfla(Penro,Cenro,Name_of_holder,Location,Area_ha,Status)
          values('$Penro','$Cenro','$Name_of_holder','$Location','$Area_ha','$Status')");
           echo "<script>alert('Success! New Record Created.'); window.location='Existing-TFLA'</script>";
       }


        else if (isset($_POST['tbl33_save'])) 
        { 
          $Penro_Cenro=$_POST['Penro_Cenro'];
          $Area_ha=$_POST['Area_ha'];
          $Length_m=$_POST['Length_m'];
          $Year=$_POST['Year'];

          
          mysqli_query($conn,"INSERT into fireline_maintained(Penro_Cenro,Area_ha,Length_m,Year)
          values('$Penro_Cenro','$Area_ha','$Length_m','$Year')");
           echo "<script>alert('Success! New Record Created.'); window.location='Fireline-Maintained'</script>";
       }


        else if (isset($_POST['tbl34_save'])) 
        { 
          $Province=$_POST['Province'];   
          $Close=$_POST['Close'];
          $Open=$_POST['Open'];
          $Mangrove=$_POST['Mangrove'];
          $Total= $Close + $Open + $Mangrove;
          
          mysqli_query($conn,"INSERT into forest_cover(Province,Close,Open,Mangrove,Total)
          values('$Province','$Close','$Open','$Mangrove','$Total')");
           echo "<script>alert('Success! New Record Created.'); window.location='Forest-Cover'</script>";
       }

        else if (isset($_POST['tbl35_save'])) 
        { 
          $Province=$_POST['Province'];
          $City_Municipality=$_POST['City_Municipality'];
          $Flup_Formulated=$_POST['Flup_Formulated'];
          $Flup_Adopted=$_POST['Flup_Adopted'];
          $Total_Forestland_with_LGU=$_POST['Total_Forestland_with_LGU'];
          $Total_Area_For_Flup=$_POST['Total_Area_For_Flup'];

          
          mysqli_query($conn,"INSERT into Forest_land_upfa(Province,City_Municipality,Flup_Formulated,Flup_Adopted,Total_Forestland_with_LGU,Total_Area_For_Flup)
          values('$Province','$City_Municipality','$Flup_Formulated','$Flup_Adopted','$Total_Forestland_with_LGU','$Total_Forestland_with_LGU')");
           echo "<script>alert('Success! New Record Created.'); window.location='Forest-land-UPFA'</script>";
       }

        else if(isset($_POST['tbl36_save'])) 
        { 
          $Forest_Protection_Officers_PEO=$_POST['Forest_Protection_Officers_PEO'];
          $Number_of_FPos_Peos_hired=$_POST['Number_of_FPos_Peos_hired'];
          $Year=$_POST['Year'];

          
  mysqli_query($conn,"INSERT into Forest_protection_officers_peo(Forest_Protection_Officers_PEO,Number_of_FPos_Peos_hired,Year)
          values('$Forest_Protection_Officers_PEO','$Number_of_FPos_Peos_hired','$Year')");
           echo "<script>alert('Success! New Record Created.'); window.location='Forest-Protection-Officers-Peo'</script>";
       }

        else if(isset($_POST['tbl37_save'])) 
        { 
          $Province=$_POST['Province'];
          $Target=$_POST['Target'];
          $Accomplishment_ha=$_POST['Accomplishment_ha'];
          $Accomplishment_percent=$_POST['Accomplishment_percent'];
          $Year=$_POST['Year'];

          
            mysqli_query($conn,"INSERT into Inremp_natural_resource_management_area_developed(Province,Target,Accomplishment_ha,Accomplishment_percent,Year)
          values('$Province','$Target','$Accomplishment_ha','$Accomplishment_percent','$Year')");
           echo "<script>alert('Success! New Record Created.'); window.location='INREMP-Natural-Resource-Management'</script>";
       }

        else if(isset($_POST['tbl38_save'])) 
        { 
          $Province=$_POST['Province'];
          $Name_of_watershed=$_POST['Name_of_watershed'];
          $City_Municipality=$_POST['City_Municipality'];
          $Area_ha=$_POST['Area_ha'];
          $Year=$_POST['Year'];

          
            mysqli_query($conn,"INSERT into Inregrated_watershed_management_plan_prepared(Province,Name_of_watershed,City_Municipality,Area_ha,Year)
          values('$Province','$Name_of_watershed','$City_Municipality','$Area_ha','$Year')");
           echo "<script>alert('Success! New Record Created.'); window.location='Integrated-Watershed-MPP'</script>";
       }

        else if(isset($_POST['tbl39_save'])) 
        { 
          $Province=$_POST['Province'];
          $No_of_CWR_holders=$_POST['No_of_CWR_holders'];
          $Year=$_POST['Year'];
          
            mysqli_query($conn,"INSERT into Inventory_of_CWR_Monitored(Province,No_of_CWR_holders,Year)
          values('$Province','$No_of_CWR_holders','$Year')");
           echo "<script>alert('Success! New Record Created.'); window.location='Inventory-of-CWR-Monitored'</script>";
       }

        else if(isset($_POST['tbl40_save'])) 
        { 
          $Province=$_POST['Province'];
          $Key_Biodiversity_areas=$_POST['Key_Biodiversity_areas'];
          $Area_ha=$_POST['Area_ha'];
          $Legal_basis=$_POST['Legal_basis'];
          
            mysqli_query($conn,"INSERT into key_biodiversity_areas(Province,Key_Biodiversity_areas,Area_ha,Legal_basis)
          values('$Province','$Key_Biodiversity_areas','$Area_ha','$Legal_basis')");
           echo "<script>alert('Success! New Record Created.'); window.location='Key-Biodiversity-Areas'</script>";
       }

        else if(isset($_POST['tbl41_save'])) 
        { 
          $Province=$_POST['Province'];
          $Total_land_area=$_POST['Total_land_area'];
          $Certified_alienable_and_Disposable_land=$_POST['Certified_alienable_and_Disposable_land'];
          $Total_forestland=$_POST['Total_forestland'];
          $Unclassified_forestland=$_POST['Unclassified_forestland'];
          $total_classified_forestland=$_POST['total_classified_forestland'];
          $Established_forest_reserves=$_POST['Established_forest_reserves'];
          $Established_timberland=$_POST['Established_timberland'];
          $National_parks_and_grbs_wa=$_POST['National_parks_and_grbs_wa'];
          $Military_and_naval_reservations=$_POST['Military_and_naval_reservations'];
          $civil_reservations=$_POST['civil_reservations'];
          $fishpond=$_POST['fishpond'];
          
          
            mysqli_query($conn,"INSERT into Land_Classification_and_Distribution(Province,Total_land_area,Certified_alienable_and_Disposable_land,Total_forestland,Unclassified_forestland,total_classified_forestland,Established_forest_reserves,Established_timberland,National_parks_and_grbs_wa,Military_and_naval_reservations,civil_reservations,fishpond)
          values('$Province','$Total_land_area','$Certified_alienable_and_Disposable_land','$Total_forestland','$Unclassified_forestland','$total_classified_forestland','$Established_forest_reserves','$Established_timberland','$National_parks_and_grbs_wa','$Military_and_naval_reservations','$civil_reservations','$fishpond')");
           echo "<script>alert('Success! New Record Created.'); window.location='Land-Classification-and-Distribution'</script>";
       }

        else if (isset($_POST['tbl42_save'])) 
        { 
          $Province=$_POST['Province'];
          $Total_Residential_Patents_Issued_Patents_issued_no=$_POST['Total_Residential_Patents_Issued_Patents_issued_no'];
          $Total_Residential_Patents_Issued_Lot_ha=$_POST['Total_Residential_Patents_Issued_Lot_ha'];
          $Total_Agricultural_Patents_Issued_Patents_issued_no=$_POST['Total_Agricultural_Patents_Issued_Patents_issued_no'];
          $Total_Agricultural_Patents_Issued_Lot_ha=$_POST['Total_Agricultural_Patents_Issued_Lot_ha'];
  

          
            mysqli_query($conn,"INSERT into land_disposition_issued(Province,Total_Residential_Patents_Issued_Patents_issued_no,Total_Residential_Patents_Issued_Lot_ha,Total_Agricultural_Patents_Issued_Patents_issued_no,Total_Agricultural_Patents_Issued_Lot_ha)
          values('$Province','$Total_Residential_Patents_Issued_Patents_issued_no','$Total_Residential_Patents_Issued_Lot_ha','$Total_Agricultural_Patents_Issued_Patents_issued_no','$Total_Agricultural_Patents_Issued_Lot_ha')");
           echo "<script>alert('Success! New Record Created.'); window.location='Land-Disposition-Issued'</script>";
       }

        else if (isset($_POST['tbl44_save'])) 
        { 
          $Cenro=$_POST['Cenro'];
          $Number_of_look_out_tower=$_POST['Number_of_look_out_tower'];
          $location=$_POST['location'];

          
          mysqli_query($conn,"INSERT into List_of_checkpoint(Cenro,Number_of_look_out_tower,location)
          values('$Cenro','$Number_of_look_out_tower','$location')");
           echo "<script>alert('Success! New Record Created.'); window.location='List-of-Checkpoint'</script>";
       }



        else if (isset($_POST['tbl45_save'])) 
        { 
          $River_basins=$_POST['River_basins'];
          $area_ha=$_POST['area_ha'];
          $provinces_covered=$_POST['provinces_covered'];
          $city_municipality_covered=$_POST['city_municipality_covered'];
          $river_tributary=$_POST['river_tributary'];
          $outlet=$_POST['outlet'];

          
    mysqli_query($conn,"INSERT into major_river_basins(River_basins,area_ha,provinces_covered,city_municipality_covered,river_tributary,outlet)
          values('$River_basins','$area_ha','$provinces_covered','$city_municipality_covered','$river_tributary','$outlet')");
           echo "<script>alert('Success! New Record Created.'); window.location='Major-River-Basins'</script>";
       }



        else if (isset($_POST['tbl46_save'])) 
        { 
          $Operating_unit=$_POST['Operating_unit'];
          $no_of_foreshore_area=$_POST['no_of_foreshore_area'];
          $area_ha=$_POST['area_ha'];
          $year=$_POST['year'];
          
          mysqli_query($conn,"INSERT into management_of_foreshore_areas_processed_and_endorsed(Operating_unit,no_of_foreshore_area,area_ha,year)
          values('$Operating_unit','$no_of_foreshore_area','$area_ha','$year')");
           echo "<script>alert('Success! New Record Created.'); window.location='Management-of-Foreshore'</script>";
       }


        else if (isset($_POST['tbl47_save'])) 
        { 
          $province=$_POST['province'];
          $area_ha=$_POST['area_ha'];
          $year=$_POST['year'];
      
          
          mysqli_query($conn,"INSERT into ngp_area_planted(province,area_ha,year)
          values('$province','$area_ha','$year')");
           echo "<script>alert('Success! New Record Created.'); window.location='NGP-Area-Planted'</script>";
       }

        else if (isset($_POST['tbl48_save'])) 
        { 
          $province=$_POST['province'];
          $no_of_polygons=$_POST['no_of_polygons'];
          $no_of_sites=$_POST['no_of_sites'];
          $no_of_beneficiaries=$_POST['no_of_beneficiaries'];
      
          
          mysqli_query($conn,"INSERT into ngp_number_of_polygons(province,no_of_polygons,no_of_sites,no_of_beneficiaries)
          values('$province','$no_of_polygons','$no_of_sites','$no_of_beneficiaries')");
           echo "<script>alert('Success! New Record Created.'); window.location='Number-of-Polygons'</script>";
       }

        else if (isset($_POST['tbl49_save'])) 
        { 
          $province=$_POST['province'];
          $number_of_seedlings_planted=$_POST['number_of_seedlings_planted'];
          $year=$_POST['year'];
        
      
          
          mysqli_query($conn,"INSERT into ngp_seedling_planted(province,number_of_seedlings_planted,year)
          values('$province','$number_of_seedlings_planted','$year')");
           echo "<script>alert('Success! New Record Created.'); window.location='Seedling-Planted'</script>";
       }



        else if (isset($_POST['tbl50_save'])) 
        { 
          $province=$_POST['province'];
          $number_of_seedlings_production=$_POST['number_of_seedlings_production'];
          $year=$_POST['year'];
        
      
          
          mysqli_query($conn,"INSERT into ngp_seedling_production(province,number_of_seedlings_production,year)
          values('$province','$number_of_seedlings_production','$year')");
           echo "<script>alert('Success! New Record Created.'); window.location='Seedling-Production'</script>";
       }

        else if (isset($_POST['tbl51_save'])) 
        { 
          $commodity=$_POST['commodity'];
          $number_of_seedlings_planted=$_POST['number_of_seedlings_planted'];
          $year=$_POST['year'];
        
      
          
          mysqli_query($conn,"INSERT into ngp_seedlings_planted_by_commodity(commodity,number_of_seedlings_planted,year)
          values('$commodity','$number_of_seedlings_planted','$year')");
           echo "<script>alert('Success! New Record Created.'); window.location='Seedling-Planted-by-Commodity'</script>";
       }

        else if (isset($_POST['tbl52_save'])) 
        { 
          $penro_cenro_pa=$_POST['penro_cenro_pa'];
          $percentage=$_POST['percentage'];
          $year=$_POST['year'];
        
      
          
          mysqli_query($conn,"INSERT into ngp_survival_rate_percentage(penro_cenro_pa,percentage,year)
          values('$penro_cenro_pa','$percentage','$year')");
           echo "<script>alert('Success! New Record Created.'); window.location='Survival-rate-Percentage'</script>";
       }




        else if (isset($_POST['tbl53_save'])) 
        { 
          $penro_cenro_pa=$_POST['penro_cenro_pa'];
          $area_ha=$_POST['area_ha'];
          $no_of_seedlings_validated=$_POST['no_of_seedlings_validated'];
          $no_of_seedlings_planted=$_POST['no_of_seedlings_planted'];
          $no_of_seedlings_contracted=$_POST['no_of_seedlings_contracted'];
          $survival=$_POST['survival'];
       

          
    mysqli_query($conn,"INSERT into ngp_validated_project_sites(penro_cenro_pa,area_ha,no_of_seedlings_validated,no_of_seedlings_planted,no_of_seedlings_contracted,survival)
          values('$penro_cenro_pa','$area_ha','$no_of_seedlings_validated','$no_of_seedlings_planted','$no_of_seedlings_contracted','$survival')");
           echo "<script>alert('Success! New Record Created.'); window.location='Validated-Project-Sites'</script>";
       }


        else if(isset($_POST['tbl54_save'])) 
        { 
          $location_Province=$_POST['location_Province'];
          $No_of_MPAs=$_POST['No_of_MPAs'];
          $total_area_ha=$_POST['total_area_ha'];
          $year=$_POST['year'];
          $a_status=$_POST['a_status'];

          
            mysqli_query($conn,"INSERT into Nipas_and_locally_managed_marine_protected_areas(location_Province,No_of_MPAs,total_area_ha,year,a_status)
          values('$location_Province','$No_of_MPAs','$total_area_ha','$year','$a_status')");
           echo "<script>alert('Success! New Record Created.'); window.location='NIPAS-and-Locally-Managed-Marine-Protected-Areas'</script>";
       }


        else if(isset($_POST['tbl55_save'])) 
        { 
          $OperatingUnit=$_POST['OperatingUnit'];
          $forest_rangers_no=$_POST['forest_rangers_no'];
          $teams_no=$_POST['teams_no'];
          $year=$_POST['year'];
 

          
            mysqli_query($conn,"INSERT into number_of_forest_ranger(OperatingUnit,forest_rangers_no,teams_no,year)
          values('$OperatingUnit','$forest_rangers_no','$teams_no','$year')");
           echo "<script>alert('Success! New Record Created.'); window.location='Number-of-Forest-Rangers'</script>";
       }


        else if(isset($_POST['tbl56_save'])) 
        { 
          $OperatingUnit=$_POST['OperatingUnit'];
          $No_of_Incidents=$_POST['No_of_Incidents'];
          $Year=$_POST['Year'];
 

          
            mysqli_query($conn,"INSERT into number_of_incidents_on_apprehended(OperatingUnit,No_of_Incidents,Year)
          values('$OperatingUnit','$No_of_Incidents','$Year')");
           echo "<script>alert('Success! New Record Created.'); window.location='Number-of-Incidents-on-Apprehended'</script>";
       }


        else if(isset($_POST['tbl57_save'])) 
        { 
          $waterbodies_by_category=$_POST['waterbodies_by_category'];
          $no_of_waterbodies=$_POST['no_of_waterbodies'];
          $no_classified_waterbodies=$_POST['no_classified_waterbodies'];
          $no_of_unclassified_waterbodies=$_POST['no_of_unclassified_waterbodies'];
 

          
            mysqli_query($conn,"INSERT into number_of_waterbodies(waterbodies_by_category,no_of_waterbodies,no_classified_waterbodies,no_of_unclassified_waterbodies)
          values('$waterbodies_by_category','$no_of_waterbodies','$no_classified_waterbodies','$no_of_unclassified_waterbodies')");
           echo "<script>alert('Success! New Record Created.'); window.location='Number-of-Waterbodies'</script>";
       }

        else if(isset($_POST['tbl58_save'])) 
        { 
          $Province=$_POST['Province'];
          $Name_of_Protected_Area=$_POST['Name_of_Protected_Area'];
          $E_NIPAS_Area_ha=$_POST['E_NIPAS_Area_ha'];
          $PASA_Area_ha=$_POST['PASA_Area_ha'];
          $Category=$_POST['Category'];
          $Terrestrial_ha=$_POST['Terrestrial_ha'];
          $Seascape_ha=$_POST['Seascape_ha'];
          $Mangroves_ha=$_POST['Mangroves_ha'];
          $Forestland_ha=$_POST['Forestland_ha'];
          $Lakes_ha=$_POST['Lakes_ha'];
          $Rivers_ha=$_POST['Rivers_ha'];
          
          
          mysqli_query($conn,"INSERT into proclaimed_propected_areas_under(Province,Name_of_Protected_Area,E_NIPAS_Area_ha,PASA_Area_ha,Category,Terrestrial_ha,Seascape_ha,Mangroves_ha,Forestland_ha,Lakes_ha,Rivers_ha)
          values('$Province','$Name_of_Protected_Area','$E_NIPAS_Area_ha','$PASA_Area_ha','$Category','$Terrestrial_ha','$Seascape_ha','$Mangroves_ha','$Forestland_ha','$Lakes_ha','$Rivers_ha')");
           echo "<script>alert('Success! New Record Created.'); window.location='Proclaimed-Protected-Areas-under-E-NIPAS'</script>";
       }




        else if (isset($_POST['tbl59_save'])) 
        { 
          $Province=$_POST['Province'];
          $Name_of_protected_area=$_POST['Name_of_protected_area'];
          $Location=$_POST['Location'];
          $Pa=$_POST['Pa'];
          $Bufferzone=$_POST['Bufferzone'];
          $Proclamation_no_date=$_POST['Proclamation_no_date'];
          $Legislation_no_date=$_POST['Legislation_no_date'];
          $Total_area_ha = $Pa + $Bufferzone;
          


          mysqli_query($conn,"INSERT into Proclaimed_Protected_Areas_under_NIPAS(Province,Name_of_protected_area,Location,Pa,Bufferzone,Proclamation_no_date,Legislation_no_date,Total_area_ha)values('$Province','$Name_of_protected_area','$Location','$Pa','$Bufferzone','$Proclamation_no_date','$Legislation_no_date','$Total_area_ha')");
           echo "<script>alert('Success! New Record Created.'); window.location='Proclaimed-Protected-Areas-under-NIPAS'</script>";
       }


        else if (isset($_POST['tbl60_save'])) 
        { 
          $OperatingUnit=$_POST['OperatingUnit'];
          $No_of_CBFMA=$_POST['No_of_CBFMA'];
          $CBFMA_With_No_CRMF=$_POST['CBFMA_With_No_CRMF'];
          $CBFMA_With_CRMF_Needs_Updating=$_POST['CBFMA_With_CRMF_Needs_Updating'];
          $CBFMA_With_Updated_CRMF=$_POST['CBFMA_With_Updated_CRMF'];
          $CBFMA_With_Affirmed_CRMF=$_POST['CBFMA_With_Affirmed_CRMF'];
    

          
    mysqli_query($conn,"INSERT into Status_of_Community_Resource_Management_Framework(OperatingUnit,No_of_CBFMA,CBFMA_With_No_CRMF,CBFMA_With_CRMF_Needs_Updating,CBFMA_With_Updated_CRMF,CBFMA_With_Affirmed_CRMF)
          values('$OperatingUnit','$No_of_CBFMA','$CBFMA_With_No_CRMF','$CBFMA_With_CRMF_Needs_Updating','$CBFMA_With_Updated_CRMF','$CBFMA_With_Affirmed_CRMF')");
           echo "<script>alert('Success! New Record Created.'); window.location='Status-of-Community-Resource-Management-Framework'</script>";
       }


        else if (isset($_POST['tbl61_save'])) 
        { 
          $OperatingUnit=$_POST['OperatingUnit'];
          $No_of_CWR_WFP=$_POST['No_of_CWR_WFP'];
          $Year=$_POST['Year'];
     
          
          mysqli_query($conn,"INSERT into Summary_of_CWR_Monitored(OperatingUnit,No_of_CWR_WFP,Year)
          values('$OperatingUnit','$No_of_CWR_WFP','$Year')");
           echo "<script>alert('Success! New Record Created.'); window.location='Summary-of-CWR-Monitored'</script>";
       }



        else if (isset($_POST['tbl62_save'])) 
        { 
          $Province=$_POST['Province'];
          $Total_Municipality_City=$_POST['Total_Municipality_City'];
          $Municipality_with_Forestland=$_POST['Municipality_with_Forestland'];
          $Accomplishment_Formulation=$_POST['Accomplishment_Formulation'];
          $Accomplishment_Adoption=$_POST['Accomplishment_Adoption'];
          $Baseline_Formulation=$_POST['Baseline_Formulation'];
          $Baseline_Adoption=$_POST['Baseline_Adoption'];

          
    mysqli_query($conn,"INSERT into Summary_of_Forest_Land_Use_Plan_Formulation_and_Adoption(Province,Total_Municipality_City,Municipality_with_Forestland,Accomplishment_Formulation,Accomplishment_Adoption,Baseline_Formulation,Baseline_Adoption)
          values('$Province','$Total_Municipality_City','$Municipality_with_Forestland','$Accomplishment_Formulation','$Accomplishment_Adoption','$Baseline_Formulation','$Baseline_Adoption')");
           echo "<script>alert('Success! New Record Created.'); window.location='Summary-of-Forest-Land-Use-Plan-Formulation-and-Adoption'</script>";
       }


        else if (isset($_POST['tbl63_save'])) 
        { 
          $PENRO=$_POST['PENRO'];
          $Total_Number_of_River_Basin_Watershed_Sub_Watershed=$_POST['Total_Number_of_River_Basin_Watershed_Sub_Watershed'];
          $Status_Profiling_Characterization=$_POST['Status_Profiling_Characterization'];
          $Status_Vulnerability_Assessment=$_POST['Status_Vulnerability_Assessment'];
          $Status_IWMP_Prepared=$_POST['Status_IWMP_Prepared'];
          $Baseline_Profiling_Characterization=$_POST['Baseline_Profiling_Characterization'];
          $Baseline_Vulnerability_Assessment=$_POST['Baseline_Vulnerability_Assessment'];
          $Baseline_IWMP=$_POST['Baseline_IWMP'];

          
            mysqli_query($conn,"INSERT into Summary_of_Watershed_Characterization(PENRO,Total_Number_of_River_Basin_Watershed_Sub_Watershed,Status_Profiling_Characterization,Status_Vulnerability_Assessment,Status_IWMP_Prepared,Baseline_Profiling_Characterization,Baseline_Vulnerability_Assessment,Baseline_IWMP)
          values('$PENRO','$Total_Number_of_River_Basin_Watershed_Sub_Watershed','$Status_Profiling_Characterization','$Status_Vulnerability_Assessment','$Status_IWMP_Prepared','$Baseline_Profiling_Characterization','$Baseline_Vulnerability_Assessment','$Baseline_IWMP')");
           echo "<script>alert('Success! New Record Created.'); window.location='Summary-of-Watershed-Characterization-VA-an-IWMP'</script>";
       }



        else if (isset($_POST['tbl64_save'])) 
        { 
          $Tenurial_Instruments=$_POST['Tenurial_Instruments'];
          $No_of_Holders=$_POST['No_of_Holders'];
          $Area_ha=$_POST['Area_ha'];

          
          mysqli_query($conn,"INSERT into Tenurial_Instruments(Tenurial_Instruments,No_of_Holders,Area_ha)
          values('$Tenurial_Instruments','$No_of_Holders','$Area_ha')");
           echo "<script>alert('Success! New Record Created.'); window.location='Tenurial-Instruments'</script>";
       }


        else if(isset($_POST['tbl65_save'])) 
        { 
          $Year=$_POST['Year'];
          $Province=$_POST['Province'];
          $Name_of_Watershed=$_POST['Name_of_Watershed'];
          $City_Municipality_Barangay=$_POST['City_Municipality_Barangay'];
          $Area_ha=$_POST['Area_ha'];

          
            mysqli_query($conn,"INSERT into watershed_characterization_profiling(Year,Province,Name_of_Watershed,City_Municipality_Barangay,Area_ha)
          values('$Year','$Province','$Name_of_Watershed','$City_Municipality_Barangay','$Area_ha')");
           echo "<script>alert('Success! New Record Created.'); window.location='Watershed-Characterization-Profiling'</script>";
       }


        else if(isset($_POST['tbl67_save'])) 
        { 
          $Province=$_POST['Province'];
          $Name_of_Watershed=$_POST['Name_of_Watershed'];
          $City_Municiaplity=$_POST['City_Municiaplity'];
          $Area_ha=$_POST['Area_ha'];
          $Proclamation_No=$_POST['Proclamation_No'];
          $Proclamation_Date=$_POST['Proclamation_Date'];

          
            mysqli_query($conn,"INSERT into Watershed_Forest_Reserve_Proclaimed_Watershed(Province,Name_of_Watershed,City_Municiaplity,Area_ha,Proclamation_No,Proclamation_Date)
          values('$Province','$Name_of_Watershed','$City_Municiaplity','$Area_ha','$Proclamation_No','$Proclamation_Date')");
           echo "<script>alert('Success! New Record Created.'); window.location='Watershed-Forest-Reserve-Proclaimed-Watershed'</script>";
       }


        else if(isset($_POST['tbl68_save'])) 
        { 
          $Name_of_Watershed=$_POST['Name_of_Watershed'];
          $Regional_Irrigation_System_RIS=$_POST['Regional_Irrigation_System_RIS'];
          $Province=$_POST['Province'];
          $Municipality=$_POST['Municipality'];
          $Watershed_Area_ha=$_POST['Watershed_Area_ha'];
          $RIS_Service_Area_ha=$_POST['RIS_Service_Area_ha'];

          
            mysqli_query($conn,"INSERT into Watershed_Supporting_River_Irrigation_System_of_NIA(Name_of_Watershed,Regional_Irrigation_System_RIS,Province,Municipality,Watershed_Area_ha,RIS_Service_Area_ha)
          values('$Name_of_Watershed','$Regional_Irrigation_System_RIS','$Province','$Municipality','$Watershed_Area_ha','$RIS_Service_Area_ha')");
           echo "<script>alert('Success! New Record Created.'); window.location='Watershed-Supporting-River-Irrigation-System-of-NIA'</script>";
       }



        else if(isset($_POST['tbl69_save'])) 
        { 
          $Year=$_POST['Year'];
          $Province=$_POST['Province'];
          $Name_of_Watershed=$_POST['Name_of_Watershed'];
          $City_Municipality_Barangay=$_POST['City_Municipality_Barangay'];
          $Area_ha=$_POST['Area_ha'];
      
        
            mysqli_query($conn,"INSERT into Watershed_Vulnerability_Assessment(Year,Province,Name_of_Watershed,City_Municipality_Barangay,Area_ha)
          values('$Year','$Province','$Name_of_Watershed','$City_Municipality_Barangay','$Area_ha')");
           echo "<script>alert('Success! New Record Created.'); window.location='Watershed-Vulnerability-Assessment'</script>";
       }


      ?> 
      
  