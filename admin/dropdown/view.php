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
  <?php
  include "../../conn.php";
  include "../../welcome.php";
  include "../../menu.php";
  include "../../head.php"; ?>

  <link rel="stylesheet" type="text/css" href="style.css">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>

  <?php
  $sql1 = "SELECT * FROM cities";
  $sql2 = "SELECT * FROM type";
  $select = mysqli_query($conn, $sql1);
  $select2 = mysqli_query($conn, $sql2);

  ?>
  <div class="topnav">
    <a href="view.php">View</a>
    <a href="add.php">Add</a>
    <a href="delete.php">Delete</a>
  </div>

  <div class="row" class="col-lg-6">
    <div class="col-lg-6" id="first">
      <h2>Location</h2>
      <p>
        <table class="table table-hover" id="result">
          <thead class="thead-dark">
            <tr>
              <th>Location</th>

            </tr>
          </thead>
          <tbody>
            <?php

            while ($row = mysqli_fetch_array($select)) {
            ?>
              <td><?php echo $row['city']; ?></td>

              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>

      </p>
    </div>

    <div class="col-lg-6" id="second">
      <h2>Type</h2>
      <p>
        <table class="table table-hover" id="result">
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

      </p>
    </div>


  </div>

</body>

</html>