<?php

//credentials
$server = "localhost";
$username = "root";
$password = "";
$database = "gospelblog";

//connection
$conn = mysqli_connect($server, $username, $password, $database);
// check
if (!$conn) {
	die("connection failed: " . mysqli_connect_error());
}