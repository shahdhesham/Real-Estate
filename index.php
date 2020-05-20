<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>

</head>
<?php include "head.php";
?>

<body>

	<!-- Start Header Area -->
	<header class="default-header">

		<?php
		include "welcome.php";
		include "menu.php"; ?>

	</header>
	<!-- End Header Area -->

	<!-- start banner Area -->
	<section class="banner-area relative" id="home">

		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-center" style="height: 915px;">
				<div class="banner-content col-lg-12 col-md-12">
					<h1 class="text-uppercase">
						We’re Real Estate
					</h1>

					<?php include "search/search.php"; ?>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start service Area -->

	<section class="service-area section-gap" id="service">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-md-8 pb-40 header-text">
					<h1>Why we are the best</h1>
					<p>
						Who are in extremely love with eco friendly system.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 pb-30">
					<div class="single-service">
						<h4><span class="lnr lnr-user"></span>Expert Technicians</h4>
						<p>
							Usage of the Internet is becoming more common due to rapid advancement of technology and
							power.
						</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 pb-30">
					<div class="single-service">
						<h4><span class="lnr lnr-license"></span>Professional Service</h4>
						<p>
							Usage of the Internet is becoming more common due to rapid advancement of technology and
							power.
						</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 pb-30">
					<div class="single-service">
						<h4><span class="lnr lnr-phone"></span>Great Support</h4>
						<p>
							Usage of the Internet is becoming more common due to rapid advancement of technology and
							power.
						</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-service">
						<h4><span class="lnr lnr-rocket"></span>Technical Skills</h4>
						<p>
							Usage of the Internet is becoming more common due to rapid advancement of technology and
							power.
						</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-service">
						<h4><span class="lnr lnr-diamond"></span>Highly Recomended</h4>
						<p>
							Usage of the Internet is becoming more common due to rapid advancement of technology and
							power.
						</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-service">
						<h4><span class="lnr lnr-bubble"></span>Positive Reviews</h4>
						<p>
							Usage of the Internet is becoming more common due to rapid advancement of technology and
							power.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End service Area -->

	<!-- Start property Area -->
	<?php include "props/promoted.php"; ?>

	<?php
	if (isset($_SESSION["role"]) == "buyer") {

		include "props/property.php";
	} else { ?>
		<div class="row d-flex justify-content-center">

			<h1>To view all properties login with your buyer account </h1>



		</div>
		<br>
		<div class="row d-flex justify-content-center">
			<a href="account/login.php" class="primary-btn2 " style="width:20%;  border: 1px solid">Login Here</a>
		</div>

	<?php }
	?>


	<!-- End property Area -->

	<!-- Start city Area -->
	<?php include "city/city.php"; ?>
	<!-- End city Area -->

	<!-- Start About Area -->
	<section class="about-area">
		<div class="container-fluid">
			<div class="row d-flex justify-content-end align-items-center">
				<div class="col-lg-6 about-left">
					<div class="single-about pb-30">
						<h4>Why Choose Us</h4>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
							ut labore et dolore magna aliqua. Ut enim ad minim veniam.
						</p>
					</div>
					<div class="single-about pb-30">
						<h4>Our Properties</h4>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
							ut labore et dolore magna aliqua. Ut enim ad minim veniam.
						</p>
					</div>
					<div class="single-about">
						<h4>legal notice</h4>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
							ut labore et dolore magna aliqua. Ut enim ad minim veniam.
						</p>
					</div>
				</div>
				<div class="col-lg-6 about-right no-padding">
					<img class="img-fluid" src="img/about-img.jpg" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- End About Area -->

	<!-- Start contact-info Area -->
	<section class="contact-info-area section-gap">
		<div class="container">
			<div class="row">
				<div class="single-info col-lg-3 col-md-6">
					<h4>Visit Our Office</h4>
					<p>
						56/8, bir uttam qazi nuruzzaman
						road, west panthapath, kalabagan,
						Dhanmondi, Dhaka - 1205
					</p>
				</div>
				<div class="single-info col-lg-3 col-md-6">
					<h4>Let’s call us</h4>
					<p>
						Phone 01: 012-6532-568-9746 <br>
						Phone 02: 012-6532-568-9748 <br>
						FAX: 02-6532-568-746
					</p>
				</div>
				<div class="single-info col-lg-3 col-md-6">
					<h4>Let’s Email Us</h4>
					<p>
						hello@colorlib.com <br>
						mainhelpinfo@colorlib.com <br>
						infohelp@colorlib.com
					</p>
				</div>
				<div class="single-info col-lg-3 col-md-6">
					<h4>Customer Support</h4>
					<p>
						support@colorlib.com <br>
						emergencysupp@colorlib.com <br>
						extremesupp@colorlib.com
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End contact-info Area -->

	<script src="js2/vendor2/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="js2/vendor2/bootstrap.min.js"></script>
	<script src="js2/jquery.ajaxchimp.min.js"></script>
	<script src="js2/jquery.nice-select.min.js"></script>
	<script src="js2/jquery.sticky.js"></script>
	<script src="Slider.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="js2/jquery.magnific-popup.min.js"></script>
	<script src="main2.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

</body>

</html>