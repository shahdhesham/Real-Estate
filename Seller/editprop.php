<?php

include "../welcome.php";
include "../menu.php";
include "../head.php";
?>

<?php
include "../conn.php";
if (isset($_POST['edit'])) {



	$id = $_POST['id'];

	$sql = "SELECT * FROM property where ID = '" . $id . "'";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		while ($row = mysqli_fetch_array($result)) {
			$title = $row['title'];

			$price = $row['price'];
			$area = $row['area'];
			$propertyType = $row['propertyType'];
			$noOfRooms = $row['noOfRooms'];
			$noOfBathrooms = $row['noOfBathrooms'];
			$picture = $row['picture'];
			$picture1 = $row['picture1'];
			$picture2 = $row['picture2'];
			$picture3 = $row['picture3'];
			$city = $row['city'];
		}


?>


		<html>

		<head>
			<?php
			include "../head.php";

			?>


		</head>

		<body>

			<section class="property-area section-gap relative" id="property">

				<div class="overlay overlay-bg"></div>

				<div class="row d-flex justify-content-center">
					<div class="col-md-8 pb-40 header-text">
						<h1>Edit your Property </h1>

					</div>
				</div>

				<div class="containerr">


					<div class="col-lg-4 col-md-6">
						<div class="form-row  ">
							<div class="single-property">
								<div class="d-flex justify-content-start">
									<div class="onoffswitch3 d-block mx-auto">

										For: <br>
										<form>
											<b> <input type="radio" name="type" value="rent" checked> Rent<br>
												<input type="radio" name="type" value="sale"> Sale<br> </b>

										</form>
									</div>
								</div>
								<form name="update" method="post" action="updateprop.php">
									<img class="img-fluid mx-auto d-block" src="<?php echo "/realestate/img/" .  $picture; ?>" alt="" width=100%>
									<br>
									Display Picture
									<div class="images">
										<input type="file" name="picture" id="image">
									</div>

									Picture 1
									<div class="images">
										<input type="file" name="picture1" id="image1">
									</div>
									Picture 2
									<div class="images">
										<input type="file" name="picture2" id="image2">
									</div>
									Picture 3
									<div class="images">
										<input type="file" name="picture3" id="image3">
									</div>

									Property Title<h3><input type="text" name="title" value="<?php echo $title; ?>" required="required"></h3>

									<span> In <h3> <input type="text" name="city" value="<?php echo $city; ?>" id="location" required="required"> </h3>

										<div class="desc">
											<div class="top d-flex justify-content-between">


												<b>EGP<h3><input type="text" name="price" value="<?php echo $price; ?>" id="price" required="required"></h3> </b>
											</div>
											<div class="middle">
												<div class="d-flex justify-content-start">
													<p>No of Beds: <h4><input type="text" name="noOfRooms" value="<?php echo $noOfRooms; ?>" id="noOfRooms" required="required"></h4>
													</p>
													<p>No of Bathrooms: <h4><input type="text" name="noOfBathrooms" value="<?php echo $noOfBathrooms; ?>" id="noOfBathrooms" required="required"></h4>
													</p>
													<p>Area(m):<h4><input type="text" name="area" value="<?php echo $area; ?>" id="area" required="required"></h4>
													</p>

												</div>
											</div>
										</div>
										<input type="hidden" name="id" value=<?php echo $id; ?>>
										<input type="submit" name="update" style="width:100%; height:100%; border: 1px solid " value="Update" class="primary-btn2 mt-50">

								</form>

							</div>
						</div>

					</div>
				</div>

			</section>

	<?php

	} else {
		echo $sql;
	}
}

	?>
		</body>

		</html>