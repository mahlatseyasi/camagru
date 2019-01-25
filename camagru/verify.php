<?php
session_start();
include_once './functions/verify.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Complete registration</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" type="image/png" href="../resources/images/icons/favicon.ico"/>
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
			<form class="login100-form validate-form" action="index.php" method="POST">
				<span class="login100-form-title p-b-37">
				  <?php if (verify($_GET["token"]) == 0) { ?>
            <strong>
              Your account as been verified
            </strong>
          <?php } else { ?>
            <strong>
              Account not found
            </strong>
            <?php } ?>
        </span>
        
				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Complete
					</button>
				</div>


				
			</form>

			
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
