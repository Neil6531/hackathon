<?php
include('db_connect.php');
$sql = "SELECT p_s_name FROM police_station_location";
$result = mysqli_query($con,$sql)or die(mysqli_error());
while($row = mysqli_fetch_array($result))
{
	$p_s_name = $row['p_s_name'];
	echo($p_s_name."<br>");
}
?>