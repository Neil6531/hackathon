<?php 
include("db_connect.php");
$veh_no = $_POST['veh_no'];
$sql = "SELECT veh_type,owner_name,address,engine_no,chassis_no FROM rto_vehicle_reg where reg_no='$veh_no'";
$array = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($array);
echo json_encode($row);
?>