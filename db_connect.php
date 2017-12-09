<?php
/* Database connection start */
$servername = "db4free.net:3307";
$username = "neelpatel6531";
$password = "neelpatel";
$dbname = "hackathon2018";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
}
?>