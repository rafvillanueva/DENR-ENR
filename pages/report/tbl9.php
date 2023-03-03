
<?php
include('../../config/dbcon.php');
?>

<?php
    $result = mysqli_query($conn,"SELECT sum(Uncontested) FROM Cadastral_Survey") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Uncontested=number_format($rows['sum(Uncontested)']);
        }



    $result = mysqli_query($conn,"SELECT sum(Contested) FROM Cadastral_Survey") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Contested=number_format($rows['sum(Contested)']);
        }


?>





<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=Cadastral Survey.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	$output .="
		<table>
			<h2 style='color:#008B8B;'>ENR Profile : Cadastral Survey, Region 10</h2>
			<thead> <br>
				<tr style='color:#008B8B;'>
					<th><h3>Province</h3></th>
					<th><h3>Municipality</h3></th>
					<th><h3>Uncontested Area(ha)</h3></th>
					<th><h3>Contested Area(ha)</h3></th>				
				</tr>

				<tr>
					<th>Regional Total</th>
					<th><center>--</center></th>
					<th>".$Uncontested."</th>
					<th>".$Contested."</th>			
				</tr>

			<tbody>
	";
	
	$query = $conn->query("SELECT * FROM `Cadastral_Survey` ORDER BY Province ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr>
					<td><center>".$fetch['Province']."</center></td>
					<td><center>".$fetch['Municipality']."</center></td>
					<td><center>".number_format($fetch['Uncontested'])."</center></td>
					<td><center>".number_format($fetch['Contested'])."</center></td>
				</tr>
	";
	}




	
	$output .="
			</tbody>
			
		</table>
	";
	
	echo $output;
	
	
?>