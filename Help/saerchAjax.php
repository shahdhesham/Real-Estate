<?php
include "../conn.php";

if (!empty($_POST['search'])) {

	$sql = "(SELECT * FROM help WHERE ( question LIKE '%" . $_POST["search"] . "%') OR (answer LIKE '%" . $_POST["search"] . "%'))";
} else {
	$sql = "SELECT * FROM help ";
}
$result = mysqli_query($conn, $sql);
if ($result) { ?>
	<table class='table table-hover'>
		<thead class='thead-dark'>
			<tr>
				<th>ID</th>
				<th> Question</th>
				<th>Answer</th>
			</tr>
		</thead>
	</table>
<?php
	while ($row = mysqli_fetch_array($result)) {
		echo "<table>
		<tr>
		<td >" . $row['ID'] . "</td>
		<td >" . $row['question'] . "</td>
	    <td >" . $row['answer'] . "</td>
	    </tr>
		</table>";
	}
} else {
	echo "<font color='red'>" . "Connection Error" . "</font>";
}
?>