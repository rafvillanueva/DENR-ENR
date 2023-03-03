
<?php
include('../../config/dbcon.php');

    $result = mysqli_query($conn,"SELECT sum(Pa) FROM Proclaimed_Protected_Areas_under_NIPAS") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show1=number_format($rows['sum(Pa)']);
        }

    $result = mysqli_query($conn,"SELECT sum(Bufferzone) FROM Proclaimed_Protected_Areas_under_NIPAS") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show2=number_format($rows['sum(Bufferzone)']);
        }

     $result = mysqli_query($conn,"SELECT sum(Total_area_ha) FROM Proclaimed_Protected_Areas_under_NIPAS") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show3=number_format($rows['sum(Total_area_ha)']);
        }



?>

<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=Proclaimed Protected Areas under NIPAS Region 10.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	$output .="
		<table>
			<h2 style='color:#008B8B;'>ENR Profile : Proclaimed Protected Areas under NIPAS, Region 10</h2>
			<thead> <br>
				<tr style='color:#008B8B;'>
					<th><h3>Province</h3></th>
					<th><h3>Name of Protected Area</h3></th>
					<th><h3>Location</h3></th>
					<th><h3>PA Area(ha)</h3></th>
					<th><h3>Bufferzone Area(ha)</h3></th>
					<th><h3>Total Area(ha)</h3></th>
					<th><h3>Proclamation No.(Date)</h3></th>
					<th><h3>Legislation No.(Date)</h3></th>
				</tr>

				<tr>
					<th>Regional Total</th>
					<th></th>
					<th></th>
					<th>".$show1."</th>
					<th>".$show2."</th>
					<th>".$show3."</th>
					<th></th>
					<th></th>
				</tr>
			<tbody>
	";


	$query = $conn->query("SELECT * FROM `Proclaimed_Protected_Areas_under_NIPAS` order by Province asc") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['Province']."</center></td>
					<td><center>".$fetch['Name_of_protected_area']."</center></td>
					<td><center>".$fetch['Location']."</center></td>
					<td><center>".number_format($fetch['Pa'])."</center></td>
					<td><center>".number_format($fetch['Bufferzone'])."</center></td>
					<td><center>".number_format($fetch['Total_area_ha'])."</center></td>
					<td><center>".$fetch['Proclamation_no_date']."</center></td>
					<td><center>".$fetch['Legislation_no_date']."</center></td>
				</tr>
	";
	}


	




	$output .="
			</tbody>
			
		</table>
	";
	
	echo $output;
	
	
?>