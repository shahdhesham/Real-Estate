<?php if (!isset($_SESSION)) {
    session_start();
} ?>
	<?php

    include "../conn.php";

    ?>
<?php

$sql = " Select * from users  where email = '" . $_POST['email'] . "' and password  = '" . $_POST["password"] . "'";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 0) {

    echo "<font color='red'>" . "Invalid Password" . "</font>";
} else {
    while ($row = mysqli_fetch_array($result)) {
        $_SESSION["ID"] = $row["id"];
        $_SESSION["fullname"] = $row["fullname"];
        $_SESSION["mobile"] = $row["mobile"];
        $_SESSION["email"] = $row["email"];
        $_SESSION["password"] = $row["password"];
        $_SESSION["role"] = $row["role"];
    }

    echo '<script>window.location.href= "../index.php";</script>';
}




?>