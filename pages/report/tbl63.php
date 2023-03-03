
<?php
include('../../config/dbcon.php');
?>

<?php
    $result = mysqli_query($conn,"SELECT sum(Total_Number_of_River_Basin_Watershed_Sub_Watershed) FROM Summary_of_Watershed_Characterization") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show1=number_format($rows['sum(Total_Number_of_River_Basin_Watershed_Sub_Watershed)']);
        }

    $result = mysqli_query($conn,"SELECT sum(Status_Profiling_Characterization) FROM Summary_of_Watershed_Characterization") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show2=number_format($rows['sum(Status_Profiling_Characterization)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Status_Vulnerability_Assessment) FROM Summary_of_Watershed_Characterization") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show3=number_format($rows['sum(Status_Vulnerability_Assessment)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Status_IWMP_Prepared) FROM Summary_of_Watershed_Characterization") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show4=number_format($rows['sum(Status_IWMP_Prepared)']);
        }

    $result = mysqli_query($conn,"SELECT sum(Baseline_Profiling_Characterization) FROM Summary_of_Watershed_Characterization") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show5=number_format($rows['sum(Baseline_Profiling_Characterization)']);
        }


     $result = mysqli_query($conn,"SELECT sum(Baseline_Vulnerability_Assessment) FROM Summary_of_Watershed_Characterization") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show6=number_format($rows['sum(Baseline_Vulnerability_Assessment)']);
        }


     $result = mysqli_query($conn,"SELECT sum(Baseline_IWMP) FROM Summary_of_Watershed_Characterization") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show7=number_format($rows['sum(Baseline_IWMP)']);
        }








    $result = mysqli_query($conn,"SELECT sum(Total_Number_of_River_Basin_Watershed_Sub_Watershed) FROM Summary_of_Watershed_Characterization where PENRO='Bukidnon'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$B_show1=number_format($rows['sum(Total_Number_of_River_Basin_Watershed_Sub_Watershed)']);
        }

    $result = mysqli_query($conn,"SELECT sum(Status_Profiling_Characterization) FROM Summary_of_Watershed_Characterization where PENRO='Bukidnon'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$B_show2=number_format($rows['sum(Status_Profiling_Characterization)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Status_Vulnerability_Assessment) FROM Summary_of_Watershed_Characterization where PENRO='Bukidnon'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$B_show3=number_format($rows['sum(Status_Vulnerability_Assessment)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Status_IWMP_Prepared) FROM Summary_of_Watershed_Characterization where PENRO='Bukidnon'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$B_show4=number_format($rows['sum(Status_IWMP_Prepared)']);
        }

    $result = mysqli_query($conn,"SELECT sum(Baseline_Profiling_Characterization) FROM Summary_of_Watershed_Characterization where PENRO='Bukidnon'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$B_show5=number_format($rows['sum(Baseline_Profiling_Characterization)']);
        }


     $result = mysqli_query($conn,"SELECT sum(Baseline_Vulnerability_Assessment) FROM Summary_of_Watershed_Characterization where PENRO='Bukidnon'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$B_show6=number_format($rows['sum(Baseline_Vulnerability_Assessment)']);
        }


     $result = mysqli_query($conn,"SELECT sum(Baseline_IWMP) FROM Summary_of_Watershed_Characterization where PENRO='Bukidnon'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$B_show7=number_format($rows['sum(Baseline_IWMP)']);
        }






    $result = mysqli_query($conn,"SELECT sum(Total_Number_of_River_Basin_Watershed_Sub_Watershed) FROM Summary_of_Watershed_Characterization where PENRO='Camiguin'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$C_show1=number_format($rows['sum(Total_Number_of_River_Basin_Watershed_Sub_Watershed)']);
        }

    $result = mysqli_query($conn,"SELECT sum(Status_Profiling_Characterization) FROM Summary_of_Watershed_Characterization where PENRO='Camiguin'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$C_show2=number_format($rows['sum(Status_Profiling_Characterization)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Status_Vulnerability_Assessment) FROM Summary_of_Watershed_Characterization where PENRO='Camiguin'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$C_show3=number_format($rows['sum(Status_Vulnerability_Assessment)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Status_IWMP_Prepared) FROM Summary_of_Watershed_Characterization where PENRO='Camiguin'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$C_show4=number_format($rows['sum(Status_IWMP_Prepared)']);
        }

    $result = mysqli_query($conn,"SELECT sum(Baseline_Profiling_Characterization) FROM Summary_of_Watershed_Characterization where PENRO='Camiguin'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$C_show5=number_format($rows['sum(Baseline_Profiling_Characterization)']);
        }


     $result = mysqli_query($conn,"SELECT sum(Baseline_Vulnerability_Assessment) FROM Summary_of_Watershed_Characterization where PENRO='Camiguin'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$C_show6=number_format($rows['sum(Baseline_Vulnerability_Assessment)']);
        }


     $result = mysqli_query($conn,"SELECT sum(Baseline_IWMP) FROM Summary_of_Watershed_Characterization where PENRO='Camiguin'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$C_show7=number_format($rows['sum(Baseline_IWMP)']);
        }






    $result = mysqli_query($conn,"SELECT sum(Total_Number_of_River_Basin_Watershed_Sub_Watershed) FROM Summary_of_Watershed_Characterization where PENRO='Lanao del Norte'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lanao_show1=number_format($rows['sum(Total_Number_of_River_Basin_Watershed_Sub_Watershed)']);
        }

    $result = mysqli_query($conn,"SELECT sum(Status_Profiling_Characterization) FROM Summary_of_Watershed_Characterization where PENRO='Lanao del Norte'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lanao_show2=number_format($rows['sum(Status_Profiling_Characterization)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Status_Vulnerability_Assessment) FROM Summary_of_Watershed_Characterization where PENRO='Lanao del Norte'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lanao_show3=number_format($rows['sum(Status_Vulnerability_Assessment)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Status_IWMP_Prepared) FROM Summary_of_Watershed_Characterization where PENRO='Lanao del Norte'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lanao_show4=number_format($rows['sum(Status_IWMP_Prepared)']);
        }

    $result = mysqli_query($conn,"SELECT sum(Baseline_Profiling_Characterization) FROM Summary_of_Watershed_Characterization where PENRO='Lanao del Norte'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lanao_show5=number_format($rows['sum(Baseline_Profiling_Characterization)']);
        }


     $result = mysqli_query($conn,"SELECT sum(Baseline_Vulnerability_Assessment) FROM Summary_of_Watershed_Characterization where PENRO='Lanao del Norte'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lanao_show6=number_format($rows['sum(Baseline_Vulnerability_Assessment)']);
        }


     $result = mysqli_query($conn,"SELECT sum(Baseline_IWMP) FROM Summary_of_Watershed_Characterization where PENRO='Lanao del Norte'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lanao_show7=number_format($rows['sum(Baseline_IWMP)']);
        }





    $result = mysqli_query($conn,"SELECT sum(Total_Number_of_River_Basin_Watershed_Sub_Watershed) FROM Summary_of_Watershed_Characterization where PENRO='Misamis Occidental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$MisOcc_show1=number_format($rows['sum(Total_Number_of_River_Basin_Watershed_Sub_Watershed)']);
        }

    $result = mysqli_query($conn,"SELECT sum(Status_Profiling_Characterization) FROM Summary_of_Watershed_Characterization where PENRO='Misamis Occidental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$MisOcc_show2=number_format($rows['sum(Status_Profiling_Characterization)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Status_Vulnerability_Assessment) FROM Summary_of_Watershed_Characterization where PENRO='Misamis Occidental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$MisOcc_show3=number_format($rows['sum(Status_Vulnerability_Assessment)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Status_IWMP_Prepared) FROM Summary_of_Watershed_Characterization where PENRO='Misamis Occidental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$MisOcc_show4=number_format($rows['sum(Status_IWMP_Prepared)']);
        }

    $result = mysqli_query($conn,"SELECT sum(Baseline_Profiling_Characterization) FROM Summary_of_Watershed_Characterization where PENRO='Misamis Occidental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$MisOcc_show5=number_format($rows['sum(Baseline_Profiling_Characterization)']);
        }


     $result = mysqli_query($conn,"SELECT sum(Baseline_Vulnerability_Assessment) FROM Summary_of_Watershed_Characterization where PENRO='Misamis Occidental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$MisOcc_show6=number_format($rows['sum(Baseline_Vulnerability_Assessment)']);
        }


     $result = mysqli_query($conn,"SELECT sum(Baseline_IWMP) FROM Summary_of_Watershed_Characterization where PENRO='Misamis Occidental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$MisOcc_show7=number_format($rows['sum(Baseline_IWMP)']);
        }





    $result = mysqli_query($conn,"SELECT sum(Total_Number_of_River_Basin_Watershed_Sub_Watershed) FROM Summary_of_Watershed_Characterization where PENRO='Misamis Oriental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$MisOr_show1=number_format($rows['sum(Total_Number_of_River_Basin_Watershed_Sub_Watershed)']);
        }

    $result = mysqli_query($conn,"SELECT sum(Status_Profiling_Characterization) FROM Summary_of_Watershed_Characterization where PENRO='Misamis Oriental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$MisOr_show2=number_format($rows['sum(Status_Profiling_Characterization)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Status_Vulnerability_Assessment) FROM Summary_of_Watershed_Characterization where PENRO='Misamis Oriental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$MisOr_show3=number_format($rows['sum(Status_Vulnerability_Assessment)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Status_IWMP_Prepared) FROM Summary_of_Watershed_Characterization where PENRO='Misamis Oriental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$MisOr_show4=number_format($rows['sum(Status_IWMP_Prepared)']);
        }

    $result = mysqli_query($conn,"SELECT sum(Baseline_Profiling_Characterization) FROM Summary_of_Watershed_Characterization where PENRO='Misamis Oriental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$MisOr_show5=number_format($rows['sum(Baseline_Profiling_Characterization)']);
        }


     $result = mysqli_query($conn,"SELECT sum(Baseline_Vulnerability_Assessment) FROM Summary_of_Watershed_Characterization where PENRO='Misamis Oriental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$MisOr_show6=number_format($rows['sum(Baseline_Vulnerability_Assessment)']);
        }


     $result = mysqli_query($conn,"SELECT sum(Baseline_IWMP) FROM Summary_of_Watershed_Characterization where PENRO='Misamis Oriental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$MisOr_show7=number_format($rows['sum(Baseline_IWMP)']);
        }



?>


<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=Summary of Watershed Characterization VA and IWMP Region 10.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	$output .="
		<table>
			<h2 style='color:#008B8B;'>ENR Profile : Summary of Watershed Characterization, VA and IWMP Region 10</h2>
			<thead> <br>
				<tr style='color:#008B8B;'>
					<th><h3>PENRO</h3></th>
					<th><h3>Total Number of River Basin/Watershed/Sub-Watershed</h3></th>
					<th><h3>Status Profiling/Characterization</h3></th>
					<th><h3>Status Vulnerability Assessment</h3></th>
					<th><h3>Status IWMP Prepared</h3></th>
					<th><h3>Baseline Profiling/Characterization</h3></th>
					<th><h3>Baseline Vulnerability Assessment</h3></th>
					<th><h3>Baseline IWMP</h3></th>		
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
				</tr>

			<tbody>
	";
	

	$output .= "
				<tr>
					<td><center>Bukidnon</center></td>
					<th>".$B_show1."</th>
					<th>".$B_show2."</th>
					<th>".$B_show3."</th>
					<th>".$B_show4."</th>
					<th>".$B_show5."</th>
					<th>".$B_show6."</th>
					<th>".$B_show7."</th>					
				</tr>
	"; 
	
	$output .= "
				<tr>
					<td><center>Camiguin</center></td>
					<th>".$C_show1."</th>
					<th>".$C_show2."</th>
					<th>".$C_show3."</th>
					<th>".$C_show4."</th>
					<th>".$C_show5."</th>
					<th>".$C_show6."</th>
					<th>".$C_show7."</th>					
				</tr>
	"; 
	

	$output .= "
				<tr>
					<td><center>Lanao del Norte </center></td>
					<th>".$Lanao_show1."</th>
					<th>".$Lanao_show2."</th>
					<th>".$Lanao_show3."</th>
					<th>".$Lanao_show4."</th>
					<th>".$Lanao_show5."</th>
					<th>".$Lanao_show6."</th>
					<th>".$Lanao_show7."</th>					
				</tr>
	"; 



	$output .= "
				<tr>
					<td><center>Misamis Occidental</center></td>
					<th>".$MisOcc_show1."</th>
					<th>".$MisOcc_show2."</th>
					<th>".$MisOcc_show3."</th>
					<th>".$MisOcc_show4."</th>
					<th>".$MisOcc_show5."</th>
					<th>".$MisOcc_show6."</th>
					<th>".$MisOcc_show7."</th>					
				</tr>
	"; 
	
	$output .= "
				<tr>
					<td><center>Misamis Oriental</center></td>
					<th>".$MisOr_show1."</th>
					<th>".$MisOr_show2."</th>
					<th>".$MisOr_show3."</th>
					<th>".$MisOr_show4."</th>
					<th>".$MisOr_show5."</th>
					<th>".$MisOr_show6."</th>
					<th>".$MisOr_show7."</th>					
				</tr>
	"; 
	
	$output .="
			</tbody>
			
		</table>
	";
	
	echo $output;
	
	
?>