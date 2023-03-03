<?php
	$conn = mysqli_connect("localhost", "root", "", "version2.0");
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>
<?php 

	$conn = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($conn, "version2.0");

 ?>