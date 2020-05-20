<?php
include "../conn.php";

?>
<?php

if (isset($_POST['delete_prop'])) {
    $prop_id = $_POST["propID"];
    $owner_id = $_POST["ownerID"];
    mysqli_query($conn, "delete from property where ID='$prop_id'");

    $sql = "SELECT * FROM property where ownerID = '$owner_id'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        while ($row = mysqli_fetch_array($result)) { ?>


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

<?php
}
?>