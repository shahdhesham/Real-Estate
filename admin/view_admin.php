<?php include "../menu.php";
include "../welcome.php";
include "../head.php"; ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "../conn.php"; ?>
  <link rel="stylesheet" type="text/css" href="bootstrap2.css">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <style>
    /* Style the top navigation bar */
    .topnav {
      overflow: hidden;
      background-color: #f41068;
      text-decoration: none;
    }

    /* Style the topnav links */
    .topnav a {
      float: left;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    /* Change color on hover */
    .topnav a:hover {
      background-color: #ddd;
      color: black;
      text-decoration: none;
    }
  </style>
</head>

<body>
  <!--<div class="header">
  <h1>Header</h1>
  <p>Resize the browser window to see the responsive effect.</p>
</div>-->
  <?php
  $sql1 = " select distinct city  from property ORDER BY property.city ASC";
  $sql2 = "select distinct  title from property ORDER BY property.title ASC";
  $sql3 = "select distinct  noOfRooms from property ORDER BY property.noOfRooms ASC";
  $sql4 = "select distinct  noOfBathrooms from property ORDER BY property.noOfBathrooms ASC";
  $select = mysqli_query($conn, $sql1);
  $select2 = mysqli_query($conn, $sql2);
  $select3 = mysqli_query($conn, $sql3);;
  $select4 = mysqli_query($conn, $sql4)
  ?>
  <div class="topnav">

  </div>

  <div class="row">
    <div class="column col-md-3 " id="first">
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

    <div class="column col-md-3" id="second">
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
              <td><?php echo $row['title']; ?></td>

              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>

      </p>
    </div>

    <div class="column col-md-3" id="third">
      <h2>Bedroom Number</h2>
      <p>
        <table class="table table-hover" id="result">
          <thead class="thead-dark">
            <tr>
              <th>Count</th>

            </tr>
          </thead>
          <tbody>
            <?php

            while ($row = mysqli_fetch_array($select3)) {
            ?>
              <td><?php echo $row['noOfRooms']; ?></td>

              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>

      </p>
    </div>

    <div class="column col-md-3" id="Fourth">
      <h2>Bathroom Number</h2>
      <p>
        <table class="table table-hover" id="result">
          <thead class="thead-dark">
            <tr>
              <th>Count</th>

            </tr>
          </thead>
          <tbody>
            <?php

            while ($row = mysqli_fetch_array($select4)) {
            ?>
              <td><?php echo $row['noOfBathrooms']; ?></td>

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