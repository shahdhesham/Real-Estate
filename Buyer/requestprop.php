<!DOCTYPE html>
<html lang="zxx" class="no-js">


<?php
include "../head.php";
?>




<body>

    <!-- Start Header Area -->
    <header class="default-header">

        <?php include "../welcome.php";
        include "../menu.php";
        include "../conn.php";
        ?>

    </header>
    <!-- End Header Area -->
    <?php
    if (!isset($_SESSION)) {
        session_start();
    }
    ?>
    <?php
    $id = $_SESSION["ID"];



    $query = "SELECT * FROM property JOIN Request ON  ID = propID  WHERE(userID = '" . $id . "' )";

    $result = mysqli_query($conn, $query);

    ?>


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


                                    <?php

                                    ?>
                                    <h3><?php echo $row["title"]; ?></h3>

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
                                    <div class="bottom d-flex justify-content-start">

                                    </div>
                                    <form action="../feedback.php" method="post">



                                        <?php
                                        if ($row["status"] == "approved") {
                                        ?>
                                            <span class="gr">Approved </span>
                                            <input type="hidden" name="to" value=<?php echo $row["SellerID"]; ?>>
                                            <input type="submit" name="pay" value="pay" class="primary-btn2 ">
                                    </form>


                                    <form action="" method="post">

                                    <?php
                                        } else if ($row["status"] == "declined") {
                                    ?>
                                        <span class="rd"> decline </span>
                                        <input type="submit" name="delete" value="delete" class="primary-btn2 ">
                                    </form>
                                    <form action="" method="post">
                                    <?php

                                        } else {
                                    ?>
                                        PENDING
                                        <input type="submit" name="delete" value="delete" class="primary-btn2 ">
                                    <?php
                                        }
                                    ?>
                                    </form>
                                </div>


                            </div>
                        </div>
                    </div>



                <?php } ?>
            </div>


        </div>
    </section>


    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/ion.rangeSlider.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>