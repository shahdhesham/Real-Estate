<?php
include "../conn.php";
include "../head.php";
include "../welcome.php";
include "../menu.php";



$select = mysqli_query($conn, "SELECT * FROM help");
?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script>
    function update(ID) {
      rowID = ID;
      $(document).ready(function() {
        $(".edit_button").click(function() {
          $("#myModal").modal("show");

        });
      })
    }



    function delete_row(ID) {
      jQuery.ajax({
        type: 'post',
        url: 'deleteAjax.php',
        data: {
          rowid: ID,
          delete_row: 'delete_row',
        },
        success: function(data) {
          $("#result").html(data);
        }

      });
    }


    function edit_data() {
      if (data1 != "" && data2 != "") {

        var data1 = $("#question").val();
        var data2 = $("#answer").val();
        var data3 = rowID;

        jQuery.ajax({
          type: 'post',
          url: 'editAjax.php',
          data: {
            data1,
            data2,
            data3,
          },
          success: function(data) {
            $("#result").html(data);
          }

        });

      } else {
        alert('Please fill all the field !');
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

        <th>Actions</th>
      </tr>
    </thead>
    <tbody>

      <?php
      while ($row = mysqli_fetch_array($select)) {
      ?>

        <tr>
          <td><?php echo $row['question']; ?></td>
          <td><?php echo $row['answer']; ?></td>
          <td>
            <input type='button' class="delete_button" id="delete_button<?php echo $row['ID']; ?>" value="delete" onclick="delete_row('<?php echo $row[0]; ?>');">
            <input type='button' class="edit_button" value="edit" onclick="update(<?php echo $row[0]; ?>)">

          </td>
        </tr>
      <?php
      }
      ?>
    <tbody>
  </table>


  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit</h4>
        </div>
        <div class="modal-body">

          <div class=form-group>
            <label>Question</label>
            <input type="text" class="form-control" id="question">
          </div>
          <div class=form-group>
            <label>Answer</label>
            <input type="text" class="form-control" id="answer">
          </div>
          <input type="hidden" id="userid" class="form-control">
        </div>
        <div class="modal-footer">
          <input type="submit" name="insert" id="insert" value="Insert" onclick="edit_data();" class="btn btn-default pull-right" />
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>


  </div>

</body>

</html>