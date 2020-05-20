<?php
if (!isset($_SESSION)) {
  session_start();
}
include "../conn.php";
$id = $_POST['propID2'];

$sql = "SELECT * FROM property where ID = '" . $id . "'";
$result = mysqli_query($conn, $sql);


if ($result) {
  while ($row = mysqli_fetch_array($result)) {
    $title = $row['title'];

    $pic1 = $row['picture1'];
    $pic2 = $row['picture2'];
    $pic3 = $row['picture3'];
  }




?>

  <!DOCTYPE html>

  <html lang="en">

  <head>
    <title>Property From Inside</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <?php
    include "../head.php";
    include "../welcome.php";
    include "../menu.php";


    ?>

  </head>

  <body>

    <section class="property-area section-gap relative" id="property">
      <!--el gradient bel pic el fl background-->
      <div class="overlay overlay-bg"></div>


      <div class="row d-flex justify-content-center">
        <div class="col-md-8 pb-40 header-text">
          <h1>Closer Look to your Property</h1>
        </div>
      </div>


      <div class="container">
        <div id="myCarousel" class="carousel slide">

          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>

          </ol>

          <div class="carousel-inner">
            <div class="item active">

              <h2> Reception Hall <h2>

                  <img src="<?php echo "/realestate/img/" . $pic1; ?>" alt="Reception" style="width:100%; height:100%;">
            </div>


            <div class="item">
              <h2> Living Room <h2>

                  <img src="<?php echo "/realestate/img/" . $pic2; ?>" alt="Bedroom" style="width:100%; height:100%;">
            </div>

            <div class="item">
              <h2> Bedroom <h2>

                  <img src="<?php echo "/realestate/img/" . $pic3; ?>" alt="Living Room" style="width:100%; height:100%;">
            </div>

          </div>


          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <!--
		<form action="" method="post">


          <input type="hidden" name="propID" value="<?php echo $_POST['ID'] ?>" id="propID">
          <input type="hidden" name="sellerID" value="<?php echo  $_POST['ownerID'] ?>" id="sellerID">
          <i class='fas fa-comment' style='font-size:48px;color:pink' data-toggle="tooltip" title="Press me to message the owner" onClick="openForm()"></i>


          <input type="submit" name="request" value="  Request" class="primary-btn2 mt-50" style="width:100%; height:100%; border: 1px solid">

        </form>
		
      </div>
	  
      
      <div class="col-lg-4 col-md-6 pb-30">
        <div class=" single-property">
          <h2> Property Description </h2>
          <h2> <?php echo $title; ?></h2>
          <h2><?php echo $price; ?></h2>
        </div>
      </div>
 -->

      <?php

    } else {
      echo "hi";
    }


      ?>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </body>

  </html>