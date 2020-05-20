<?php
include "../conn.php";

$str1 = $_POST['data1'];
$str2 = $_POST['data2'];
$newstr1 = filter_var($str1, FILTER_SANITIZE_STRING);
$newstr2 = filter_var($str2, FILTER_SANITIZE_STRING);



//if(!empty($_POST['data1']) && ($_POST['data2']))


$sql = "insert into help(question,answer) values('$newstr1','$newstr2')";
$res = mysqli_query($conn, $sql);

if ($res) {
  $select = mysqli_query($conn, "SELECT * FROM help");

?>
  <table class="table table-hover" id="result">
    <thead class="thead-dark">
      <tr>
        <th>Question</th>
        <th>Answer</th>

      </tr>
    </thead>
    <tbody>
      <?php

      while ($row = mysqli_fetch_array($select)) {
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

  <div class='alert alert-success'>

    <strong> Table is updated successfully </strong></div>

<?php
} else {
  echo "<div class='alert alert-danger'>
							  <button type=button class=close data-dismiss=alert>&times;</button>
  <strong>connection failed</strong> 
</div>";
}
?>