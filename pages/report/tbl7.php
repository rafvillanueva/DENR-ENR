
<?php
include('../../config/dbcon.php');

    $result = mysqli_query($conn,"SELECT sum(Universe) FROM area_developed") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Universe=$rows['sum(Universe)'];
        }

    $result = mysqli_query($conn,"SELECT sum(Baseline) FROM area_developed") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Baseline=$rows['sum(Baseline)'];
        }

   $result = mysqli_query($conn,"SELECT sum(NGP_Accomplishment) FROM area_developed") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$NGP_Accomplishment=$rows['sum(NGP_Accomplishment)'];
        }

   $result = mysqli_query($conn,"SELECT sum(Inremp) FROM area_developed") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Inremp=$rows['sum(Inremp)'];
        }
   $result = mysqli_query($conn,"SELECT sum(CBFM_CARP) FROM area_developed") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$CBFM_CARP=$rows['sum(CBFM_CARP)'];
        }

   $result = mysqli_query($conn,"SELECT sum(Tenurial_Instrument) FROM area_developed") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Tenurial_Instrument=$rows['sum(Tenurial_Instrument)'];
        }
      $result = mysqli_query($conn,"SELECT sum(Total) FROM area_developed") or die(mysql_error());
        while ($rows = mysqli_fetch_array($result)) {
		$Total=$rows['sum(Total)'];
        }

?>
<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=Area-Developed-in-hectares.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	$output .="
		<table>
			<h2 style='color:#008B8B;'>ENR Profile : Area Developed in hectares, Region 10</h2>
			<thead> <br>
				<tr style='color:#008B8B;' class='active'>
					<th><h3>Province</h3></th>
					<th><h3>Universe</h3></th>
					<th><h3>Baseline</th>
					<th><h3>NGP Accomplishment</h3></th>
					<th><h3>INREMP</h3></th>
					<th><h3>CBFM-CARP</h3></th>
					<th><h3>Tenurial Instrument</h3></th>
					<th><h3>Total</h3></th>
				
				</tr>
			<tbody>

				<tr>
					<td><b>Regional Total</b></td>
					<td><center>".number_format($Universe)."</center></td>
					<td><center>".number_format($Baseline)."</center></td>
					<td><center>".number_format($NGP_Accomplishment)."</center></td>
					<td><center>".number_format($Inremp)."</center></td>
					<td><center>".number_format($CBFM_CARP)."</center></td>
					<td><center>".number_format($Tenurial_Instrument)."</center></td>
					<td><center>".number_format($Total)."</center></td>
				</tr>

	";
	
	$query = $conn->query("SELECT * FROM `area_developed` ORDER BY Province ASC") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "




				<tr>

					<td><center>".$fetch['Province']."</center></td>
					<td><center>".number_format($fetch['Universe'])."</center></td>
					<td><center>".number_format($fetch['Baseline'])."</center></td>
					<td><center>".number_format($fetch['NGP_Accomplishment'])."</center></td>
					<td><center>".number_format($fetch['Inremp'])."</center></td>
					<td><center>".number_format($fetch['CBFM_CARP'])."</center></td>
					<td><center>".number_format($fetch['Tenurial_Instrument'])."</center></td>
					<td><center>".number_format($fetch['Total'])."</center></td>
				
					
					
				</tr>
	";
	}
	
	$output .="
			</tbody>
			
		</table>
	";
	
	echo $output;
	
	
?>