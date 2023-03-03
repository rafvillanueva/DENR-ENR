
<?php
include('../../config/dbcon.php');
?>

<?php
    $result = mysqli_query($conn,"SELECT sum(Total_Municipality_City) FROM Summary_of_Forest_Land_Use_Plan_Formulation_and_Adoption") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show1=number_format($rows['sum(Total_Municipality_City)']);
        }

    $result = mysqli_query($conn,"SELECT sum(Municipality_with_Forestland) FROM Summary_of_Forest_Land_Use_Plan_Formulation_and_Adoption") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show2=number_format($rows['sum(Municipality_with_Forestland)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Accomplishment_Formulation) FROM Summary_of_Forest_Land_Use_Plan_Formulation_and_Adoption") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show3=number_format($rows['sum(Accomplishment_Formulation)']);
        }


    $result = mysqli_query($conn,"SELECT sum(Accomplishment_Adoption) FROM Summary_of_Forest_Land_Use_Plan_Formulation_and_Adoption") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show4=number_format($rows['sum(Accomplishment_Adoption)']);
        }

    $result = mysqli_query($conn,"SELECT sum(Baseline_Formulation) FROM Summary_of_Forest_Land_Use_Plan_Formulation_and_Adoption") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show5=number_format($rows['sum(Baseline_Formulation)']);
        }


     $result = mysqli_query($conn,"SELECT sum(Baseline_Adoption) FROM Summary_of_Forest_Land_Use_Plan_Formulation_and_Adoption") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$show6=number_format($rows['sum(Baseline_Adoption)']);
        }


?>


<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=Summary of Forest Land Use Plan Formulation and Adoption Region 10.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	$output .="
		<table>
			<h2 style='color:#008B8B;'>ENR Profile : Summary of Forest Land Use Plan Formulation and Adoption Region 10</h2>
			<thead> <br>
				<tr style='color:#008B8B;'>
					<th><h3>Province</h3></th>
					<th><h3>Total Municipality/City</h3></th>
					<th><h3>Municipality with Forestland (Universe for FLUP)</h3></th>
					<th><h3>Accomplishment (Formulation)</h3></th>
					<th><h3>Accomplishment (Adoption)</h3></th>
					<th><h3>Baseline (Formulation)</h3></th>
					<th><h3>Baseline (Adoption)</h3></th>			
				</tr>

				<tr>
					<th>Regional Total</th>
					<th>".$show1."</th>
					<th>".$show2."</th>
					<th>".$show3."</th>
					<th>".$show4."</th>
					<th>".$show5."</th>
					<th>".$show6."</th>
				</tr>

			<tbody>
	";
	

	$query = $conn->query("SELECT * FROM `Summary_of_Forest_Land_Use_Plan_Formulation_and_Adoption` ORDER BY Province ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['Province']."</center></td>
					<td><center>".number_format($fetch['Total_Municipality_City'])."</center></td>
					<td><center>".number_format($fetch['Municipality_with_Forestland'])."</center></td>
					<td><center>".number_format($fetch['Accomplishment_Formulation'])."</center></td>
					<td><center>".number_format($fetch['Accomplishment_Adoption'])."</center></td>
					<td><center>".number_format($fetch['Baseline_Formulation'])."</center></td>
					<td><center>".number_format($fetch['Baseline_Adoption'])."</center></td>
				</tr>
	";
	}

	

	
	$output .="
			</tbody>
			
		</table>
	";
	
	echo $output;
	
	
?>