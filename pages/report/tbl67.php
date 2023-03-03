
<?php
include('../../config/dbcon.php');

     $result = mysqli_query($conn,"SELECT sum(Area_ha) FROM Watershed_Forest_Reserve_Proclaimed_Watershed") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show1=number_format($rows['sum(Area_ha)']);
        }



?>

<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=Watershed Forest Reserve (Proclaimed Watershed) in hectares Region 10.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	$output .="
		<table>
			<h2 style='color:#008B8B;'>ENR Profile : Watershed Forest Reserve (Proclaimed Watershed) in hectares, Region 10</h2>
			<thead> <br>
				<tr style='color:#008B8B;'>
					<th>Province</th>
					<th>Name of Watershed</th>
					<th>City/Municiaplity</th>
					<th>Area (ha)</th>
					<th>Proclamation No.</th>
					<th>Proclamation Date(mm/dd/yyyy)</th>
				</tr>

				<tr>
					<th>Regional Total</th>		
					<th></th>
					<th></th>
					<th>".$show1."</th>	
					<th></th>
					<th></th>
				</tr>
			<tbody>
	";
	

	$query = $conn->query("SELECT * FROM `Watershed_Forest_Reserve_Proclaimed_Watershed` ORDER BY Province ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['Province']."</center></td>
					<td><center>".$fetch['Name_of_Watershed']."</center></td>
					<td><center>".$fetch['City_Municiaplity']."</center></td>
					<td><center>".$fetch['Area_ha']."</center></td>
					<td><center>".$fetch['Proclamation_No']."</center></td>
					<td><center>".$fetch['Proclamation_Date']."</center></td>
				</tr>
	";
	}


	
	$output .="
			</tbody>
			
		</table>
	";
	
	echo $output;
	
	
?>