<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>i_log</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" type="image/png" href="./resources/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="./resources/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./resources/fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="./resources/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="./resources/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="./resources/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="./resources/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="./resources/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="./resources/css/util.css">
	<link rel="stylesheet" type="text/css" href="./resources/css/main.css">
	<link rel="stylesheet" type="text/css" href="style/index.css">
</head>
<body>
    <?php include('fragments/header.php') ?>
    <?php include('fragments/footer.php') ?>
	<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
	   <?php if(isset($_SESSION['id'])) { ?>
			<span class="login100-form-title p-b-37">
			  You are connected as <?php print_r(htmlspecialchars($_SESSION['username'])) ?>
		    </span>
        <?php } else { ?>
			<form class="login100-form validate-form" action="forms/login.php" method="POST">
				<span class="login100-form-title p-b-37">
					Sign In
				</span>

		  	<div class="wrap-input100 validate-input m-b-20" data-validate="Enter a valid email">
					<input class="input100" type="email" name="email" placeholder="email">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="password" placeholder="password">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Sign In
					</button>
				</div>

				<div class="text-center p-t-57 p-b-20">
					<span class="txt1" style="color:red">
            			<?php
							if ($_SESSION['error']) {
								echo $_SESSION['error'];
							}
              				$_SESSION['error'] = null;
           			 		?>
          				</span>
					</div>

				<div class="text-center">		
          <a href="signup.php" class="txt2 hov1" style="color:blue">Create account</a>
          <a href="forgot.php" class="txt2 hov1">Forget password ?</a>
				</div>
			</form>
      <?php }?>
			
		</div>
	</div>

	<div id="dropDownSelect1"></div>
	<script src="./resources/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="./resources/vendor/animsition/js/animsition.min.js"></script>
	<script src="./resources/vendor/select2/select2.min.js"></script>
	<script src="./resources/vendor/daterangepicker/moment.min.js"></script>
	<script src="./resources/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="./resources/vendor/countdowntime/countdowntime.js"></script>
	<script src="./resources/js/main.js"></script>

</body>
</html>
