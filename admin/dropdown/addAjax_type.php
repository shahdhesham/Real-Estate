<?php
include "../../conn.php";
$str1 = $_POST['data1'];
$newstr1 = filter_var($str1, FILTER_SANITIZE_STRING);



$sql = "insert into type(type) value('$newstr1')";
$result = mysqli_query($conn, $sql);

if ($result) {
  $select = mysqli_query($conn, "SELECT * FROM type");

?>
  <table class="table table-hover" id="result2">
    <thead class="thead-dark">
      <tr>
        <th>Type</th>

      </tr>
    </thead>
    <tbody>
      <?php

      while ($row = mysqli_fetch_array($select)) {
      ?>
        <td><?php echo $row['type']; ?></td>

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
  $select = mysqli_query($conn, "SELECT * FROM location");

?>
  <table class="table table-hover" id="result2">
    <thead class="thead-dark">
      <tr>
        <th>Type</th>

      </tr>
    </thead>
    <tbody>
      <?php

      while ($row = mysqli_fetch_array($select)) {
      ?>
        <td><?php echo $row['type']; ?></td>

        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
<?php
}
?>