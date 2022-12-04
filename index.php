<!DOCTYPE html>
<html lang="en">
<head>
	<title>CSC174 Deliverable #3</title>
</head>
<body>
	<h1>CSC174 Deliverable #3</h1>
	<h2>Team members: Ariel Rose Manalo, Rishi Verma, Vardan Vardanyan</h2>
	<h3>Using the CUSTOMERS table from our database.</h3>

	<form action="" method="post">
		<!-- Gather input from user -->
		<label>Please enter the customer's email address:</label>
		<input type="text" name="email" value='<?php echo $email; ?>'/> <br><br>
		<button type="submit" name="submit">Submit</button><br><br>
	</form>

<!-- Here, we call the other php files so they can perform their individual functions. -->
<?php
require('insert.php');
echo "<br><br>";
require('table.php');
?>

</body>
</html>
