<!-- This file is for connecting to the database. -->
<?php
$servername = "ecs-pd-proj-db.ecs.csus.edu";
$username = "REMOVED";
$password = "REMOVED";
$dbname = "REMOVED";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: ".$conn->connect_error);
}
?>
