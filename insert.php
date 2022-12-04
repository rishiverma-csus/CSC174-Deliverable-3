<!-- Here, we insert the values using a prepared statement gathered as input from the page and place them into the database -->
<?php
// Connect to database.
require('connect.php');

$email = $_POST['email'];
echo "The email you entered is: $email <br>";

if (isset($_POST['submit'])) {
	// Since email is the PRIMARY KEY (and the only required value for this table), we check to make sure that it is not empty.
	if (!empty($_POST['email'])) {
		// Created a prepared statement with the input needed.
		$prepared_stmt = $conn->prepare("INSERT INTO CUSTOMERS (email) VALUES (?)");
		$prepared_stmt->bind_param("s", $email);

		if ($prepared_stmt->execute() === TRUE) {
			echo "<br>New customer record created successfully";
			// Close out our prepared statement, since we are done using it.
			$prepared_stmt->close();
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	} else {
		echo "Customer's email is required!";
	}
}
// Close connection to database.
$conn->close();
?>