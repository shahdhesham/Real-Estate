<?php
include "../conn.php";
?>
<?php

if (isset($_POST['delete_row'])) {
	$row_no = $_POST["rowid"];
	mysqli_query($conn, "delete from help where ID='$row_no'");

	$sql = "SELECT * FROM help ";

	$result = mysqli_query($conn, $sql);
	if ($result) {
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
				while ($row = mysqli_fetch_array($result)) {
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

								<strong> Data has been deleted successfully </strong></div>";
			}
		}



?>