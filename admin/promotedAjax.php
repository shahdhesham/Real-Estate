<?php
include "../conn.php";
$id = $_POST['prop_id'];
$sql = " update property set promoted='no' where ID= '$id'";
$select = mysqli_query($conn, $sql);
?>
<?php
if ($select) {
	$sql2 = "SELECT * FROM property join users  on property.ownerID = users.id  where promoted = 'yes' ";
	$result = mysqli_query($conn, $sql2);
	while ($row = mysqli_fetch_array($result)) { ?>


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
						<h3> In <?php echo $row["city"]; ?></h3>

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

							<input type="button" id="remove" value="Delete" onclick="remove('<?php echo $row[0]; ?>');" class="primary-btn2 mt-50" style="width:100%; height:100%; border: 1px solid">

						</div>
						<div class="bottom d-flex justify-content-start">
							Owner : <h5><?php echo $row["fullname"]; ?></h5><br>

						</div>

					</div>


				</div>
			</div>
		</div>



<?php }
}			?>