
<?php
include('../../config/dbcon.php');
?>






<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=Forest Protection Officers and Program Extension Officers.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	$output .="
		<table>
			<h4 style='color:#008B8B;'>ENR Profile : Forest Protection Officers and Program Extension Officers, Region 10</h4>
			<thead> <br>
				<tr style='color:#008B8B;'>
					<th><h4>Forest Protection Officers and Program Extension Officers</h4></th>
					<th><h4>Number of FPOs/PEOs Hired</h4></th>
					<th><h4>Year</h4></th>
				
				</tr>

			<tbody>
	";
	

	$query = $conn->query("SELECT * FROM `Forest_protection_officers_peo` ORDER BY Year ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['Forest_Protection_Officers_PEO']."</center></td>
					<td><center>".number_format($fetch['Number_of_FPos_Peos_hired'])."</center></td>
					<td><center>".number_format($fetch['Year'])."</center></td>
					
				</tr>
	";
	}



	
	$output .="
			</tbody>
			
		</table>
	";
	
	echo $output;
	
	
?>