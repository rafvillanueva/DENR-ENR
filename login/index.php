
<!DOCTYPE html>
<html lang="en">
<head>
	<title>DENR10</title>
	<link rel=icon href="../images/denr.png">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<!-- FOR preloader
		<link rel="stylesheet" type="text/css" href="css/style.css">-->
</head>
<body>
<style type="text/css">
	.container-login100{
		background-image:url(..//images/bg_1.jpg);
		background-size:cover;
		background-repeat: no-repeat;
		position: relative;
		
	}
</style>

  	<div id="preloder">
    			<div class="loader"></div>
	</div>


	<style type="text/css">
		.input100{
			color:white;
		}
	</style>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100" style="background-color:#001730; opacity:0.9;">
				<form class="login100-form validate-form" method="POST" autocomplete="off">
					
					<span class="login100-form-title p-b-48" style="margin-top:-40px;">
						<img src="../images/denr.png" width="125px" height="120px">
					</span>

					<div class="wrap-input100 validate-input" style="margin-top:-15px;">
						<input class="input100" type="text" name="username" required>
						<span class="focus-input100" data-placeholder="Username or Email Address"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password" required>
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>
					<?php include 'login.php' ?>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							
							<button class="login100-form-btn" name="login" style="background-color:#FE4A49;">
								Login
							</button>
						</div>
					</div>

				
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>


  <script src="js/jquery-3.2.1.min.js"></script>  
  <script src="js/loader.js"></script>




</body>
</html>