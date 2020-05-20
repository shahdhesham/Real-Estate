<?php


include "../welcome.php";
include "../menu.php";
include "../head.php";
include "/Applications/XAMPP/xamppfiles/htdocs/realestate/message/chatPopup.php";
?>

<?php
include "../conn.php";
$sql = "SELECT * FROM users join message on users.id=message.senderID where  recieverID='" . $_SESSION['ID'] . "' ";
$result = mysqli_query($conn, $sql);

?>


<body>
	<section class="property-area section-gap relative" id="property">


		<?php while ($row = mysqli_fetch_array($result)) {
		?>
			<div class="row">


				<div class="single-property col-lg-12">

					<div class="desc">

						<div class="middle">

							<div class="d-flex justify-content-start">
								<form name="profile" method="post" action="../viewProfile.php" id="tcform">
									from:<a href="javascript:{}" onclick="document.getElementById('tcform').submit();">
										<h4><?php echo $row["fullname"]; ?></h4>
										<input type="hidden" name="ID" value="<?php echo $row["id"]; ?>">
									</a>
								</form>

								<p>message:<h4><?php echo $row["content"]; ?></h4>
								</p>
								<a href="#" onCLick="openForm(<?php echo $row["id"]; ?>)">Reply</a>
							</div>

						</div>



					</div>
				</div>




			</div>
		<?php } ?>
	</section>
</body>