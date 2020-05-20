<html>
<?php
include "welcome.php";
include "menu.php";
include "head.php"
?>

<?php
include "conn.php";
?>

<head>
    <style>
        .infoDiv {
            border-radius: 50px;

            height: 309px;

            text-align: left;
        }
    </style>
</head>

<body>
    <?php
    $profileID = $_POST['ID'];
    if ($profileID == $_SESSION["ID"]) { ?>
        <section class="generic-banner relative">
            <nav class="navbar navbar-expand-lg  navbar-light bg-light">
                <div class="container">
                    <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                        <?php


                        echo "<ul class=\"navbar-nav\" >";
                        echo "<li> <a href='http://localhost/realestate/buyer/profile.php'>Edit";
                        echo "</li> </a>";
                        echo "<li> <a href='account/deleteacc.php'>Delete Account";
                        echo "</li></a></ul>";

                        ?>
                    </div>
                </div>
            </nav>

        </section>
    <?php }
    ?>

    <?php

    $sql = "SELECT* FROM users WHERE users.id='" . $profileID . "' ";
    $sql2 = "SELECT* FROM feedback JOIN users ON feedback.from=users.id WHERE feedback.to='" . $profileID . "'";
    $result = mysqli_query($conn, $sql);
    $result2 = mysqli_query($conn, $sql2);
    ?>
    <section class="property-area section-gap relative" id="property">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 pb-40 header-text">
                    <h1 class='text-uppercase'>
                        PROFILE
                    </h1>
                    <div class="col-lg-4 infoDiv">
                        <?php while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <div>
                                <br>
                                <h3 class="text-uppercase">Name: <?php echo $row['fullname']; ?> </h3>
                            </div>
                            <div>
                                <br>
                                <h3 class="text-uppercase">Email:<?php echo $row['email']; ?> </h3>
                            </div>
                            <div>
                                <br>
                                <h3 class="text-uppercase">Role:<?php echo $row['role']; ?></h3>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="col-lg-4">
                        <h3 class="text-uppercase">
                            FEEDBACKS
                        </h3>
                        <?php while ($row2 = mysqli_fetch_array($result2)) {
                        ?>
                            <div>
                                <br>
                                <h3 style="text-align:left;"><?php echo $row2['fullname']; ?>:</h3>
                            </div>
                            <div>
                                <br>
                                <h3 style="text-align:left;"><?php echo $row2['feedback']; ?></h3>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>



    </section>
</body>

</html>