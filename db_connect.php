<?php
/* Database connection start */
$servername = "35.200.166.19:3306";
$username = "root";
$password = "H@ck2th0n";
$dbname = "hackathon2018";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
}
?>