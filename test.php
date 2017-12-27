<?php
session_start();
include('db_connect.php');
$org = $_SESSION['org'];
	$query = mysqli_query($conn,"select p_s_lat,p_s_lng from police_station_location where p_s_name='$org'");
	$sql=mysqli_fetch_array($query);
	$p_s_lat= $sql['p_s_lat'];
	$p_s_lng= $sql['p_s_lng'];
	echo($p_s_lat."  ".$p_s_lng);
?>