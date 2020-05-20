<!DOCTYPE html>
<?php
session_start();
include "../conn.php";

if (isset($_POST['Submit'])) {
	$sql = "(SELECT * FROM helpdummy WHERE ( question LIKE '%" . $_POST["search"] . "%') OR (answer LIKE '%" . $_POST["search"] . "%'))";
	$result = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_array($result)) {
		echo "<table cellpadding=12 width=90%>
		<tr>
		<th align=center width = '50 px'>ID</th>
		<th align=center width = '50 px'> Question</th>
		<th align=center width = '50 px'>Answer</th>
		</tr>
		<tr>
		<td >" . $row['ID'] . "</td>
		<td >" . $row['question'] . "</td>
	    <td >" . $row['answer'] . "</td>
	    </tr>
		</table>";
	}
}
?>