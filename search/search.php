<?php
include "conn.php";
$sql = " select distinct city  from property ORDER BY property.city ASC";

$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql2 = "select distinct  title from property ORDER BY property.title ASC";

$result2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));

$sql3 = "select distinct  noOfRooms from property ORDER BY property.noOfRooms ASC";

$result3 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));

$sql4 = "select distinct  noOfBathrooms from property ORDER BY property.noOfBathrooms ASC";

$result4 = mysqli_query($conn, $sql4) or die(mysqli_error($conn));






?>


<body>
    <div class="search-field">
        <form action="search/view.php" method="post">
            <div class="row">
                <div class="col-lg-12 d-flex align-items-center justify-content-center toggle-wrap">
                    <div class="row">
                        <div class="col">
                            <h4 class="search-title">Search Properties For</h4>
                        </div>
                        <div class="col">
                            <div class="onoffswitch3 d-block mx-auto">
                                <input type="checkbox" name="test" class="onoffswitch3-checkbox" id="myonoffswitch3" checked>
                                <label class="onoffswitch3-label" for="myonoffswitch3">
                                    <span class="onoffswitch3-inner">
                                        <span class="onoffswitch3-active">
                                            <span class="onoffswitch3-switch">Sell</span>
                                            <span class="lnr lnr-arrow-right"></span>
                                        </span>
                                        <span class="onoffswitch3-inactive">
                                            <span class="lnr lnr-arrow-left"></span>
                                            <span class="onoffswitch3-switch">Rent</span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-6">

                    <select name="city" class="app-select form-control">
                        <option data-display="Choose locations">Choose locations</option>
                        <?php while ($row = mysqli_fetch_array($result)) { ?>
                            <option value=<?php echo $row["city"]; ?>> <?php echo $row["city"]; ?></option>

                        <?php } ?>
                    </select>

                    <?php mysqli_free_result($result) ?>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-6">
                    <select name="property-type" class="app-select form-control" required>
                        <option data-display="Property Type">Property Type</option>
                        <?php while ($row2 = mysqli_fetch_array($result2)) { ?>
                            <option value=<?php echo $row2["title"]; ?>> <?php echo $row2["title"]; ?></option>

                        <?php } ?>
                    </select>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-6">
                    <select name="bedroom" class="app-select form-control" required>
                        <option data-display="Bedrooms">Bedrooms</option>
                        <?php while ($row3 = mysqli_fetch_array($result3)) { ?>
                            <option value=<?php echo $row3["noOfRooms"]; ?>> <?php echo $row3["noOfRooms"]; ?></option>

                        <?php } ?>
                    </select>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-6">
                    <select name="bathroom" class="app-select form-control" required>
                        <option data-display="Bathroom">Bathroom</option>
                        <?php while ($row4 = mysqli_fetch_array($result4)) { ?>
                            <option value=<?php echo $row4["noOfBathrooms"]; ?>> <?php echo $row4["noOfBathrooms"]; ?></option>

                        <?php } ?>
                    </select>
                </div>
                <div class="col-lg-4 range-wrap">
                    <p>Price Range:</p>
                    <input type="text" id="range" name="range" />
                </div>
                <div class="col-lg-4 range-wrap">
                    <p>Area Range(sqm):</p>
                    <input type="text" id="range2" name="range2" />
                </div>
                <div class="col-lg-4 d-flex justify-content-end">
                    <button name="search" class="primary-btn mt-50" style="height: 45px;">Search Properties<span class="lnr lnr-arrow-right"></span></button>
                </div>
            </div>
        </form>

    </div>
    <script src="../js2/vendor2/jquery-2.2.4.min.js"></script>
    <script src="../js2/vendor2/bootstrap.min.js"></script>
    <script src="../js2/jquery.ajaxchimp.min.js"></script>
    <script src="../js2/jquery.nice-select.min.js"></script>
    <script src="../js2/jquery.sticky.js"></script>
    <script src="../Slider.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="../js2/jquery.magnific-popup.min.js"></script>
    <script src="../main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

</body>