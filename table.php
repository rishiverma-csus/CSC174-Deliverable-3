<!-- Here, we output the table onto the page. -->
<?php
// Connect to database.
require('connect.php');

$sql = "SELECT * FROM CUSTOMERS";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

	// Create html table.
	echo '<table border="1" cellspacing="2" cellpadding="2">
			<tr>
				<th>Email</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Points</th>
			</tr>';

	while($row = $result->fetch_assoc()) {
		// Output results of each row onto the table.
		echo '<tr>
				<td>'.$row["email"].'</td>
				<td>'.$row["fname"].'</td>
				<td>'.$row["lname"].'</td>
				<td>'.$row["points"].'</td>
			  </tr>';

	}
	echo '</table>';
	// Frees the memory used by the returned results.
	$result->free();
} else {
	echo "0 results";
}
// Close connection to database.
$conn->close();
?>
