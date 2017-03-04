<?php

$servername = "mysql";
$username = "test";
$password = "password";
$database = "testDb";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM testname";

	$query = $conn->query($sql);
	//$query->num_rows;
	$result = $query->fetch_assoc();
	print_r($result);
	$conn->close();

