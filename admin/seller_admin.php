<html>
<?php
include "../conn.php";
include "../head.php";
include "../welcome.php";
include "../menu.php";



?>

<head>
	<meta charset="utf-8">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<script>
	function delete_seller(ID) {
		jQuery.ajax({
			type: 'post',
			url: 'deleteAjax_admin.php',
			data: {
				sellerID: ID,
				delete_seller: 'delete_seller',
			},
			success: function(data) {
				$("#result").html(data);
			}

		});
	}

	function search_seller() {
		var data = $("#search").val()
		jQuery.ajax({
			type: 'post',
			url: 'searchAjax_admin.php',
			data: {
				data,
			},
			success: function(data) {
				$("#result").html(data);
			}

		});
	}
</script>

<body>
	<div id="page">
		<?php
		$select = mysqli_query($conn, "select * from users where role='seller'");
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
				while ($row = mysqli_fetch_array($select)) { ?>
					<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['fullname']; ?></td>
						<td><?php echo $row['mobile']; ?></td>
						<td><?php echo $row['username']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td>
							<form method="post" action="myprop_admin.php" name="viewform">
								<input type="hidden" name="id" value=<?php echo $row["id"]; ?>>
								<input type='submit' id="view" value="View Properties">
								<!--onclick="view_seller('?php echo $row[0]; ?>');">-->
							</form>
							<input type='button' id="delete" value="Delete" onclick="delete_seller('<?php echo $row[0]; ?>');">

						</td>
					</tr>
				<?php
				}
				?>
			</tbody>
		</table>
		<form class="form-inline">
			<div class="form-group">
				<label>
					<h4>search:</h4>
				</label>
				<input type="text" class="form-control" id="search" onkeyup="search_seller()">
			</div>
		</form>
	</div>
</body>

</html>