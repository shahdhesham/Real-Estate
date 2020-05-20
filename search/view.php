<html>
<link rel="shortcut icon" href="img/fav.png">
<?php
error_reporting(0);
?>
<?php include "../welcome.php";
include "../menu.php"; ?>
<?php include "../head.php";
include "../message/chatpopup.php";
?>
<link rel="stylesheet" href="css2/main.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script>
    (function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "realestate";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST['search'])) { //check if form was submitted

    if (isset($_POST['test']) == "on") {
        $type = "Sale";
    } else {
        $type = "Rent";
    }
    $range1 =  $_POST["range"];
    $test = explode(" ", $range1);
    $pRange1 = (int) $test[0];
    $pRange2 = (int) $test[2];





    $range2 = $_POST["range2"];
    $test2 = explode(" ", $range2);
    $aRange1 = (int)  $test2[0];
    $aRange2 = (int)  $test2[2];



    $sql = "SELECT * FROM property join users on users.ID = property.OwnerID  WHERE 
    (  (propertyType = '$type ' )
  And (city = '" . $_POST["city"] . "')
  AND((title = '" . $_POST["property-type"] . "')
  OR (noOfRooms   ='" . $_POST["bedroom"] . "')
  OR (price BETWEEN $pRange1 AND  $pRange2)
  OR (area BETWEEN $aRange1 AND  $aRange2)
  OR (noOfBathrooms = '" . $_POST["bathroom"] . "')
 
  ))";


    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

?>

    <script>
        function viewProfile(ownerID) {

            jQuery.ajax({
                url: "../viewProfile.php",
                data: {
                    ID: ownerID
                },
                type: "POST",
                success: function(data) {
                    window.location.href = "viewProfile.php";
                }


            });

        }
    </script>

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
                                <img class="img-fluid mx-auto d-block" src="<?php echo "/realestate/img/" . $row["picture"]; ?>" alt="" width=100%>

                                <span>For <h3><?php echo $row["propertyType"]; ?></h3></span>
                            </div>

                            <div class="desc">
                                <div class="top d-flex justify-content-between">

                                    <h3><?php echo $row["title"]; ?></h3>
                                    <h3>In <?php echo $row["city"]; ?></h3>

                                    <b>$<h3><?php echo $row["price"]; ?></h3> </b>
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

                                </div>

                                <div class="bottom d-flex justify-content-start">
                                    Owner : &#160 <h5> <?php echo $row["fullname"]; ?> </h5>


                                </div>
                                <form action="../viewProfile.php" method="POST">
                                    <input type="hidden" name="ID" value="<?php echo $row['ownerID'] ?>">
                                    <input type="submit" class="primary-btn2 mt-50" style="width:100%;  border: 1px solid" value="View Profile">
                                </form>
                                <br>
                                <? if ($_SESSION["role"] == "buyer") { ?>
                                    <form action="" method="post">


                                        <input type="hidden" name="propID" value="<?php echo $row['ID'] ?>" id="propID">
                                        <input type="hidden" name="sellerID" value="<?php echo $row['ownerID'] ?>" id="sellerID">
                                        <i class='fas fa-comment' style='font-size:48px;color:pink' data-toggle="tooltip" title="Press me to message the owner" onClick="openForm(<?php echo $row["ownerID"]; ?>)"></i>
                                        <input type="submit" name="request" value="Request" class="primary-btn2 mt-50" style="width:100%;  border: 1px solid">
                                    </form>
                                <?php } ?>
                            </div>
                        </div>
                    </div>



                <?php } ?>
            </div>



        <?php  }
        ?>

</html>