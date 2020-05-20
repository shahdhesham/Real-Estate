<link rel="shortcut icon" href="../img/fav.png">
<!DOCTYPE html>
<html lang="zxx" class="no-js">



<?php
include "../head.php";
include "../welcome.php";
include "../menu.php";
?>



<body>

    <!-- Start Header Area -->
    <header class="default-header">




    </header>
    <!-- End Header Area -->
    <?php
    if (!isset($_SESSION)) {
        session_start();
    }
    ?>
    <?php
    $id = $_SESSION["ID"];

    include "../conn.php";

    $query = "SELECT * FROM `property`  join `Request` ON   `ID` = `propID`  WHERE(`SellerID` = '" . $id . "' AND `status` = 'requested' )";
    // shows all requested properties by seller id




    $result = mysqli_query($conn, $query);


    if (isset($_POST['Decline'])) {
        $sql = "UPDATE Request SET status = 'declined' WHERE (requestID = '" . $_POST["id"] . "')";
        //update request status (decline)

        $result2 = mysqli_query($conn, $sql);
        echo '<script>window.location.href= "requested.php";</script>';
    } else  if (isset($_POST['Approve'])) {
        $sql .= "UPDATE Request SET status = 'approved' WHERE (requestID = '" . $_POST["id"] . "')";
        //update request status (approved)

        $query1 = "INSERT INTO  soldprops  ( sellerID,  buyerID, propID ) values ('" . $id . "',
        ,'" . $_POST['sellerID'] . "',
         '" . $_POST['propID'] . "') ";
        echo $query1;
        // update soldprops with sellerid,propid,buyerid


        $result2 = mysqli_query($conn, $sql);
        echo '<script>window.location.href= "requested.php";</script>';
    } else
        echo "error";
    ?>


    <section class="property-area section-gap relative" id="property">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 pb-40 header-text">
                    <h1>Requests</h1>
                    <p>
                        Who are in extremely love with eco friendly system.
                    </p>
                </div>
            </div>
            <div class="row">
                <?php while ($row = mysqli_fetch_array($result)) {

                ?>

                    <div class="col-lg-4 col-md-6 pb-30">
                        <div class="single-property">
                            <div class="images">
                                <img class="img-fluid mx-auto d-block" src="<?php echo "/realestate/img/" . $row["picture"]; ?>" alt="" width=100%>

                                <span>For <h3><?php echo $row["propertyType"]; ?></h3></span>
                            </div>

                            <div class="desc">
                                <div class="top d-flex justify-content-between">


                                    <?php

                                    ?>
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
                                    <?php echo $row["requestID"]; ?>
                                    <form action="" method="post">
                                        <input type="hidden" value="<?php echo $row["requestID"]; ?>" name="id">
                                        <button name="Approve"> Approve </button>
                                        <input type="submit" name="Decline" value="Decline">

                                    </form>

                                </div>


                            </div>
                        </div>
                    </div>



                <?php }
                ?>

            </div>


        </div>
    </section>


    <script src="../js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="../js/vendor/bootstrap.min.js"></script>
    <script src="../js/jquery.ajaxchimp.min.js"></script>
    <script src="../js/jquery.nice-select.min.js"></script>
    <script src="../js/jquery.sticky.js"></script>
    <script src="../js/ion.rangeSlider.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>