<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>i_reg</title>
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
	
	<script type="text/javascript">
	function val()
	{
	var a = document.getElementById("password1").value;
	var b = document.getElementById("password2").value;
	var c = document.reg.email.value;
		if(a.length < 8)
		{
			document.getElementById("span_1").innerHTML="Minimum value password is 8";
			return false;
		}
		if(!a.match(/[a-zA-Z0-9][%$@!#^*()]+/))
		{
			document.getElementById("span_1").innerHTML="Your password should include atleast one special character, one lowercase or uppercase";
			return false;
		}
		if (a != b)
		{
			document.getElementById("span_1").innerHTML="Passwords don't match";
			return false;
		}
		
		if (c.indexOf('@') <= 0){
			document.getElementById("span_1").innerHTML="Invalid email 7";
			return false;
		}
		if ((c.charAt(c.length-4) != '.') && (c.charAt(c.length-3) != '.')){
			document.getElementById("span_1").innerHTML="Invalid email 6";
			return false;
		}
		return true;
	}
	function letterOnly(input)
	{
		var regex = /[^a-z]/gi;
		input.value = input.value.replace(regex, "");
	}
  </script>
 
</head>
<body>
<?php include('fragments/header.php') ?>
    <?php include('fragments/footer.php') ?>
	<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form name ="reg" class="login100-form validate-form" action="forms/signup.php" method="POST" >
				<span class="login100-form-title p-b-37">
					Sign Up
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username">
					<input class="input100" type="text" name="login" placeholder="username" onkeyup="letterOnly(this)">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter a valid email">
					<input class="input100" type="email" name="email" placeholder="email">
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" id="password1" name="password1" placeholder="password">
					<span class="focus-input100"></span>
				</div>					


				<div class="wrap-input100 validate-input m-b-20" data-validate="Repeat password">
					<input class="input100" type="password" id="password2" name="password2" placeholder="Repeat password">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn" onclick=" return val();">
						Sign Up
					</button>
				</div>

				<div class="text-center p-t-57 p-b-20">
         			<span class="txt1" style="color:red" id="span_1">
           				<?php
            				echo $_SESSION['error'];
							$_SESSION['error'] = null;
							
            				if (isset($_SESSION['signup_success'])) {
              					echo "Signup success please check your mail box";
              					$_SESSION['signup_success'] = null;
            				}
          				?>
					</span>
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
