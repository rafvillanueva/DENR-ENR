
<?php
include('../../config/dbcon.php');

     $result = mysqli_query($conn,"SELECT sum(No_of_Holders) FROM Tenurial_Instruments") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show1=number_format($rows['sum(No_of_Holders)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Area_ha) FROM Tenurial_Instruments") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show2=number_format($rows['sum(Area_ha)']);
        }

?>

<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=Tenurial Instruments Region 10.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	$output .="
		<table>
			<h2 style='color:#008B8B;'>ENR Profile : Tenurial Instruments, Region 10</h2>
			<thead> <br>
				<tr style='color:#008B8B;'>
					<th>Tenurial Instruments</th>
					<th>No. of Holders</th>
					<th>Area (ha)</th>
				</tr>

				<tr>
					<th>Regional Total</th>		
					<th>".$show1."</th>
					<th>".$show2."</th>	
				</tr>
			<tbody>
	";
	

	$query = $conn->query("SELECT * FROM `Tenurial_Instruments` ORDER BY Tenurial_Instruments ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['Tenurial_Instruments']."</center></td>
					<td><center>".$fetch['No_of_Holders']."</center></td>
					<td><center>".$fetch['Area_ha']."</center></td>
				</tr>
	";
	}


	
	$output .="
			</tbody>
			
		</table>
	";
	
	echo $output;
	
	
?>