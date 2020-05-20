<html>
<?php



?>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    .chat-popup {
      display: none;
      position: fixed;
      bottom: 0;
      right: 15px;
      border: 3px solid #f1f1f1;
      z-index: 9;
    }

    .form-container {
      max-width: 300px;
      padding: 10px;
      background-color: white;
    }

    .form-container textarea {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      border: none;
      background: #f1f1f1;
      resize: none;
      min-height: 200px;
    }

    .form-container textarea:focus {
      background-color: #ddd;
      outline: none;
    }

    .form-container .btn {
      background-color: #4CAF50;
      color: white;
      padding: 16px 20px;
      border: none;
      cursor: pointer;
      width: 100%;
      margin-bottom: 10px;
      opacity: 0.8;
    }


    .form-container .cancel {
      background-color: red;
    }

    .form-container .btn:hover,
    .open-button:hover {
      opacity: 1;
    }
  </style>
</head>

<body>
  <?php


  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "realestate";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  $conn1 = mysqli_connect($servername, $username, $password, $dbname);
  if (!$conn1) {
    $error_message = "error!!!!!";
    $log_file = fopen('errors.txt', 'w');
    ini_set("log_errors", true);
    ini_set('error_log', 'errors.txt');
    error_log($error_message, 3, 'errors.txt');
  }





  //   if (isset($_POST['submit'])) {
  //     $sql = "INSERT INTO message (senderID, recieverID, content)
  //  VALUES ('" . $_SESSION["ID"] . "', '" . $_POST["recieverID"] . "', '" . $_POST["msg"] . "');";
  //     $result = mysqli_query($conn, $sql);
  //     if ($result) {
  //       echo "succesful";
  //       echo  "<script> closeForm(); </script>";
  //     } else {
  //       exit();
  //     }
  //   }


  ?>
  <div class="chat-popup" id="myForm">
    <form class="form-container" method="POST" action="sendMessage.php">
      <label for="msg"><b>Message</b></label>
      <textarea placeholder="Type message.." name="msg" required></textarea>
      <input type="text" id="recieverID" name="recieverID" hidden>
      <button type="submit" name="submit" class="btn">Send</button>
      <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
    </form>
  </div>
  <script>
    function openForm(recID) {
      document.getElementById("recieverID").value = recID;
      document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }
  </script>
</body>


</html>