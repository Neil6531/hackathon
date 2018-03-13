<?php
include('db_connect.php');
$org_name = $_SESSION['org'];
$count_fir="select * from police_fir where police_station_name='$org_name'";
$ans=mysqli_query($conn,$count_fir);
$count_fir_num = mysqli_num_rows($ans);
echo($count_fir_num);
?>