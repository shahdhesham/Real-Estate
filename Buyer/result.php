<html>

<head>
	<?php
	include "../head.php";

	?>
	<style>
		.chat-popup {
			display: none;
			position: fixed;
			bottom: 0;
			right: 15px;
			border: 3px solid #f1f1f1;
			z-index: 9;
		}

		.form-container {
			max-width: 300px;
			padding: 10px;
			background-color: white;
		}

		.form-container textarea {
			width: 100%;
			padding: 15px;
			margin: 5px 0 22px 0;
			border: none;
			background: #f1f1f1;
			resize: none;
			min-height: 200px;
		}

		.form-container textarea:focus {
			background-color: #ddd;
			outline: none;
		}

		.form-container .btn {
			background-color: #4CAF50;
			color: white;
			padding: 16px 20px;
			border: none;
			cursor: pointer;
			width: 100%;
			margin-bottom: 10px;
			opacity: 0.8;
		}


		.form-container .cancel {
			background-color: red;
		}

		.form-container .btn:hover,
		.open-button:hover {
			opacity: 1;
		}
	</style>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<script>
		(function() {
			$('[data-toggle="tooltip"]').tooltip()
		})
	</script>
</head>

<body>


	<?php
	include "buyer-menu.php";
	include "../conn.php";


	$sql = "(SELECT * FROM property WHERE ( title LIKE '%" . $_POST["property-type"] . "%') OR (area LIKE '%" . $_POST["Arearange"] . "%'))";
	$result = mysqli_query($conn, $sql);

	?>

	<section class="property-area section-gap relative" id="property">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-md-8 pb-40 header-text">
					<h1>Our Top Rated Properties</h1>
					<p>
						Who are in extremely love with eco friendly system.
					</p>
				</div>
			</div>
			<div class="row">
				<?php while ($row = mysqli_fetch_array($result)) { ?>


					<div class="col-lg-4 col-md-6 pb-30">
						<div class="single-property">
							<div class="images">
								<img class="img-fluid mx-auto d-block" src="<?php echo "/realestate/img/" . $row["image"]; ?>" alt="" width=100%>

								<span>For <h3><?php echo $row["propertyType"]; ?></h3></span>
							</div>

							<div class="desc">
								<div class="top d-flex justify-content-between">


									<?php

									?>
									<h3><?php echo $row["title"]; ?></h3>
									<h3> in <?php echo $row["location"]; ?></h3>
									<h3>$<?php echo $row["price"]; ?></h3>
								</div>
								<div class="middle">
									<div class="d-flex justify-content-start">
										<p>Bed: <h4><?php echo $row["noOfRooms"]; ?></h4>
										</p>
										<p>Bath: <h4><?php echo $row["noOfBathrooms"]; ?></h4>

										</p>
										<p>Area:<h4><?php echo $row["area"]; ?>m</h4>
										</p>
										<p hidden>ownerID:<?php echo $row["ownerID"]; ?>
										</p>
									</div>



									<button type="button" onClick='purchaseProperty()' name="request" style="width:100%; height:100%; border: 1px solid">Purchase</button> </a>
								</div>
								<i class='fas fa-comment' style='font-size:48px;color:red' data-toggle="tooltip" title="Press me to message the owner" id="<?php echo $row["ownerID"]; ?>" onClick="openForm(id)"></i>



							</div>
						</div>
					</div>



				<?php } ?>
			</div>


		</div>
	</section>

	</div>

	<div class="chat-popup" id="myForm">
		<form class="form-container" method="post" action="sendMessage.php">
			<label for="msg"><b>Message</b></label>
			<textarea placeholder="Type message.." name="msg" required></textarea>
			<input type="text" id="recieverID" name="recieverID" hidden>
			<button type="submit" class="btn">Send</button>
			<button type="button" class="btn cancel" onclick="closeForm()">Close</button>
		</form>
	</div>
	<script>
		function openForm(recID) {
			document.getElementById("recieverID").value = recID;
			document.getElementById("myForm").style.display = "block";
		}

		function closeForm() {
			document.getElementById("myForm").style.display = "none";
		}
	</script>
</body>

</html>