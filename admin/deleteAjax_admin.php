<?php
include "../conn.php";

include "../menu.php";
include "../welcome.php";

?>
<?php


if (isset($_POST['delete_seller'])) {
	$seller_id = $_POST["sellerID"];
	mysqli_query($conn, "delete from users where ID='$seller_id'");

	$sql = "SELECT * FROM users where role='seller'";

	$result = mysqli_query($conn, $sql);
	if ($result) {
?>
		<table class="table table-hover" id="result">
			<thead class="thead-dark">
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Mobile number</th>
					<th>Username</th>
					<th>Email</th>
					<th>Action
					<th>
				</tr>
			</thead>
			<tbody>
				<?php
				while ($row = mysqli_fetch_array($result)) { ?>
					<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['fullname']; ?></td>
						<td><?php echo $row['mobile']; ?></td>
						<td><?php echo $row['username']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td>
							] <input type='button' id="view" value="View Properties">
							<input type='button' id="delete" value="Delete" onclick="delete_seller('<?php echo $row[0]; ?>');">

						</td>
					</tr>
				<?php
				}
				?>
			</tbody>
		</table>
		<div class='alert alert-success'>
			<button type=button class=close data-dismiss=alert>&times;</button>
			<strong> Data has been deleted successfully </strong></div>
<?php
	} else {
		echo "<div class='alert alert-danger'>
							  <button type=button class=close data-dismiss=alert>&times;</button>
  <strong>connection failed</strong> 
</div>";
	}
} ?>