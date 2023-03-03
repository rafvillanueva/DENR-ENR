
<?php
include('../../config/dbcon.php');
?>

<?php
    $result = mysqli_query($conn,"SELECT sum(Flup_Formulated) FROM Forest_land_upfa") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Regional_1=number_format($rows['sum(Flup_Formulated)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Flup_Adopted) FROM Forest_land_upfa") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Regional_2=number_format($rows['sum(Flup_Adopted)']);
        }

    $result = mysqli_query($conn,"SELECT sum(Total_Forestland_with_LGU) FROM Forest_land_upfa") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Regional_3=number_format($rows['sum(Total_Forestland_with_LGU)']);
        }

    $result = mysqli_query($conn,"SELECT sum(Total_Area_For_Flup) FROM Forest_land_upfa") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Regional_4=number_format($rows['sum(Total_Area_For_Flup)']);
        }





    $result = mysqli_query($conn,"SELECT sum(Flup_Formulated) FROM Forest_land_upfa where Province='Bukidnon'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$B_1=number_format($rows['sum(Flup_Formulated)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Flup_Adopted) FROM Forest_land_upfa where Province='Bukidnon'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$B_2=number_format($rows['sum(Flup_Adopted)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Total_Forestland_with_LGU) FROM Forest_land_upfa where Province='Bukidnon'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$B_3=number_format($rows['sum(Total_Forestland_with_LGU)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Total_Area_For_Flup) FROM Forest_land_upfa where Province='Bukidnon'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$B_4=number_format($rows['sum(Total_Area_For_Flup)']);
        }





    $result = mysqli_query($conn,"SELECT sum(Flup_Formulated) FROM Forest_land_upfa where Province='Camiguin'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$C_1=number_format($rows['sum(Flup_Formulated)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Flup_Adopted) FROM Forest_land_upfa where Province='Camiguin'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$C_2=number_format($rows['sum(Flup_Adopted)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Total_Forestland_with_LGU) FROM Forest_land_upfa where Province='Camiguin'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$C_3=number_format($rows['sum(Total_Forestland_with_LGU)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Total_Area_For_Flup) FROM Forest_land_upfa where Province='Camiguin'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$C_4=number_format($rows['sum(Total_Area_For_Flup)']);
        }





    $result = mysqli_query($conn,"SELECT sum(Flup_Formulated) FROM Forest_land_upfa where Province='Lanao del Norte'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lanao_1=number_format($rows['sum(Flup_Formulated)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Flup_Adopted) FROM Forest_land_upfa where Province='Lanao del Norte'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lanao_2=number_format($rows['sum(Flup_Adopted)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Total_Forestland_with_LGU) FROM Forest_land_upfa where Province='Lanao del Norte'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lanao_3=number_format($rows['sum(Total_Forestland_with_LGU)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Total_Area_For_Flup) FROM Forest_land_upfa where Province='Lanao del Norte'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lanao_4=number_format($rows['sum(Total_Area_For_Flup)']);
        }





    $result = mysqli_query($conn,"SELECT sum(Flup_Formulated) FROM Forest_land_upfa where Province='Misamis Occidental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Missocc_1=number_format($rows['sum(Flup_Formulated)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Flup_Adopted) FROM Forest_land_upfa where Province='Misamis Occidental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Missocc_2=number_format($rows['sum(Flup_Adopted)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Total_Forestland_with_LGU) FROM Forest_land_upfa where Province='Misamis Occidental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Missocc_3=number_format($rows['sum(Total_Forestland_with_LGU)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Total_Area_For_Flup) FROM Forest_land_upfa where Province='Misamis Occidental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Missocc_4=number_format($rows['sum(Total_Area_For_Flup)']);
        }



    $result = mysqli_query($conn,"SELECT sum(Flup_Formulated) FROM Forest_land_upfa where Province='Misamis Oriental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Missor_1=number_format($rows['sum(Flup_Formulated)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Flup_Adopted) FROM Forest_land_upfa where Province='Misamis Oriental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Missor_2=number_format($rows['sum(Flup_Adopted)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Total_Forestland_with_LGU) FROM Forest_land_upfa where Province='Misamis Oriental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Missor_3=number_format($rows['sum(Total_Forestland_with_LGU)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Total_Area_For_Flup) FROM Forest_land_upfa where Province='Misamis Oriental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Missor_4=number_format($rows['sum(Total_Area_For_Flup)']);
        }



?>





<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=Forest Land Use Plan Formulation and Adoption / All Province.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	$output .="
		<table>
			<h2 style='color:#008B8B;'>ENR Profile : Forest Land Use Plan Formulation and Adoption / All Province, Region 10</h2>
			<thead>
				<tr style='color:#008B8B;'>
					<th><h3>Province</h3></th>
					<th><h3>City/Municipality</h3></th>
					<th><h3>FLUP Formulated</h3></th>
					<th><h3>FLUP Adopted</h3></th>				
					<th><h3>Total Forestland within LGU(ha)</h3></th>	
					<th><h3>Total Area for FLUP(ha)</h3></th>
				</tr>

				<tr>
					<th>Regional Total</th>
					<th></th>
					<th>".$Regional_1."</th>
					<th>".$Regional_2."</th>			
					<th>".$Regional_3."</th>
					<th>".$Regional_4."</th>
					
				</tr>

			<tbody>
	";
	

		
	$output .= "
				<tr>
					<td><center><b>Bukidnon</b></center></td>
					<th></th>
					<th>".$B_1."</th>
					<th>".$B_2."</th>
					<th>".$B_3."</th>
					<th>".$B_4."</th>
				</tr>
	";


	$query = $conn->query("SELECT * FROM `Forest_land_upfa` Where Province='Bukidnon' ORDER BY City_Municipality ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td></td>
					<td><center>".$fetch['City_Municipality']."</center></td>
					<td><center>".$fetch['Flup_Formulated']."</center></td>
					<td><center>".$fetch['Flup_Adopted']."</center></td>
					<td><center>".$fetch['Total_Forestland_with_LGU']."</center></td>
					<td><center>".$fetch['Total_Area_For_Flup']."</center></td>
					
				</tr>
	";
	}


	$output .= "
				<tr>
					<td><center><b>Camiguin</b></center></td>
					<th></th>
					<th>".$C_1."</th>
					<th>".$C_2."</th>
					<th>".$C_3."</th>
					<th>".$C_4."</th>
				</tr>
	";




	$query = $conn->query("SELECT * FROM `Forest_land_upfa` Where Province='Camiguin' ORDER BY City_Municipality ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td></td>
					<td><center>".$fetch['City_Municipality']."</center></td>
					<td><center>".$fetch['Flup_Formulated']."</center></td>
					<td><center>".$fetch['Flup_Adopted']."</center></td>
					<td><center>".$fetch['Total_Forestland_with_LGU']."</center></td>
					<td><center>".$fetch['Total_Area_For_Flup']."</center></td>
					
				</tr>
	";
	}





	$output .= "
				<tr>
					<td><center><b>Lanao del Norte</b></center></td>
					<th></th>
					<th>".$Lanao_1."</th>
					<th>".$Lanao_2."</th>
					<th>".$Lanao_3."</th>
					<th>".$Lanao_4."</th>
				</tr>
	";



	$query = $conn->query("SELECT * FROM `Forest_land_upfa` Where Province='Lanao del Norte' ORDER BY City_Municipality ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td></td>
					<td><center>".$fetch['City_Municipality']."</center></td>
					<td><center>".$fetch['Flup_Formulated']."</center></td>
					<td><center>".$fetch['Flup_Adopted']."</center></td>
					<td><center>".$fetch['Total_Forestland_with_LGU']."</center></td>
					<td><center>".$fetch['Total_Area_For_Flup']."</center></td>
					
				</tr>
	";
	}






	$output .= "
				<tr>
					<td><center><b>Misamis Occidental</b></center></td>
					<th></th>
					<th>".$Missocc_1."</th>
					<th>".$Missocc_2."</th>
					<th>".$Missocc_3."</th>
					<th>".$Missocc_4."</th>
				</tr>
	";




	$query = $conn->query("SELECT * FROM `Forest_land_upfa` Where Province='Misamis Occidental' ORDER BY City_Municipality ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td></td>
					<td><center>".$fetch['City_Municipality']."</center></td>
					<td><center>".$fetch['Flup_Formulated']."</center></td>
					<td><center>".$fetch['Flup_Adopted']."</center></td>
					<td><center>".$fetch['Total_Forestland_with_LGU']."</center></td>
					<td><center>".$fetch['Total_Area_For_Flup']."</center></td>
					
				</tr>
	";
	}




	$output .= "
				<tr>
					<td><center><b>Misamis Oriental</b></center></td>
					<th></th>
					<th>".$Missor_1."</th>
					<th>".$Missor_2."</th>
					<th>".$Missor_3."</th>
					<th>".$Missor_4."</th>
					
				</tr>
	";


	$query = $conn->query("SELECT * FROM `Forest_land_upfa` Where Province='Misamis Oriental' ORDER BY City_Municipality ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td></td>
					<td><center>".$fetch['City_Municipality']."</center></td>
					<td><center>".$fetch['Flup_Formulated']."</center></td>
					<td><center>".$fetch['Flup_Adopted']."</center></td>
					<td><center>".$fetch['Total_Forestland_with_LGU']."</center></td>
					<td><center>".$fetch['Total_Area_For_Flup']."</center></td>
					
				</tr>
	";
	}



	
	$output .="
			</tbody>
			
		</table>
	";
	
	echo $output;
	
	
?>