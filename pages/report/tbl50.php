
<?php
include('../../config/dbcon.php');

    $result = mysqli_query($conn,"SELECT sum(number_of_seedlings_production) FROM ngp_seedling_production") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show1=number_format($rows['sum(number_of_seedlings_production)']);
        }



    $result = mysqli_query($conn,"SELECT sum(number_of_seedlings_production) FROM ngp_seedling_production WHERE province='Bukidnon'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$B_show1=number_format($rows['sum(number_of_seedlings_production)']);
        }




    $result = mysqli_query($conn,"SELECT sum(number_of_seedlings_production) FROM ngp_seedling_production WHERE province='Camiguin'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$C_show1=number_format($rows['sum(number_of_seedlings_production)']);
        }



    $result = mysqli_query($conn,"SELECT sum(number_of_seedlings_production) FROM ngp_seedling_production WHERE province='Lanao del Norte'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lanao_show1=number_format($rows['sum(number_of_seedlings_production)']);
        }



    $result = mysqli_query($conn,"SELECT sum(number_of_seedlings_production) FROM ngp_seedling_production WHERE province='Lake Lanao WPDP'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Lake_show1=number_format($rows['sum(number_of_seedlings_production)']);
        }



    $result = mysqli_query($conn,"SELECT sum(number_of_seedlings_production) FROM ngp_seedling_production WHERE province='Misamis Occidental '") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misocc_show1=number_format($rows['sum(number_of_seedlings_production)']);
        }



    $result = mysqli_query($conn,"SELECT sum(number_of_seedlings_production) FROM ngp_seedling_production WHERE province='Misamis Oriental'") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Misor_show1=number_format($rows['sum(number_of_seedlings_production)']);
        }





?>

<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=NGP: Seedling Production By Year.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	$output .="
		<table>
			<h3 style='color:#008B8B;'>ENR Profile :  NGP: Seedling Production, By Year, Region 10</h3>
			<thead> <br>
				<tr style='color:#008B8B;'>
					<th><h3>Province</h3></th>
					<th><h3>Number of Seedling Production</h3></th>
					<th><h3>Year</h3></th>	
				</tr>

				<tr>
					<th>Regional Total</th>
					<th>".$show1."</th>
					<td style='font-weight:bold;'><center>----</center></td>
		
					
				</tr>
			<tbody>
	";
	

		
	$output .= "
				<tr>
					<td style='font-weight:bold;'><center>Bukidnon</center></td>
					<td style='font-weight:bold;'><center>".$B_show1."</center></td>	
					<td style='font-weight:bold;'><center>----</center></td>
				</tr>
	";

	$query = $conn->query("SELECT * FROM `ngp_seedling_production` where province='Bukidnon'") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['province']."</center></td>
					<td><center>".$fetch['number_of_seedlings_production']."</center></td>
					<td><center>".$fetch['year']."</center></td>
	
				</tr>
	";
	}
		
	$output .= "
				<tr>
					<td style='font-weight:bold;'><center>Camiguin</center></td>
					<td style='font-weight:bold;'><center>".$C_show1."</center></td>
					<td style='font-weight:bold;'><center>----</center></td>		
				</tr>
	";




	$query = $conn->query("SELECT * FROM `ngp_seedling_production` where province='Camiguin'") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['province']."</center></td>
					<td><center>".$fetch['number_of_seedlings_production']."</center></td>
					<td><center>".$fetch['year']."</center></td>
	
				</tr>
	";
	}





	$output .= "
				<tr>
					<td style='font-weight:bold;'><center>Lanao del Norte</center></td>
					<td style='font-weight:bold;'><center>".$Lanao_show1."</center></td>
					<td style='font-weight:bold;'><center>----</center></td>		
				</tr>
	";



	$query = $conn->query("SELECT * FROM `ngp_seedling_production` where province='Lanao del Norte'") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['province']."</center></td>
					<td><center>".$fetch['number_of_seedlings_production']."</center></td>
					<td><center>".$fetch['year']."</center></td>
	
				</tr>
	";
	}



		$output .= "
				<tr>
					<td style='font-weight:bold;'><center>Lake Lanao WPDP</center></td>
					<td style='font-weight:bold;'><center>".$Lake_show1."</center></td>
					<td style='font-weight:bold;'><center>----</center></td>			
				</tr>
	";


	$query = $conn->query("SELECT * FROM `ngp_seedling_production` where province='Lake Lanao WPDP'") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['province']."</center></td>
					<td><center>".$fetch['number_of_seedlings_production']."</center></td>
					<td><center>".$fetch['year']."</center></td>
	
				</tr>
	";
	}

	$output .= "
				<tr>
					<td style='font-weight:bold;'><center>Misamis Occidental </center></td>
					<td style='font-weight:bold;'><center>".$Misocc_show1."</center></td>	
					<td style='font-weight:bold;'><center>----</center></td>	
				</tr>
	";



	$query = $conn->query("SELECT * FROM `ngp_seedling_production` where province='Misamis Occidental'") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['province']."</center></td>
					<td><center>".$fetch['number_of_seedlings_production']."</center></td>
					<td><center>".$fetch['year']."</center></td>
	
				</tr>
	";
	}



	$output .= "
				<tr>
					<td style='font-weight:bold;'><center>Misamis Oriental</center></td>
					<td style='font-weight:bold;'><center>".$Misor_show1."</center></td>
					<td style='font-weight:bold;'><center>----</center></td>
	
				</tr>
	";

		$query = $conn->query("SELECT * FROM `ngp_seedling_production` where province='Misamis Oriental'") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['province']."</center></td>
					<td><center>".$fetch['number_of_seedlings_production']."</center></td>
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