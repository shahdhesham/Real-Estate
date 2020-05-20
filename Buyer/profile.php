<html>
<link rel="shortcut icon" href="../img/fav.png">

<body>
	<?php
	include "../welcome.php";
	include "../menu.php";
	include "../conn.php";
	include "../head.php";

	?>

	<script>
		function checkname() {
			jQuery.ajax({
				url: "checkname.php",
				data: 'name=' + $("#name").val(),
				type: "POST",
				success: function(data) {
					$("#namemsg").html(data);
				}


			});

		}

		function updatename() {
			if (document.getElementById('namemsg').textContent == 'Valid') {

				jQuery.ajax({
					url: "editname.php",
					data: 'name=' + $("#name").val(),
					type: "POST",
					success: function(data) {
						$("#namemsg").html(data);
					}


				});



			}
		}

		function updatemobile() {
			if (document.getElementById('mobmsg').textContent == 'Valid') {

				jQuery.ajax({
					url: "editmobile.php",
					data: 'mobile=' + $("#mobile").val(),
					type: "POST",
					success: function(data) {
						$("#mobmsg").html(data);
					}


				});



			}
		}

		function updateemail() {
			if (document.getElementById('emailmsg').textContent == 'Valid') {

				jQuery.ajax({
					url: "editemail.php",
					data: 'email=' + $("#email").val(),
					type: "POST",
					success: function(data) {
						$("#emailmsg").html(data);
					}


				});



			}
		}

		function updatepassword() {
			if (document.getElementById('message').textContent == 'Valid' && document.getElementById('pas2msg').textContent == 'Passwords match') {

				jQuery.ajax({
					url: "editpassword.php",
					data: 'password=' + $("#password").val(),
					type: "POST",
					success: function(data) {
						$("#message").html(data);

					}


				});



			}
		}

		function checknum() {
			jQuery.ajax({
				url: "checknum.php",
				data: 'mobile=' + $("#mobile").val(),
				type: "POST",
				success: function(data) {
					$("#mobmsg").html(data);
				}


			});

		}

		function checkpass() {
			jQuery.ajax({
				url: "checkpass1.php",
				data: 'password=' + $("#password").val(),
				type: "POST",
				success: function(data) {
					$("#message").html(data);
				}


			});

		}

		function checkpass2() {
			jQuery.ajax({
				url: "checkpass2.php",
				data: 'password2=' + $("#password2").val(),
				type: "POST",
				success: function(data) {
					$("#pas2msg").html(data);
				}


			});
		}

		function check() {
			jQuery.ajax({
				url: "checkpass2.php",
				data: 'password=' + $("#password").val(),
				type: "POST",
				success: function(data) {
					$("#pas2msg").html(data, );
				}


			});

		}

		function checkemail() {
			jQuery.ajax({
				url: "checkemail.php",
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

	<section class="banner-area relative" id="home">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-center" style="height: 915px;">
				<div class="banner-content col-lg-12 col-md-12">
					<h1 class='text-uppercase'>
						We’re Real Estate King
					</h1>

					<div class="search-field">
						<form class="search-form" action="" method="POST">
							<div class="row">
								<div class="col-lg-12 d-flex align-items-center justify-content-center toggle-wrap">
									<div class="row">
										<div class="col">
											<h2 class="search-title   text-uppercase">Edit Data</h4>
										</div>
										<div class="col">
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 col-xs-6">

									<b> Full Name:</b><br>
									<input type='text' value=<?php echo "'$_SESSION[fullname]'"; ?> id='name' onKeyup='checkname()' required><button type='button' name="" class="badge badge-Success" onClick='updatename()'>✓</button>
									<div id='namemsg'></div>
								</div>
								<div class="col-lg-3 col-md-6 col-xs-6">

									<b> Mobile:</b><br>
									<input type='text' value=<?php echo "'$_SESSION[mobile]'"; ?> id='mobile' onKeyup='checknum()' maxlength="11" required><button type='button' name="" class="badge badge-Success" onClick='updatemobile()'>✓</button>
									<div id='mobmsg'></div>
								</div>
								<div class="col-lg-3 col-md-6 col-xs-6">

									<b> E-mail:</b><br>
									<input type='text' value=<?php echo "'$_SESSION[email]'"; ?> id='email' onKeyup='checkemail()' required><button type='button' name="" class="badge badge-Success" onClick='updateemail()'>✓</button>
									<div id='emailmsg'></div>
								</div>
								<div class="col-lg-3 col-md-6 col-xs-6">
									<b> Password:</b><br>

									<input type='password' value='' name='password' id='password' onKeyup='checkpass()' placeholder="New Password.." maxlength="20"><button type='button' name="" class="badge badge-Success" onClick='updatepassword()'>✓</button>
									<input type="checkbox" onclick="myFunction()">
									<div id='message'>
									</div>
								</div>


								<div class="col-lg-3 col-md-6 col-xs-6"><br>

									<b>Confirm Password:</b><br>
									<input type='password' value='' name='password2' id='password2' onChange='checkPasswordMatch()' placeholder="Validat New Password..">
									<input type="checkbox" onclick="myFunction2()">
									<div id='pas2msg'></div>




								</div>

								<div class="col-lg-4 d-flex justify-content-end">
									<button id="btn1" type="button" name="cancel" class="primary-btn mt-50" style="height: 45px;">Cancel</button>



								</div>

							</div>
						</form>

						<script>

						</script>
						<script>
							document.getElementById("btn1").addEventListener("click", function() {
								location.href = "../index.php";
							});
						</script>
					</div>
				</div>
			</div>
			<div>
	</section>
	<!-- End banner Area -->
	<?php
	include "footer.php";
	include "../script.php";
	?>
</body>

</html>