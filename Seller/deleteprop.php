<?php

include "../welcome.php";
include "../menu.php";
?>

<?php
include "../conn.php";
if (isset($_POST['delete'])) {
	$id = $_POST['id'];

	$sql = "DELETE  FROM property where ID = '" . $id . "' ";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		header("Location: ../seller/myprop.php");
	} else {
		echo $sql;
	}
}

?>


<html>

<head>
	<?php
	include "../head.php";

	?>

</head>




</html>