
<?php
include('../../config/dbcon.php');
?>

<?php




##########REGIONAL##########

    $result = mysqli_query($conn,"SELECT sum(Total_land_area) FROM Land_Classification_and_Distribution") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$_1=number_format($rows['sum(Total_land_area)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Certified_alienable_and_Disposable_land) FROM Land_Classification_and_Distribution") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$_2=number_format($rows['sum(Certified_alienable_and_Disposable_land)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Total_forestland) FROM Land_Classification_and_Distribution") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$_3=number_format($rows['sum(Total_forestland)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Unclassified_forestland) FROM Land_Classification_and_Distribution") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$_4=number_format($rows['sum(Unclassified_forestland)']);
        }

    $result = mysqli_query($conn,"SELECT sum(total_classified_forestland) FROM Land_Classification_and_Distribution") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$_5=number_format($rows['sum(total_classified_forestland)']);
        }

    $result = mysqli_query($conn,"SELECT sum(Established_forest_reserves) FROM Land_Classification_and_Distribution") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$_6=number_format($rows['sum(Established_forest_reserves)']);
        }

    $result = mysqli_query($conn,"SELECT sum(Established_timberland) FROM Land_Classification_and_Distribution") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$_7=number_format($rows['sum(Established_timberland)']);
        }

    $result = mysqli_query($conn,"SELECT sum(National_parks_and_grbs_wa) FROM Land_Classification_and_Distribution") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$_8=number_format($rows['sum(National_parks_and_grbs_wa)']);
        }

    $result = mysqli_query($conn,"SELECT sum(Military_and_naval_reservations) FROM Land_Classification_and_Distribution") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$_9=number_format($rows['sum(Military_and_naval_reservations)']);
        }

    $result = mysqli_query($conn,"SELECT sum(civil_reservations) FROM Land_Classification_and_Distribution") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$_10=number_format($rows['sum(civil_reservations)']);
        }

    $result = mysqli_query($conn,"SELECT sum(fishpond) FROM Land_Classification_and_Distribution") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$_11=number_format($rows['sum(fishpond)']);
        }








#########################Bukidnon

    $result = mysqli_query($conn,"SELECT sum(Total_land_area) FROM Land_Classification_and_Distribution where Province='Bukidnon'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$B_1=number_format($rows['sum(Total_land_area)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Certified_alienable_and_Disposable_land) FROM Land_Classification_and_Distribution where Province='Bukidnon'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$B_2=number_format($rows['sum(Certified_alienable_and_Disposable_land)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Total_forestland) FROM Land_Classification_and_Distribution where Province='Bukidnon'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$B_3=number_format($rows['sum(Total_forestland)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Unclassified_forestland) FROM Land_Classification_and_Distribution where Province='Bukidnon'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$B_4=number_format($rows['sum(Unclassified_forestland)']);
        }

    $result = mysqli_query($conn,"SELECT sum(total_classified_forestland) FROM Land_Classification_and_Distribution where Province='Bukidnon'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$B_5=number_format($rows['sum(total_classified_forestland)']);
        }

    $result = mysqli_query($conn,"SELECT sum(Established_forest_reserves) FROM Land_Classification_and_Distribution where Province='Bukidnon'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$B_6=number_format($rows['sum(Established_forest_reserves)']);
        }

    $result = mysqli_query($conn,"SELECT sum(Established_timberland) FROM Land_Classification_and_Distribution where Province='Bukidnon'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$B_7=number_format($rows['sum(Established_timberland)']);
        }

    $result = mysqli_query($conn,"SELECT sum(National_parks_and_grbs_wa) FROM Land_Classification_and_Distribution where Province='Bukidnon'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$B_8=number_format($rows['sum(National_parks_and_grbs_wa)']);
        }

    $result = mysqli_query($conn,"SELECT sum(Military_and_naval_reservations) FROM Land_Classification_and_Distribution where Province='Bukidnon'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$B_9=number_format($rows['sum(Military_and_naval_reservations)']);
        }

    $result = mysqli_query($conn,"SELECT sum(civil_reservations) FROM Land_Classification_and_Distribution where Province='Bukidnon'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$B_10=number_format($rows['sum(civil_reservations)']);
        }

    $result = mysqli_query($conn,"SELECT sum(fishpond) FROM Land_Classification_and_Distribution where Province='Bukidnon'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$B_11=number_format($rows['sum(fishpond)']);
        }
##end Bukidnon



##Camiguin
    $result = mysqli_query($conn,"SELECT sum(Total_land_area) FROM Land_Classification_and_Distribution where Province='Camiguin'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$C_1=number_format($rows['sum(Total_land_area)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Certified_alienable_and_Disposable_land) FROM Land_Classification_and_Distribution where Province='Camiguin'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$C_2=number_format($rows['sum(Certified_alienable_and_Disposable_land)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Total_forestland) FROM Land_Classification_and_Distribution where Province='Camiguin'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$C_3=number_format($rows['sum(Total_forestland)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Unclassified_forestland) FROM Land_Classification_and_Distribution where Province='Camiguin'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$C_4=number_format($rows['sum(Unclassified_forestland)']);
        }

    $result = mysqli_query($conn,"SELECT sum(total_classified_forestland) FROM Land_Classification_and_Distribution where Province='Camiguin'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$C_5=number_format($rows['sum(total_classified_forestland)']);
        }

    $result = mysqli_query($conn,"SELECT sum(Established_forest_reserves) FROM Land_Classification_and_Distribution where Province='Camiguin'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$C_6=number_format($rows['sum(Established_forest_reserves)']);
        }

    $result = mysqli_query($conn,"SELECT sum(Established_timberland) FROM Land_Classification_and_Distribution where Province='Camiguin'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$C_7=number_format($rows['sum(Established_timberland)']);
        }

    $result = mysqli_query($conn,"SELECT sum(National_parks_and_grbs_wa) FROM Land_Classification_and_Distribution where Province='Camiguin'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$C_8=number_format($rows['sum(National_parks_and_grbs_wa)']);
        }

    $result = mysqli_query($conn,"SELECT sum(Military_and_naval_reservations) FROM Land_Classification_and_Distribution where Province='Camiguin'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$C_9=number_format($rows['sum(Military_and_naval_reservations)']);
        }

    $result = mysqli_query($conn,"SELECT sum(civil_reservations) FROM Land_Classification_and_Distribution where Province='Camiguin'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$C_10=number_format($rows['sum(civil_reservations)']);
        }

    $result = mysqli_query($conn,"SELECT sum(fishpond) FROM Land_Classification_and_Distribution where Province='Camiguin'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$C_11=number_format($rows['sum(fishpond)']);
}


###END Camiguin 





##Lanao del Norte
    $result = mysqli_query($conn,"SELECT sum(Total_land_area) FROM Land_Classification_and_Distribution where Province='Lanao del Norte'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lanao_1=number_format($rows['sum(Total_land_area)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Certified_alienable_and_Disposable_land) FROM Land_Classification_and_Distribution where Province='Lanao del Norte'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lanao_2=number_format($rows['sum(Certified_alienable_and_Disposable_land)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Total_forestland) FROM Land_Classification_and_Distribution where Province='Lanao del Norte'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lanao_3=number_format($rows['sum(Total_forestland)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Unclassified_forestland) FROM Land_Classification_and_Distribution where Province='Lanao del Norte'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lanao_4=number_format($rows['sum(Unclassified_forestland)']);
        }

    $result = mysqli_query($conn,"SELECT sum(total_classified_forestland) FROM Land_Classification_and_Distribution where Province='Lanao del Norte'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lanao_5=number_format($rows['sum(total_classified_forestland)']);
        }

    $result = mysqli_query($conn,"SELECT sum(Established_forest_reserves) FROM Land_Classification_and_Distribution where Province='Lanao del Norte'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lanao_6=number_format($rows['sum(Established_forest_reserves)']);
        }

    $result = mysqli_query($conn,"SELECT sum(Established_timberland) FROM Land_Classification_and_Distribution where Province='Lanao del Norte'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lanao_7=number_format($rows['sum(Established_timberland)']);
        }

    $result = mysqli_query($conn,"SELECT sum(National_parks_and_grbs_wa) FROM Land_Classification_and_Distribution where Province='Lanao del Norte'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lanao_8=number_format($rows['sum(National_parks_and_grbs_wa)']);
        }

    $result = mysqli_query($conn,"SELECT sum(Military_and_naval_reservations) FROM Land_Classification_and_Distribution where Province='Lanao del Norte'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lanao_9=number_format($rows['sum(Military_and_naval_reservations)']);
        }

    $result = mysqli_query($conn,"SELECT sum(civil_reservations) FROM Land_Classification_and_Distribution where Province='Lanao del Norte'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lanao_10=number_format($rows['sum(civil_reservations)']);
        }

    $result = mysqli_query($conn,"SELECT sum(fishpond) FROM Land_Classification_and_Distribution where Province='Lanao del Norte'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lanao_11=number_format($rows['sum(fishpond)']);
}






##Misamis Occidental 
    $result = mysqli_query($conn,"SELECT sum(Total_land_area) FROM Land_Classification_and_Distribution where Province='Misamis Occidental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misocc_1=number_format($rows['sum(Total_land_area)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Certified_alienable_and_Disposable_land) FROM Land_Classification_and_Distribution where Province='Misamis Occidental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misocc_2=number_format($rows['sum(Certified_alienable_and_Disposable_land)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Total_forestland) FROM Land_Classification_and_Distribution where Province='Misamis Occidental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misocc_3=number_format($rows['sum(Total_forestland)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Unclassified_forestland) FROM Land_Classification_and_Distribution where Province='Misamis Occidental '") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misocc_4=number_format($rows['sum(Unclassified_forestland)']);
        }

    $result = mysqli_query($conn,"SELECT sum(total_classified_forestland) FROM Land_Classification_and_Distribution where Province='Misamis Occidental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misocc_5=number_format($rows['sum(total_classified_forestland)']);
        }

    $result = mysqli_query($conn,"SELECT sum(Established_forest_reserves) FROM Land_Classification_and_Distribution where Province='Misamis Occidental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misocc_6=number_format($rows['sum(Established_forest_reserves)']);
        }

    $result = mysqli_query($conn,"SELECT sum(Established_timberland) FROM Land_Classification_and_Distribution where Province='Misamis Occidental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misocc_7=number_format($rows['sum(Established_timberland)']);
        }

    $result = mysqli_query($conn,"SELECT sum(National_parks_and_grbs_wa) FROM Land_Classification_and_Distribution where Province='Misamis Occidental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misocc_8=number_format($rows['sum(National_parks_and_grbs_wa)']);
        }

    $result = mysqli_query($conn,"SELECT sum(Military_and_naval_reservations) FROM Land_Classification_and_Distribution where Province='Misamis Occidental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misocc_9=number_format($rows['sum(Military_and_naval_reservations)']);
        }

    $result = mysqli_query($conn,"SELECT sum(civil_reservations) FROM Land_Classification_and_Distribution where Province='Misamis Occidental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misocc_10=number_format($rows['sum(civil_reservations)']);
        }

    $result = mysqli_query($conn,"SELECT sum(fishpond) FROM Land_Classification_and_Distribution where Province='Misamis Occidental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misocc_11=number_format($rows['sum(fishpond)']);
}





##Misamis Oriental  
    $result = mysqli_query($conn,"SELECT sum(Total_land_area) FROM Land_Classification_and_Distribution where Province='Misamis Oriental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misor_1=number_format($rows['sum(Total_land_area)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Certified_alienable_and_Disposable_land) FROM Land_Classification_and_Distribution where Province='Misamis Oriental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misor_2=number_format($rows['sum(Certified_alienable_and_Disposable_land)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Total_forestland) FROM Land_Classification_and_Distribution where Province='Misamis Oriental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misor_3=number_format($rows['sum(Total_forestland)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Unclassified_forestland) FROM Land_Classification_and_Distribution where Province='Misamis Oriental '") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misor_4=number_format($rows['sum(Unclassified_forestland)']);
        }

    $result = mysqli_query($conn,"SELECT sum(total_classified_forestland) FROM Land_Classification_and_Distribution where Province='Misamis Oriental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misor_5=number_format($rows['sum(total_classified_forestland)']);
        }

    $result = mysqli_query($conn,"SELECT sum(Established_forest_reserves) FROM Land_Classification_and_Distribution where Province='Misamis Oriental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misor_6=number_format($rows['sum(Established_forest_reserves)']);
        }

    $result = mysqli_query($conn,"SELECT sum(Established_timberland) FROM Land_Classification_and_Distribution where Province='Misamis Oriental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misor_7=number_format($rows['sum(Established_timberland)']);
        }

    $result = mysqli_query($conn,"SELECT sum(National_parks_and_grbs_wa) FROM Land_Classification_and_Distribution where Province='Misamis Oriental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misor_8=number_format($rows['sum(National_parks_and_grbs_wa)']);
        }

    $result = mysqli_query($conn,"SELECT sum(Military_and_naval_reservations) FROM Land_Classification_and_Distribution where Province='Misamis Occidental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misor_9=number_format($rows['sum(Military_and_naval_reservations)']);
        }

    $result = mysqli_query($conn,"SELECT sum(civil_reservations) FROM Land_Classification_and_Distribution where Province='Misamis Oriental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misor_10=number_format($rows['sum(civil_reservations)']);
        }

    $result = mysqli_query($conn,"SELECT sum(fishpond) FROM Land_Classification_and_Distribution where Province='Misamis Oriental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misor_11=number_format($rows['sum(fishpond)']);
}



?>





<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=Land Classification and Distribution in hectares.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	$output .="
		<table>
			<h2 style='color:#008B8B;'>ENR Profile : Land Classification and Distribution in hectares, Region 10</h2>
			<thead>
				<tr style='color:#008B8B;'>
					<th>Province</th>
					<th>Total Land Area</th>
					<th>Certified Alienable and Disposable Land</th>
					<th>Total Forestland</th>
					<th>Unclassified Forestland</th>
					<th>Total Classified Forestland</th>
					<th>Established Forest Reserves</th>
					<th>Established Timberland</th>
					<th>National Parks and GRBS/WA</th>
					<th>Military and Naval Reservations</th>
					<th>Civil Reservations</th>
					<th>Fishpond</th>


				</tr>

			<tbody>
	";

		
	$output .= "
				<tr>
					<td><center><b>Regional Total</b></center></td>
					<td style='font-weight:bold;'><center>".$_1."</center></td>
					<td style='font-weight:bold;'><center>".$_2."</center></td>
					<td style='font-weight:bold;'><center>".$_3."</center></td>
					<td style='font-weight:bold;'><center>".$_4."</center></td>
					<td style='font-weight:bold;'><center>".$_5."</center></td>
					<td style='font-weight:bold;'><center>".$_6."</center></td>
					<td style='font-weight:bold;'><center>".$_7."</center></td>
					<td style='font-weight:bold;'><center>".$_8."</center></td>
					<td style='font-weight:bold;'><center>".$_9."</center></td>
					<td style='font-weight:bold;'><center>".$_10."</center></td>
					<td style='font-weight:bold;'><center>".$_11."</center></td>
				
				
		
				</tr>
	";

		
	$output .= "
				<tr>
					<td><center><b>Bukidnon</b></center></td>
					<td><center>".$B_1."</center></td>
					<td><center>".$B_2."</center></td>
					<td><center>".$B_3."</center></td>
					<td><center>".$B_4."</center></td>
					<td><center>".$B_5."</center></td>
					<td><center>".$B_6."</center></td>
					<td><center>".$B_7."</center></td>
					<td><center>".$B_8."</center></td>
					<td><center>".$B_9."</center></td>
					<td><center>".$B_10."</center></td>
					<td><center>".$B_11."</center></td>
				
				
		
				</tr>
	";


	$output .= "
				<tr>
					<td><center><b>Camiguin</b></center></td>
					<td><center>".$C_1."</center></td>
					<td><center>".$C_2."</center></td>
					<td><center>".$C_3."</center></td>
					<td><center>".$C_4."</center></td>
					<td><center>".$C_5."</center></td>
					<td><center>".$C_6."</center></td>
					<td><center>".$C_7."</center></td>
					<td><center>".$C_8."</center></td>
					<td><center>".$C_9."</center></td>
					<td><center>".$C_10."</center></td>
					<td><center>".$C_11."</center></td>
				
				
		
				</tr>
	";


		$output .= "
				<tr>
					<td><center><b>Lanao del Norte</b></center></td>
					<td><center>".$Lanao_1."</center></td>
					<td><center>".$Lanao_2."</center></td>
					<td><center>".$Lanao_3."</center></td>
					<td><center>".$Lanao_4."</center></td>
					<td><center>".$Lanao_5."</center></td>
					<td><center>".$Lanao_6."</center></td>
					<td><center>".$Lanao_7."</center></td>
					<td><center>".$Lanao_8."</center></td>
					<td><center>".$Lanao_9."</center></td>
					<td><center>".$Lanao_10."</center></td>
					<td><center>".$Lanao_11."</center></td>
				
				
		
				</tr>
	";





		$output .= "
				<tr>
					<td><center><b>Misamis Occidental</b></center></td>
					<td><center>".$Misocc_1."</center></td>
					<td><center>".$Misocc_2."</center></td>
					<td><center>".$Misocc_3."</center></td>
					<td><center>".$Misocc_4."</center></td>
					<td><center>".$Misocc_5."</center></td>
					<td><center>".$Misocc_6."</center></td>
					<td><center>".$Misocc_7."</center></td>
					<td><center>".$Misocc_8."</center></td>
					<td><center>".$Misocc_9."</center></td>
					<td><center>".$Misocc_10."</center></td>
					<td><center>".$Misocc_11."</center></td>
				
				
		
				</tr>
	";




			$output .= "
				<tr>
					<td><center><b>Misamis Oriental</b></center></td>
					<td><center>".$Misor_1."</center></td>
					<td><center>".$Misor_2."</center></td>
					<td><center>".$Misor_3."</center></td>
					<td><center>".$Misor_4."</center></td>
					<td><center>".$Misor_5."</center></td>
					<td><center>".$Misor_6."</center></td>
					<td><center>".$Misor_7."</center></td>
					<td><center>".$Misor_8."</center></td>
					<td><center>".$Misor_9."</center></td>
					<td><center>".$Misor_10."</center></td>
					<td><center>".$Misor_11."</center></td>
				
				
		
				</tr>
	";


	
	$output .="
			</tbody>
			
		</table>
	";
	
	echo $output;
	
	
?>