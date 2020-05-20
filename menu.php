<?php
if (!isset($_SESSION)) {
	session_start();
}

?>
<nav class="navbar navbar-expand-lg  navbar-light bg-light">
	<div class="container">
		<a class="navbar-brand" href="index.php">
			<img src="http://localhost/realestate/img/logo.png" alt="">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">

			<?php

			if (!empty($_SESSION["email"])) {

				if (($_SESSION["role"]) == "seller") {
					echo "<ul class=\"navbar-nav\" >";
					echo "<li> <a href='http://localhost/realestate/index.php#home'> Home";
					echo "</li></a>";
					echo "<li><a href='http://localhost/realestate/index.php#service'>Service";
					echo "</li></a>";
					echo "<li><a href='http://localhost/realestate/index.php#property'>Properties";
					echo "</li></a>";
					echo "<li><a href='http://localhost/realestate/message/inbox.php'>Inbox";
					echo "</li></a>";
					echo "<li><a href='http://localhost/realestate/help/help.php'>Help";
					echo "</li></a>";

					echo "<li> <a href='http://localhost/realestate/seller/addprop.php'>Add property";
					echo "</li></a></ul>";
				} else if (($_SESSION["role"]) == "buyer") {
					echo "<ul class=\"navbar-nav\" >";
					echo "<li> <a href='http://localhost/realestate/index.php#home'> Home";
					echo "</li></a>";
					echo "<li><a href='http://localhost/realestate/index.php#service'>Service";
					echo "</li></a>";
					echo "<li><a href='http://localhost/realestate/index.php#property'>Properties";
					echo "</li></a>";
					echo "<li><a href='http://localhost/realestate/index.php#contact'>Contact";
					echo "</li></a>";
					echo "<li><a href='http://localhost/realestate/message/inbox.php'>Inbox";
					echo "</li></a>";
					echo "<li><a href='http://localhost/realestate/help/help.php'>Help";
					echo "</li></a></ul>";
				} else if (($_SESSION["role"]) == "admin") {
					echo "<ul class=\"navbar-nav\" >";
					echo "<li> <a href='http://localhost/realestate/index.php#home'> Home";
					echo "</li></a>";
					echo "<li><a href='http://localhost/realestate/admin/seller_admin.php'>Sellers";
					echo "</li></a>";
					echo "<li><a href='http://localhost/realestate/admin/sold.php'>Sold Properties";
					echo "</li></a>";
					echo "<li><a href='http://localhost/realestate/admin/dropdown/view.php'>Data";
					echo "</li></a>";
					echo "<li><a href='http://localhost/realestate/admin/promoted_admin.php'>Promotions";
					echo "</li></a>";
					echo "<li><a href='http://localhost/realestate/help/help.php'>Help";

					echo "</li></a></ul>";
				}
			} else {
				echo "<ul class=\"navbar-nav\" >";
				echo "<li> <a href=http://localhost/realestate/index.php#home> Home";
				echo "</li></a>";
				echo "<li><a href='http://localhost/realestate/index.php#service'>Service";
				echo "</li></a>";
				echo "<li><a href='http://localhost/realestate/index.php#property'>Properties";
				echo "</li></a>";

				echo "<li><a href='http://localhost/realestate/help/help.php'>Help";
				echo "</li></a>";

				echo "</ul>";
			}



			?>

		</div>
	</div>

</nav>