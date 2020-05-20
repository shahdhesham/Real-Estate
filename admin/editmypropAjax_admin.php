 <?php
	include "../conn.php";

	if (isset($_POST['edit_prop'])) {
		$owner = $_POST['ownerID'];
		$id = $_POST['propID'];
		$sql = "SELECT * FROM property where ID = '" . $id . "'";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			while ($row = mysqli_fetch_array($result)) {
				$title = $row['title'];
				$city = $row['city'];
				$price = $row['price'];
				$area = $row['area'];
				$propertyType = $row['propertyType'];
				$noOfRooms = $row['noOfRooms'];
				$noOfBathrooms = $row['noOfBathrooms'];
			}


			if (isset($_POST['radio']) == "sale") {
				$ans = "Sale";
			} else {
				$ans = "Rent";
			}
	?>
 		<html>

 		<head>
 			<?php include "../welcome.php";

				include "../head.php";
				?>

 			<script>
 				function update_prop(ID, ownerid, ans) { //var data1 =$("type").val();
 					var data2 = $("#city").val();
 					var data3 = $("#title").val();
 					var data4 = $("#price").val();
 					var data5 = $("#noOfRooms").val();
 					var data6 = $("#noOfBathrooms").val();
 					var data7 = $("#area").val();

 					if ((document.getElementById('titlemsg').textContent == 'Valid' || document.getElementById('titlemsg').textContent == '') && (document.getElementById('citymsg').textContent == 'Valid' || document.getElementById('citymsg').textContent == '') && (document.getElementById('pricemsg').textContent == 'Valid' || document.getElementById('pricemsg').textContent == '') && (document.getElementById('roomsmsg').textContent == 'Valid' || document.getElementById('roomsmsg').textContent == '') && (document.getElementById('bathsmsg').textContent == 'Valid' || document.getElementById('bathsmsg').textContent == '') && (document.getElementById('areamsg').textContent == 'Valid' || document.getElementById('areamsg').textContent == '')) {
 						jQuery.ajax({

 							type: 'post',
 							url: 'updatemypropAjax_admin.php',
 							data: {
 								propID: ID,
 								ownerID: ownerid,
 								update_prop: 'update_prop',
 								data1: ans,
 								data2,
 								data3,
 								data4,
 								data5,
 								data6,
 								data7,
 							},
 							success: function(data) {
 								$("#result").html(data);
 							}

 						});

 					} else {
 						alert("Invalid Input Please Re-check");
 					}
 				}
 			</script>
 			<script type="text/javascript" src="validation.js"></script>
 			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


 		</head>

 		<body>

 			<section class="property-area section-gap relative" id="property">
 				<div id="result">
 					<div class="overlay overlay-bg"></div>

 					<div class="row d-flex justify-content-center">
 						<div class="col-md-8 pb-40 header-text">
 							<h1>Edit The Property </h1>

 						</div>
 					</div>

 					<div class="container">


 						<div class="col-lg-4 col-md-6">
 							<div class="form-row  ">
 								<div class="single-property">
 									<form name="update" method="post">



 										Property Title<h3><input type="text" name="title" id="title" value="<?php echo $title; ?>" required="required" onkeyup='checktitle()'></h3>
 										<div id='titlemsg'></div>

 										<span> In <h3> <input type="text" name="city" id="city" value="<?php echo $city; ?>" id="location" required="required" onkeyup='checkcity()'> </h3>
 											<div id='citymsg'></div>

 											<div class="desc">
 												<div class="top d-flex justify-content-between">


 													<b>EGP<h3></b><input type="text" name="price" id="price" value="<?php echo $price; ?>" onkeyup='checkprice()' required></h3>
 													</b><br>

 												</div>
 												<div id='pricemsg'></div>
 												<div class="middle">
 													<div class="d-flex justify-content-start">
 														<p>No of Bedrooms: <h4><input type="text" name="noOfRooms" value="<?php echo $noOfRooms; ?>" id="noOfRooms" onkeyup='checkrooms()' required="required"></h4>
 															<div id='roomsmsg'></div>
 														</p>
 														<p>No of Bathrooms: <h4><input type="text" name="noOfBathrooms" value="<?php echo $noOfBathrooms; ?>" id="noOfBathrooms" onkeyup='checkbaths()' required="required"></h4>
 															<div id='bathsmsg'></div>
 														</p>

 														<p>Area(m):<h4><input type="text" name="area" value="<?php echo $area; ?>" id="area" onkeyup='checkarea()' required="required"></h4>
 															<div id='areamsg'></div>
 														</p>

 													</div>
 												</div>
 											</div>
 											<input type="button" name="update" style="width:100%;" class="primary-btn mt-20" value="Update" onclick="update_prop('<?php echo $id; ?>','<?php echo $owner; ?>','<?php echo $ans; ?>')">

 									</form>

 								</div>
 							</div>

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