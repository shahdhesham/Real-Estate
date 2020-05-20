<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/elements/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Real Estate</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>
	<!-- php code  -->


	<section class="generic-banner relative">
		<!-- Start Header Area -->
		<?php include "menu.php"; ?>
		</header>
		<div class="container pt-30">
			<div class="row height align-items-center justify-content-center">
				<div class="col-lg-10">
					<div class="generic-banner-content">
						<h2 class="text-white text-center">help page </h2>
						<p class="text-white">we are here to help you get what you need <br> we are a click away.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="about-generic-area pb-100 " id="FAQ">
		<div class="container border-top-generic">

			<?php

			include "conn.php";
			//dah kda read kol 7aga kant f el database 
			$sql = "SELECT * FROM help ";
			$result = mysqli_query($conn, $sql);
			while ($row = mysqli_fetch_array($result)) {
				echo "ID is: " . " " . $row["ID"] . "  <br>";
				echo "Question is:" . " " . $row["question"] . " <br>";
				echo "Answer is :" . " " . $row["answer"] . " <br>";
			}

			?>