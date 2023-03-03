
<?php
include('../../config/dbcon.php');
?>

<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=Community-Based Employment (CBEP): Persons Employed.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	$output .="
		<table>
			<h2 style='color:#008B8B;'>ENR Profile : Community-Based Employment (CBEP): Persons Employed, By Province, Region 10</h2>
			<thead> <br>
				<tr style='color:#008B8B;'>
					<th><h3>Province</h3></th>
					<th><h3>Number of Pensons Employed </h3></th>
					<th><h3>Year</h3></th>
				</tr>
			<tbody>
	";
	

	$query = $conn->query("SELECT * FROM `cbep_persons_employed` ORDER by year ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['penro_cenro']."</center></td>
					<td><center>".$fetch['numbers']."</center></td>
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