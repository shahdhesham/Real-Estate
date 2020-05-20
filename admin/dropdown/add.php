<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="../../css2/linearicons.css">
  <link rel="stylesheet" href="../../css2/font-awesome.min.css">
  <link rel="stylesheet" href="../../css2/nice-select.css">
  <link rel="stylesheet" href="../../css2/ion.rangeSlider.css" />
  <link rel="stylesheet" href="../../css2/ion.rangeSlider.skinFlat.css" />
  <link rel="stylesheet" href="../../bootstrap2.css">
  <link rel="stylesheet" href="../../main2.css">
  <?php include "../../conn.php";
  include "../../welcome.php";
  include "../../menu.php";
  include "../../head.php";
  ?>
  <link rel="stylesheet" type="text/css" href="style.css">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
  <script>
    function add_loc() {
      var data1 = $("#loc").val();
      if (data1 != "") {

        jQuery.ajax({
          type: 'post',
          url: 'addAjax_loc.php',
          data: {
            data1,
          },
          success: function(data) {
            $("#result1").html(data);
          }

        });

      } else {
        alert('Please fill the field!');
      }
    }

    function add_type() {
      var data1 = $("#type").val();
      if (data1 != "") {

        jQuery.ajax({
          type: 'post',
          url: 'addAjax_type.php',
          data: {
            data1,
          },
          success: function(data) {
            $("#result2").html(data);
          }

        });

      } else {
        alert('Please fill the field!');
      }
    }
  </script>
  <?php
  $sql1 = "SELECT * FROM location";
  $sql2 = "SELECT * FROM type";
  $select = mysqli_query($conn, $sql1);
  $select2 = mysqli_query($conn, $sql2);
  ?>
  <div class="topnav">
    <a href="view.php">View</a>
    <a href="add.php">Add</a>
    <a href="delete.php">Delete</a>
  </div>
  <div class="row">
    <div class="col-lg-6" id="first">
      <h2>Location</h2>
      <p>
        <table class="table table-hover" id="result1">
          <thead class="thead-dark">
            <tr>
              <th>Location</th>

            </tr>
          </thead>
          <tbody>
            <?php

            while ($row = mysqli_fetch_array($select)) {
            ?>
              <td><?php echo $row['location']; ?></td>

              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
        <form class="form-inline  " method="post">
          <label class="mr-sm-2">
            <h5> Add data:</h5>
          </label>
          <input type="text" class="form-control mb-2 mr-sm-2" id="loc" placeholder="Enter Your data">
          <input type="button" name="loc" onClick="add_loc()">

        </form>

      </p>
    </div>

    <div class="col-lg-6" id="second">
      <h2>Type</h2>
      <p>
        <table class="table table-hover" id="result2">
          <thead class="thead-dark">
            <tr>
              <th>Type</th>

            </tr>
          </thead>
          <tbody>
            <?php

            while ($row = mysqli_fetch_array($select2)) {
            ?>
              <td><?php echo $row['type']; ?></td>

              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
        <form class="form-inline  " method="post">
          <label class="mr-sm-2">
            <h5> Add data:</h5>
          </label>
          <input type="text" class="form-control mb-2 mr-sm-2" id="type" placeholder="Enter Your data">
          <input type="button" name="type" onClick="add_type()">

        </form>

      </p>
    </div>


  </div>

</body>

</html>