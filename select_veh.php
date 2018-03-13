<?php
//$veh = $_POST['veh_no'];
$fir_no= $_POST['fir_number'];
$veh = "gj-27-c-2384";
$sql = "SELECT owner_name, address, engine_no, chassis_no FROM rto_vehicle_reg where reg_no='$veh';";
$array = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($array);
echo json_encode($row);
?>