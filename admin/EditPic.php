<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <title>Real Estate - My properties</title>
    <?php
    include "../head.php";

    ?>
    <meta charset="utf-8">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<header class="default-header">
    <?php include "../welcome.php";
    include "../conn.php";
    include "../menu.php";
    $id = $_POST['id'];
    $owner = $_POST['ownerid'];
    $picture = $_POST['picture'];
    if ($picture != "") {
        $sql = "UPDATE property SET
   picture='" . $picture . "' WHERE ID = '" . $id . "' ";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $sql = "SELECT * FROM property WHERE ownerID = '$owner'";
            $select = mysqli_query($conn, $sql);
    ?>
            <script type="text/javascript" src="functions.js"></script>

            <div id="result1">
                <section class="property-area section-gap relative" id="property">
                    <div class="overlay overlay-bg"></div>
                    <div class="container">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-8 pb-40 header-text">
                                <h1>Our Top Rated Properties</h1>

                            </div>
                        </div>

                        <div class="row" id="result">
                            <?php
                            while ($row = mysqli_fetch_array($select)) {
                            ?>


                                <div class="col-lg-4 col-md-6 pb-30">
                                    <div class="single-property">
                                        <div class="images">
                                            <img class="img-fluid mx-auto d-block" src="<?php echo "/realestate/img/" . $row["picture"]; ?>" alt="" width=100%>
                                        </div>

                                        <span>For <h3><?php echo $row["propertyType"]; ?></h3></span>


                                        <div class="desc">
                                            <div class="top d-flex justify-content-between">

                                                <h3><?php echo $row["title"]; ?></h3>
                                                <h3> In <?php echo $row["city"]; ?></h3>

                                                <b>$<h3><?php echo $row["price"]; ?></h3> </b>
                                            </div>
                                            <div class="middle">
                                                <div class="d-flex justify-content-start">
                                                    <p>Bed: <h4><?php echo $row["noOfRooms"]; ?></h4>
                                                    </p>
                                                    <p>Bath: <h4><?php echo $row["noOfBathrooms"]; ?></h4>

                                                    </p>
                                                    <p>Area:<h4><?php echo $row["area"]; ?></h4>
                                                    </p>
                                                    <br>

                                                </div>

                                            </div>
                                            <input type="button" name="delete" style="width:100%;" class="primary-btn mt-20" value="Delete" id="delete" onclick="delete_prop('<?php echo $row[0]; ?>','<?php echo $row[1]; ?>');">

                                            <input type="button" name="edit" style="width:100%;" class="primary-btn mt-20" value="Edit Data" id="edit" onclick="edit_prop('<?php echo $row[0]; ?>','<?php echo $row[1]; ?>');">
                                            <form name="view" method="post" action="inside.php">
                                                <input type="hidden" name="id" value=<?php echo $row["ID"]; ?>>
                                                <input type="hidden" name="ownerid" value=<?php echo $row["ownerID"]; ?>>
                                                <input type="submit" name="view" style="width:100%;" class="primary-btn mt-20" value="view property">

                                            </form>
                                            <form name="pics" method="post" action="EditPic.php">
                                                <div class="container">

                                                    <div class="button"><input type="file" name="picture" id="image"> </div>
                                                </div>
                                                <input type="hidden" name="id" value=<?php echo $row["ID"]; ?>>
                                                <input type="hidden" name="ownerid" value=<?php echo $row["ownerID"]; ?>>
                                                <input type="submit" name="update" style="width:100%;" class="primary-btn mt-20" value="Change Picture">

                                            </form>

                                        </div>
                                    </div>
                                </div>




                        <?php }
                        }                ?>
                        </div>


                    </div>
                </section>
            </div>

        <?php

    } else {
        echo "<script> alert('picture is empty please add file');</script>";
    } ?>

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