<html>
<?php
include "../conn.php";
include "../welcome.php";
include "../menu.php";
include "../head.php";
?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <script>
    function add_data() {
      var data2 = $("#ans").val();
      var data1 = $("#ques").val();
      if (data1 != "" && data2 != "") {

        jQuery.ajax({
          type: 'post',
          url: 'addAjax.php',
          data: {
            data1,
            data2,
          },
          success: function(data) {
            $("#result").html(data);
          }

        });

      } else {
        alert('Please fill all the fields!');
      }
    }
  </script>
</head>

<body>
  <table class="table table-hover" id="result">
    <thead class="thead-dark">
      <tr>
        <th>Question</th>
        <th>Answer</th>

      </tr>
    </thead>
    <tbody>
      <?php
      $select = mysqli_query($conn, "SELECT * FROM help");

      while ($row = mysqli_fetch_assoc($select)) {
      ?>
        <tr>
          <td><?php echo $row['question']; ?></td>
          <td><?php echo $row['answer']; ?></td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
  <form method="post" class="form-inline  ">
    <label class="mr-sm-2">
      <h4> Question:</h4>
    </label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="ques" placeholder="Enter Your Question Here">
    <label class="mr-sm-2">
      <h4> Answer: </h4>
    </label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="ans" placeholder="Enter Your Answer Here">
    <input type="button" name="submit" id="add" onClick='add_data()'>
  </form>


</body>

</html>