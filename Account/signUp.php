<link rel="shortcut icon" href="../img/fav.png">

<?php
include "../conn.php";
include "../head.php";
include "../menu.php";
$emailError = "";
$passError = "";

if (isset($_POST['submit'])) { //check if form was submitted
	if (empty($_POST['email'])) {
		$emailError = "Email is required";
	} else 
	if ($_POST['confirm_password'] != $_POST['password']) {
		$passError = "password must match!!";
	} else {
		$sql = "insert into users (fullname,username,email,mobile,role,password) values('" . $_POST["fullname"] . "','" . $_POST['username'] . "','" . $_POST['email'] . "','" . $_POST['mobile'] . "','" . $_POST['role'] . "','" . $_POST['password'] . "')";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			header("Location:../index.php");
		} else {
			echo $sql;
		}
	}
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign up Form </title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
	</script>

	<script>
		$(document).ready(function() {

			$("#confirmPassword").keyup(function() {
				if ($("#password").val() != $("#confirmPassword").val()) {
					$("#msg").html("password not matching").css("color", "red");



				} else {
					$("#msg").html("password matched").css("color", "green");

				}
			});

		});
	</script>

	<script>
		function checkname() {
			jQuery.ajax({
				url: "../validation/checkname.php",
				data: 'name=' + $("#name").val(),
				type: "POST",
				success: function(data) {
					$("#namemsg").html(data);
				}


			});

		}

		function checkuname() {
			jQuery.ajax({
				url: "../validation/checkusername.php",
				data: 'username=' + $("#username").val(),
				type: "POST",
				success: function(data) {
					$("#unamemsg").html(data);
				}


			});

		}



		function checknum() {
			jQuery.ajax({
				url: "../validation/checknum.php",
				data: 'mobile=' + $("#mobile").val(),
				type: "POST",
				success: function(data) {
					$("#mobmsg").html(data);
				}


			});

		}

		function checkpass() {
			jQuery.ajax({
				url: "../validation/checkpass1.php",
				data: 'password=' + $("#password").val(),
				type: "POST",
				success: function(data) {
					$("#message").html(data);
				}


			});

		}

		function checkpass2() {
			jQuery.ajax({
				url: "../validation/checkpass2.php",
				data: 'password2=' + $("#password2").val(),
				type: "POST",
				success: function(data) {
					$("#pas2msg").html(data);
				}


			});
		}

		function check() {
			jQuery.ajax({
				url: "../validation/checkpass2.php",
				data: 'password=' + $("#password").val(),
				type: "POST",
				success: function(data) {
					$("#pas2msg").html(data, );
				}


			});

		}

		function checkemail() {
			jQuery.ajax({
				url: "../validation/checkemail.php",
				data: 'email=' + $("#email").val(),
				type: "POST",
				success: function(data) {
					$("#emailmsg").html(data);
				}


			});

		}

		function checkPasswordMatch() {
			var password = $("#password").val();
			var confirmPassword = $("#password2").val();

			if (password != confirmPassword)
				$("#pas2msg").html("Passwords do not match!").css("color", "red");
			else
				$("#pas2msg").html("Passwords match").css("color", "green");
		}

		$(document).ready(function() {
			$("#password, #password2").keyup(checkPasswordMatch);
		});

		function myFunction() {
			var x = document.getElementById("password");
			if (x.type === "password") {
				x.type = "text";
			} else {
				x.type = "password";
			}
		}

		function myFunction2() {
			var x = document.getElementById("password2");
			if (x.type === "password") {
				x.type = "text";
			} else {
				x.type = "password";
			}
		}
	</script>



	<style type="text/css">
		body {
			background: #dfe7e9;
			font-family: 'Roboto', sans-serif;
		}

		.form-control {
			font-size: 16px;
			transition: all 0.4s;
			box-shadow: none;
		}

		.form-control:focus {
			border-color: #5cb85c;
		}

		.form-control,
		.btn {
			border-radius: 50px;
			outline: none !important;
		}

		.signup-form {
			width: 480px;
			margin: 0 auto;
			padding: 30px 0;
		}

		.signup-form form {
			border-radius: 5px;
			margin-bottom: 20px;
			background: #fff;
			box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			padding: 40px;
		}

		.signup-form a {
			color: #5cb85c;
		}

		.signup-form h2 {
			text-align: center;
			font-size: 34px;
			margin: 10px 0 15px;
		}

		.signup-form .hint-text {
			color: #999;
			text-align: center;
			margin-bottom: 20px;
		}

		.signup-form .form-group {
			margin-bottom: 20px;
		}

		.signup-form .btn {
			font-size: 18px;
			line-height: 26px;
			font-weight: bold;
			text-align: center;
		}

		.signup-btn {
			text-align: center;
			border-color: #5cb85c;
			transition: all 0.4s;
		}

		.signup-btn:hover {
			background: #5cb85c;
			opacity: 0.8;
		}

		.or-seperator {
			margin: 50px 0 15px;
			text-align: center;
			border-top: 1px solid #e0e0e0;
		}

		.or-seperator b {
			padding: 0 10px;
			width: 40px;
			height: 40px;
			font-size: 16px;
			text-align: center;
			line-height: 40px;
			background: #fff;
			display: inline-block;
			border: 1px solid #e0e0e0;
			border-radius: 50%;
			position: relative;
			top: -22px;
			z-index: 1;
		}

		.social-btn .btn {
			color: #fff;
			margin: 10px 0 0 15px;
			font-size: 15px;
			border-radius: 50px;
			font-weight: normal;
			border: none;
			transition: all 0.4s;
		}

		.social-btn .btn:first-child {
			margin-left: 0;
		}

		.social-btn .btn:hover {
			opacity: 0.8;
		}

		.social-btn .btn-primary {
			background: #507cc0;
		}

		.social-btn .btn-info {
			background: #64ccf1;
		}

		.social-btn .btn-danger {
			background: #df4930;
		}

		.social-btn .btn i {
			float: left;
			margin: 3px 10px;
			font-size: 20px;
		}
	</style>
</head>

<body>
	<div class="signup-form">
		<form action="" method="post">
			<h2>Create an Account</h2>
			<p class="hint-text">Sign up with your social media account or email address</p>
			<div class="social-btn text-center">
				<a href="#" class="btn btn-primary btn-lg"><i class="fa fa-facebook"></i> Facebook</a>

			</div>
			<div class="or-seperator"><b>or</b></div>
			<div class="form-group">
				<input type="text" class="form-control input-lg" name="fullname" placeholder="Fullname" required="required" id='name' onKeyup='checkname()'>
				<div id='namemsg'></div>
			</div>
			<div class="form-group">
				<input type="text" class="form-control input-lg" name="username" placeholder="username" required="required" id='username' onKeyup='checkuname()'>
				<div id='unamemsg'></div>
			</div>
			<div class="form-group">
				<input type="email" class="form-control input-lg" name="email" placeholder="Email Address" required="required" id='email' onKeyup='checkemail()'>
				<div id='emailmsg'></div>
			</div>
			<div class="form-group">
				<input type="mobile" class="form-control input-lg" name="mobile" placeholder="mobile" required="required" id='mobile' onKeyup='checknum()' maxlength="11">
				<div id='mobmsg'></div>
			</div>
			<div class="form-group">
				<input type="role" class="form-control input-lg" name="role" placeholder="role seller or buyer" required="required">
			</div>
			<div class="form-group">
				<input type="password" class="form-control input-lg" name="password" placeholder="Password" required="required" id="password" onKeyup='checkpass()'>
				<div id='message'>
				</div>
			</div>
			<div class="form-group">
				<input type="password" class="form-control input-lg" name="confirm_password" placeholder="Confirm Password" required="required" id="confirmPassword"> <?php echo $passError; ?>
			</div>
			<div id="msg"></div>

			<div class="form-group">
				<button type="submit" class="btn btn-success btn-lg btn-block signup-btn" name="submit">Sign Up</button>
			</div>
		</form>
		<div class="text-center">Already have an account? <a href="login.php">Login here</a> , <a href="http://localhost/realestate/index.php">Cancel </a> </div>
	</div>

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

</body>

</html>