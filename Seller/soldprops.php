<?php


error_reporting(0);

include "../welcome.php";

include "../menu.php";
include "../head.php";
?>

<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script>
	(function() {
		$('[data-toggle="tooltip"]').tooltip()
	})
</script>
<?php

$id = $_SESSION["ID"];

include "../conn.php";

$query = "SELECT * FROM property inner join request  on property.ID= request.propID WHERE (request.SellerID = '" . $_SESSION["ID"] . "' AND request.status= 'approved') ";

$result = mysqli_query($conn, $query) or die(mysqli_error($conn));



?>
<section class="property-area section-gap relative" id="property">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-md-8 pb-40 header-text">
				<h1>Sold Properties</h1>

			</div>
		</div>
		<div class="row">
			<?php while ($row = mysqli_fetch_array($result)) { ?>


				<div class="col-lg-4 col-md-6 pb-30">
					<div class=" single-property">
						<div class="images">
							<img class="img-fluid mx-auto d-block" src="<?php echo "/realestate/img/" . $row["picture"]; ?>" alt="" width=100%>

							<span>For <h3><?php echo $row["propertyType"]; ?></h3></span>

						</div>

						<div class="desc">
							<div class="top d-flex justify-content-between">


								<?php

								?>
								<h3><?php echo $row["title"]; ?></h3>
								<h3>In <?php echo $row["city"]; ?></h3>

								<b>EGP<h3><?php echo $row["price"]; ?></h3> </b>
							</div>
							<div class="middle">
								<div class="d-flex justify-content-start">
									<p>Bed: <h4><?php echo $row["noOfRooms"]; ?></h4>
									</p>
									<p>Bath: <h4><?php echo $row["noOfBathrooms"]; ?></h4>

									</p>
									<p>Area:<h4><?php echo $row["area"]; ?>m</h4>

									</p>
								</div>


								<br>
								<?php if ($_SESSION["role"] == "buyer") { ?>
									<form action="" method="post">


										<input type="hidden" name="propID" value="<?php echo $row['ID'] ?>" id="propID">
										<input type="hidden" name="sellerID" value="<?php echo $row['ownerID'] ?>" id="sellerID">
										<i class='fas fa-comment' style='font-size:48px;color:pink' data-toggle="tooltip" title="Press me to message the owner" onClick="openForm()"></i>


										<input type="submit" name="request" value="  Request" class="primary-btn2 mt-50" style="width:100%; height:100%; border: 1px solid">

									</form>
								<?php } ?>


							</div>


						</div>
					</div>
				</div>



			<?php } ?>
		</div>


	</div>
</section>