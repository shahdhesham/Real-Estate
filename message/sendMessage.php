<html>
<script>

</script>

<?php



include "chatPopup.php";

session_start();
$sql = "INSERT INTO message (senderID, recieverID, content)
VALUES ('" . $_SESSION["ID"] . "', '" . $_POST["recieverID"] . "', '" . $_POST["msg"] . "');";
$result = mysqli_query($conn, $sql);
if ($result) {
	echo  "<script> closeForm(); </script>";
	echo '<script>window.location.href= "inbox.php";</script>';
} else {
	exit();
}
?>

</html>