<link rel="shortcut icon" href="../img/fav.png">
<?php
if (!isset($_SESSION)) {
	session_start();
}
include "../welcome.php";
include "../menu.php";
?>

<?php
include "../conn.php";

if (isset($_POST['add'])) //check if form was submitted

{
	if (isset($_POST['test']) == "on") {
		$promoted = "yes";
	} else {
		$promoted = "no";
	}

	if (isset($_POST['radio']) == "sale") {
		$type = "Sale";
	} else {
		$type = "Rent";
	}
	$sql = "insert into property (city,promoted,title,area,propertyType,noOfRooms,noOfBathrooms,price,picture,picture1,picture2,picture3,ownerID) values('" . $_POST["city"] . "', '" . $promoted . "', '" . $_POST["title"] . "','" . $_POST["area"] . "','" . $type . "','" . $_POST["noOfRooms"] . "','" . $_POST["noOfBathrooms"] . "','" . $_POST["price"] . "','" . $_POST["picture"] . "','" . $_POST["picture1"] . "','" . $_POST["picture2"] . "','" . $_POST["picture3"] . "','" . $_SESSION['ID'] . "')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		header("Location: ../seller/myprop.php");
	} else {
		echo $sql;
	}
}



?>


<html>
<?php
include "../head.php";

?>

<script>
	function checktitle() {
		jQuery.ajax({
			url: "checktitle.php",
			data: 'title=' + $("#title").val(),
			type: "POST",
			success: function(data) {
				$("#titlemsg").html(data);
			}


		});

	}

	function checkcity() {
		jQuery.ajax({
			url: "checkcity.php",
			data: 'city=' + $("#city").val(),
			type: "POST",
			success: function(data) {
				$("#citymsg").html(data);
			}


		});

	}



	function checkprice() {
		jQuery.ajax({
			url: "checkprice.php",
			data: 'price=' + $("#price").val(),
			type: "POST",
			success: function(data) {
				$("#pricemsg").html(data);
			}


		});

	}

	function checkrooms() {
		jQuery.ajax({
			url: "checkrooms.php",
			data: 'noOfRooms=' + $("#noOfRooms").val(),
			type: "POST",
			success: function(data) {
				$("#roomsmsg").html(data);
			}


		});

	}

	function checkbaths() {
		jQuery.ajax({
			url: "checkbaths.php",
			data: 'noOfBathrooms=' + $("#noOfBathrooms").val(),
			type: "POST",
			success: function(data) {
				$("#bathsmsg").html(data);
			}


		});

	}

	function checkarea() {
		jQuery.ajax({
			url: "checkarea.php",
			data: 'area=' + $("#area").val(),
			type: "POST",
			success: function(data) {
				$("#areamsg").html(data);
			}


		});

	}
</script>


<body>
	<form action="" method="post">
		<section class="property-area section-gap relative" id="property">

			<div class="overlay overlay-bg"></div>

			<div class="row d-flex justify-content-center">
				<div class="col-md-8 pb-40 header-text">
					<h1>Add your Property </h1>

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

							<b>Display Picture </b>
							<div class="images">
								<input type="file" name="picture" id="image">
							</div>

							<b> Picture 1 </b>
							<div class="images">
								<input type="file" name="picture1" id="image1">
							</div>
							<b>Picture 2 </b>
							<div class="images">
								<input type="file" name="picture2" id="image2">
							</div>
							<b>Picture 3 </b>
							<div class="images">
								<input type="file" name="picture3" id="image3">
							</div>


							<div class="desc">

								<div class="top d-flex justify-content-between">



									<b> Property Title <h3><input type="text" name="title" placeholder="Title" required="required" onkeyup='checktitle()'></h3>
										<div id='titlemsg'></div>
										In <h3><input type="text" name="city" placeholder="City" required="required" onkeyup='checkcity()'></h3>
										<div id='citymsg'></div>

										<b>EGP<h3><input type="text" name="price" placeholder="Price" id="price" required="required" onkeyup='checkprice()'></h3> </b>
										<div id='pricemsg'></div>
								</div>
								<div class="d-flex justify-content-start">
									<p>Number of Beds: <h4><input type="text" name="noOfRooms" placeholder="Number of rooms" id="noOfRooms" required="required" onkeyup='checkrooms()'></h4>
										<div id='roomsmsg'></div>
									</p>
									<p>Number of Bathrooms: <h4><input type="text" name="noOfBathrooms" placeholder="Number of bathrooms" id="noOfBathrooms" required="required" onkeyup='checkbaths()'></h4>
										<div id='bathsmsg'></div>
									</p>
									<p>Area(m):<h4><input type="text" name="area" placeholder="Area" id="area" required="required" onkeyup='checkarea()'></h4>
									</p>
									<div id='areamsg'></div>
								</div>



								<div class="d-flex justify-content-start">
									<div class="onoffswitch3 d-block mx-auto">
										<p> Promote your property for extra 200 EGP: </p>
										<input type="checkbox" name="test" class="onoffswitch3-checkbox" id="myonoffswitch3" checked>
										<label class="onoffswitch3-label" for="myonoffswitch3">

											<span class="onoffswitch3-inner">
												<span class="onoffswitch3-active">
													<span class="onoffswitch3-switch">Yes</span>
													<span class="lnr lnr-arrow-right"></span>
												</span>
												<span class="onoffswitch3-inactive">
													<span class="lnr lnr-arrow-left"></span>
													<span class="onoffswitch3-switch">No</span>
												</span>
											</span>
										</label>
									</div>



								</div>

								<input type="submit" class="primary-btn2 mt-50" style="width:100%; height:100%; border: 1px solid" value="Add" name="add" style="width:100%; height:100%; border: 1px solid ">

							</div>

						</div>

					</div>

		</section>
	</form>



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