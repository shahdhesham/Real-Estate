<?php
include "../conn.php";

$str1 = $_POST['data1'];
$str2 = $_POST['data2'];
$newstr1 = filter_var($str1, FILTER_SANITIZE_STRING);
$newstr2 = filter_var($str2, FILTER_SANITIZE_STRING);


if (!empty($_POST['data1']) && ($_POST['data2'])) {
	$row_no = $_POST["data3"];

	$sql = "UPDATE help set question='$newstr1',answer='$newstr2' where ID='$row_no' ";



	$result = mysqli_query($conn, $sql);

	if ($result) {
		$select = mysqli_query($conn, "SELECT * FROM help");

?>
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
							<input type='button' class="edit_button" id="<?php echo $row['ID']; ?>" value="edit" onclick="update(<?php echo $row[0]; ?>)">

						</td>
			</tbody>
			</tr>

<?php

				}
				echo "<div class='alert alert-success'>

								<strong> Table is updated successfully </strong></div>";

				exit();
			} else {
				echo "<div class='alert alert-danger'>
										  <button type=button class=close data-dismiss=alert>&times;</button>
  <strong>Please fill all the fields inorder for the table to be updated</strong> 
</div>";
			}
		} ?>