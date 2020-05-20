<link rel="shortcut icon" href="img/fav.png">
<?php
include "conn.php";
include "menu.php";
include "welcome.php";
?>

<?php

if (!isset($_SESSION)) {

    session_start();
}
$id = $_SESSION["ID"];

$sql2 = "select fullname from users where ID = '" . $_POST["to"] . "'";
$result2 = mysqli_query($conn, $sql2);



if (isset($_POST['submit'])) {
    $sql = "INSERT INTO `feedback` ( `from`, `to`, `feedback`) VALUES ( '$id', '" . $_POST["to"] . "', '" . $_POST["text"] . "')";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location:index.php");
    }
}


?>

<html>
<?php
include "head.php";
?>


</body>

<section class="property-area section-gap relative" id="property">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 pb-40 header-text">
                <h1>Feedback Form</h1>

            </div>
        </div>
        <div class="row">



            <div class="col-lg-4 col-md-6 pb-30">
                <div class="single-property">

                    <?php

                    while ($row = mysqli_fetch_array($result2)) {
                        $stringTest = $row['fullname'];

                    ?>
                        <span>For <h3> <?php echo  $stringTest; ?></h3></span>
                    <?php }
                    ?>
                    <form action="" method="post">
                        <div class="desc">


                            <input type="text" name="text" value="Enter FeedBack" class=" container justify-content-center desc">


                            <br>
                            <br> <br>


                            <div class="bottom d-flex justify-content-start"> </div>






                            <input type="hidden" name="to" value=<?php echo $_POST["to"]; ?>>

                            <input type="submit" name="submit" value="submit" class="primary-btn2 " style="width:100%;  border: 1px solid">
                        </div>
                    </form>
                </div>
            </div>
        </div>




    </div>

    </body>


</html>