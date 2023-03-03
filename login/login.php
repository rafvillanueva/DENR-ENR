<?php
	session_start();
	require_once '../config/dbcon.php';
	if(ISSET($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$query = mysqli_query($conn, "SELECT * FROM `user` WHERE `username` = '$username' && `password` = '$password'") or die(mysqli_error());
		$rows = mysqli_num_rows($query);
		$fetch = mysqli_fetch_array($query);
		
		if($rows > 0){
			$_SESSION['user_id'] = $fetch['user_id'];
			header("location: ../pages/Apprehended-Conveyances");
		}else{
			echo "<script>alert('Invalid Username or Password.Please try again.'); window.location='LoginForm'</script>";
		}
	}
?>