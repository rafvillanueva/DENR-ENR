
<?php
include('../../config/dbcon.php');

    $result = mysqli_query($conn,"SELECT sum(no_of_waterbodies) FROM number_of_waterbodies") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show1=number_format($rows['sum(no_of_waterbodies)']);
        }

    $result = mysqli_query($conn,"SELECT sum(no_classified_waterbodies) FROM number_of_waterbodies") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show2=number_format($rows['sum(no_classified_waterbodies)']);
        }

     $result = mysqli_query($conn,"SELECT sum(no_of_unclassified_waterbodies) FROM number_of_waterbodies") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show3=number_format($rows['sum(no_of_unclassified_waterbodies)']);
        }




?>

<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=Number of Waterbodies Region 10.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	$output .="
		<table>
			<h2 style='color:#008B8B;'>ENR Profile : Number of Waterbodies, Region 10</h2>
			<thead> <br>
				<tr style='color:#008B8B;'>
					<th><h3>Waterbodies (By Category)</h3></th>
					<th><h3>No. of Waterbodies </h3></th>
					<th><h3>No. Classified Waterbodies</h3></th>	
					<th><h3>No. of Unclassified Waterbodies</h3></th>
				</tr>

				<tr>
					<th>Total Number of Waterbodies</th>
					<th>".$show1."</th>
					<th>".$show2."</th>
					<th>".$show3."</th>

				</tr>
			<tbody>
	";


	$query = $conn->query("SELECT * FROM `number_of_waterbodies` order by waterbodies_by_category asc") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['waterbodies_by_category']."</center></td>
					<td><center>".$fetch['no_of_waterbodies']."</center></td>
					<td><center>".$fetch['no_classified_waterbodies']."</center></td>
					<td><center>".$fetch['no_of_unclassified_waterbodies']."</center></td>
				</tr>
	";
	}


	




	$output .="
			</tbody>
			
		</table>
	";
	
	echo $output;
	
	
?>