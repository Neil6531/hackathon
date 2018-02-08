<?php
include('db_connect.php');
$p_s_name = $_POST['p_s_name'];
$district = $_POST['district'];
$p_s_lat = $_POST['p_s_lat'];
$p_s_lng = $_POST['p_s_lng'];
$sql = "INSERT INTO police_station_location (`p_s_name`, `p_s_lat`, `p_s_lng`, `district`) VALUES ('$p_s_name', '$p_s_lat', '$p_s_lng', '$district')";
$result = mysqli_query($conn,$sql);

if($result){echo("yes");}

else{echo("no");}
?>