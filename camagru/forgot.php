<?php
session_start();
?>
<!DOCTYPE html>
<HTML>
  <header>
    <link rel="stylesheet" type="text/css" href="style/index.css">
    <meta charset="UTF-8">
    <title>CAMAGRU - FORGOT</title>
  </header>
  <body>
   
    <div id="login">
      <div class="title">FORGOT</div>
      <div id="blue">
        <form method="post" style="position: relative;" action="forms/forgot.php">
          <label>Email: </label>
          <input id="mail" name="email" placeholder="email" type="mail">
          <input name="submit" type="submit" value=" SEND ">
        </form>
      </div>
      
    </div>
  </body>
</HTML>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>forgot</title>
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
</head>
<body>
    <?php include('fragments/header.php') ?>
    <?php include('fragments/footer.php') ?>
	<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form" action="forms/forgot.php" method="POST">
				<span class="login100-form-title p-b-37">
					forgot password
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter a valid email">
					<input class="input100" type="email" name="email" placeholder="email">
					<span class="focus-input100"></span>
        </div>
        
				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						send
					</button>
				</div>

				<div class="text-center p-t-57 p-b-20">
					<span class="txt1">
					</span>
				</div>

				<div class="flex-c p-b-112">
					<a href="#" class="">
						<i class=""></i>
          </a>
          <?php
             echo $_SESSION['error'];
              $_SESSION['error'] = null;
              if (isset($_SESSION['forgot_success'])) {
                 echo "An email has been sent to your email address";
                  $_SESSION['forgot_success'] = null;
               }
           ?>
					<a href="#" class="">
						<img src="" alt="">
					</a>
        </div>
        
				<div class="text-center">		
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