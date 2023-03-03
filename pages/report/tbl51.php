
<?php
include('../../config/dbcon.php');

    $result = mysqli_query($conn,"SELECT sum(number_of_seedlings_planted) FROM ngp_seedlings_planted_by_commodity") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show1=number_format($rows['sum(number_of_seedlings_planted)']);
        }



?>

<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=NGP: Seedlings Planted By Commodity.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	$output .="
		<table>
			<h3 style='color:#008B8B;'>ENR Profile :  NGP: Seedlings Planted, By Commodity, Region 10</h3>
			<thead> <br>
				<tr style='color:#008B8B;'>
					<th><h3>Commodity</h3></th>
					<th><h3>No. of Commodity/Seedlings Planted</h3></th>
					<th><h3>Year</h3></th>	
				</tr>

				<tr>
					<th>Total</th>
					<th>".$show1."</th>
					<td style='font-weight:bold;'><center>----</center></td>
		
					
				</tr>
			<tbody>
	";
	



	$query = $conn->query("SELECT * FROM `ngp_seedlings_planted_by_commodity` order by commodity asc") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['commodity']."</center></td>
					<td><center>".$fetch['number_of_seedlings_planted']."</center></td>
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