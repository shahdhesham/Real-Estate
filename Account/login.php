<link rel="shortcut icon" href="../img/fav.png">
<title> Log In Page </title>


<?php
if (!isset($_SESSION)) {
	session_start();
}
include "../head.php";

?>
<script>
	function checkemail() {
		jQuery.ajax({
			url: "checkname.php",
			data: 'email=' + $("#email").val(),
			type: "POST",
			success: function(data) {
				$("#emailmsg").html(data);
			}


		});

	}
</script>
<script>
	function checkpass() {
		jQuery.ajax({
			url: "checkpass.php",
			data: {
				password: $("#password").val(),
				email: $("#email").val()

			},
			type: "POST",
			success: function(data) {
				$("#message").html(data);
			}


		});

	}
</script>
<?php
include "../head.php";
include "../menu.php";
?>
<?php


include "../conn.php";
?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">




	<style type="text/css">

	</style>
</head>

<body>


	<div class="signup-form">
		<form action="" method="post">
			<h2>Login</h2>
			<p class="hint-text">Login with your social media account or email address</p>
			<div class="social-btn text-center">
				<a href="../testing.php" class="btn btn-primary btn-lg"><i class="fa fa-facebook"></i> Facebook</a>

			</div>
			<div class="or-seperator"><b>or</b></div>


			<div class="form-group">
				<input type="email" class="form-control input-lg" name="email" placeholder="Email Address" required="required" id='email' onKeyup='checkemail()'>
				<div id='emailmsg'></div>
			</div>

			<div class="form-group">
				<input type="password" class="form-control input-lg" name="password" placeholder="Password" required="required" id="password"><input type="checkbox" name="rememberMe">
				<div id='message'>Remember Me



				</div>
			</div>

			<div id="msg"></div>
			<div class="form-group">
				<button type="button" class="btn btn-success btn-lg btn-block signup-btn" name="submit" onclick='checkpass()'>Login</button>
			</div>
			<div class="form-group">
				<input type="reset" class="btn btn-success btn-lg btn-block signup-btn">
			</div>
		</form>
		<div class="text-center">Don't have an account? <a href="signup.php">signup here</a> , <a href="../index.php">Cancel </a> </div>
	</div>

	<?php
	if (isset($_POST['submit'])) {
		if (isset($_POST['rememberMe'])) {

			if (isset($_COOKIE['email']) and isset($_COOKIE['password'])) {
				$password = $_COOKIE['password'];
				$email = $_COOKIE['email'];
			} else {
				$mail = $_POST['email'];
				$pass = $_POST['password'];
				setcookie('email', $mail, time() + 86400 * 30);
				setcookie('password', $pass, time() + 86400 * 30);
			}
		}
	}

	?>

	<script src="../js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="../js/vendor/bootstrap.min.js"></script>
	<script src="../js/jquery.ajaxchimp.min.js"></script>
	<script src="../js/jquery.nice-select.min.js"></script>
	<script src="../js/jquery.sticky.js"></script>
	<script src="../js/ion.rangeSlider.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="../js/jquery.magnific-popup.min.js"></script>
	<script src="../js/main.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<?php include "../script.php"; ?>
	<?php

	?>
</body>

</html>