<html>

<body>

    <?php

    include "../head.php";
    include "../welcome.php";
    include "../menu.php";
    if (!isset($_SESSION)) {

        session_start();
    }
    ?>



    <?php

    include "../conn.php";

    if (isset($_POST['matrouh'])) {
        $query = "SELECT * FROM property WHERE(city = 'Matrouh')";
        $result = mysqli_query($conn, $query);
        if ($result) {

    ?>


            <section class="property-area section-gap relative" id="property">
                <div class="overlay overlay-bg"></div>
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8 pb-40 header-text">
                            <h1>Our Top Rated Properties</h1>
                            <p>
                                MATROUH
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <?php while ($row = mysqli_fetch_array($result)) { ?>


                            <div class="col-lg-4 col-md-6 pb-30">
                                <div class=" single-property">
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


                                            <br>
                                            <?php if ($_SESSION["role"] == "buyer") { ?>
                                                <form action="" method="post">


                                                    <input type="hidden" name="propID" value="<?php echo $row['ID'] ?>" id="propID">
                                                    <input type="hidden" name="sellerID" value="<?php echo $row['ownerID'] ?>" id="sellerID">
                                                    <i class='fas fa-comment' style='font-size:48px;color:pink' data-toggle="tooltip" title="Press me to message the owner" onClick="openForm(<?php echo $row["ownerID"]; ?>)"></i>


                                                    <input type="submit" name="request" value="  Request" class="primary-btn2 mt-50" style="width:100%; border: 1px solid">

                                                </form>

                                                <form action="props/gallerypics.php" method="post" name="view">


                                                    <input type="hidden" name="propID2" value="<?php echo $row['ID'] ?>">
                                                    <input type="submit" name="view" value="View property" class="primary-btn2" style="width:100%;  border: 1px solid">
                                                </form>
                                            <?php } ?>
                                        </div>


                                    </div>
                                </div>
                            </div>


                        <?php } ?>
                    </div>


                </div>
            </section>

        <?php

        } else {
            echo $query;
        }
    } else 
    if (isset($_POST['cairo'])) {
        $query = "SELECT * FROM property WHERE(city = 'Cairo')";
        $result = mysqli_query($conn, $query);
        if ($result) {

        ?>


            <section class="property-area section-gap relative" id="property">
                <div class="overlay overlay-bg"></div>
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8 pb-40 header-text">
                            <h1>Our Top Rated Properties</h1>
                            <p>
                                Cairo
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <?php while ($row = mysqli_fetch_array($result)) { ?>


                            <div class="col-lg-4 col-md-6 pb-30">
                                <div class=" single-property">
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


                                            <br>
                                            <?php if ($_SESSION["role"] == "buyer") { ?>
                                                <form action="" method="post">


                                                    <input type="hidden" name="propID" value="<?php echo $row['ID'] ?>" id="propID">
                                                    <input type="hidden" name="sellerID" value="<?php echo $row['ownerID'] ?>" id="sellerID">
                                                    <i class='fas fa-comment' style='font-size:48px;color:pink' data-toggle="tooltip" title="Press me to message the owner" onClick="openForm(<?php echo $row["ownerID"]; ?>)"></i>


                                                    <input type="submit" name="request" value="  Request" class="primary-btn2 mt-50" style="width:100%; border: 1px solid">

                                                </form>

                                                <form action="props/gallerypics.php" method="post" name="view">


                                                    <input type="hidden" name="propID2" value="<?php echo $row['ID'] ?>">
                                                    <input type="submit" name="view" value="View property" class="primary-btn2" style="width:100%;  border: 1px solid">
                                                </form>
                                            <?php } ?>
                                        </div>


                                    </div>
                                </div>
                            </div>


                        <?php } ?>
                    </div>


                </div>
            </section>

        <?php

        } else {
            echo $query;
        }
    } else 
    if (isset($_POST['alex'])) {
        $query = "SELECT * FROM property WHERE(city = 'Alex')";
        $result = mysqli_query($conn, $query);
        if ($result) {

        ?>


            <section class="property-area section-gap relative" id="property">
                <div class="overlay overlay-bg"></div>
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8 pb-40 header-text">
                            <h1>Our Top Rated Properties</h1>
                            <p>
                                Alex
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <?php while ($row = mysqli_fetch_array($result)) { ?>


                            <div class="col-lg-4 col-md-6 pb-30">
                                <div class=" single-property">
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


                                            <br>
                                            <?php if ($_SESSION["role"] == "buyer") { ?>
                                                <form action="" method="post">


                                                    <input type="hidden" name="propID" value="<?php echo $row['ID'] ?>" id="propID">
                                                    <input type="hidden" name="sellerID" value="<?php echo $row['ownerID'] ?>" id="sellerID">
                                                    <i class='fas fa-comment' style='font-size:48px;color:pink' data-toggle="tooltip" title="Press me to message the owner" onClick="openForm(<?php echo $row["ownerID"]; ?>)"></i>


                                                    <input type="submit" name="request" value="  Request" class="primary-btn2 mt-50" style="width:100%; border: 1px solid">

                                                </form>

                                                <form action="props/gallerypics.php" method="post" name="view">


                                                    <input type="hidden" name="propID2" value="<?php echo $row['ID'] ?>">
                                                    <input type="submit" name="view" value="View property" class="primary-btn2" style="width:100%;  border: 1px solid">
                                                </form>
                                            <?php } ?>
                                        </div>


                                    </div>
                                </div>
                            </div>


                        <?php } ?>
                    </div>


                </div>
            </section>

        <?php

        } else {
            echo $query;
        }
    } else 
    if (isset($_POST['sharm'])) {
        $query = "SELECT * FROM property WHERE(city = 'Sharm')";
        $result = mysqli_query($conn, $query);
        if ($result) {

        ?>


            <section class="property-area section-gap relative" id="property">
                <div class="overlay overlay-bg"></div>
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8 pb-40 header-text">
                            <h1>Our Top Rated Properties</h1>
                            <p>
                                Sharm
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <?php while ($row = mysqli_fetch_array($result)) { ?>


                            <div class="col-lg-4 col-md-6 pb-30">
                                <div class=" single-property">
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


                                            <br>
                                            <?php if ($_SESSION["role"] == "buyer") { ?>
                                                <form action="" method="post">


                                                    <input type="hidden" name="propID" value="<?php echo $row['ID'] ?>" id="propID">
                                                    <input type="hidden" name="sellerID" value="<?php echo $row['ownerID'] ?>" id="sellerID">
                                                    <i class='fas fa-comment' style='font-size:48px;color:pink' data-toggle="tooltip" title="Press me to message the owner" onClick="openForm(<?php echo $row["ownerID"]; ?>)"></i>


                                                    <input type="submit" name="request" value="  Request" class="primary-btn2 mt-50" style="width:100%; border: 1px solid">

                                                </form>

                                                <form action="props/gallerypics.php" method="post" name="view">


                                                    <input type="hidden" name="propID2" value="<?php echo $row['ID'] ?>">
                                                    <input type="submit" name="view" value="View property" class="primary-btn2" style="width:100%;  border: 1px solid">
                                                </form>
                                            <?php } ?>
                                        </div>


                                    </div>
                                </div>
                            </div>


                        <?php } ?>
                    </div>


                </div>
            </section>

    <?php

        } else {
            echo $query;
        }
    } else {
        echo "mada5ltsh el form";
    }

    ?>
</body>

</html>