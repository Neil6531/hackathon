<?php
include('db_connect.php');
$p_name = $_POST['p_s_name'];
$sql = "SELECT district FROM police_station_location WHERE p_s_name='$p_name'";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($result))
{
	$p_s_name = $row['district'];
	echo($p_s_name);
}
?>