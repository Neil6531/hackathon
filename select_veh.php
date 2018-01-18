<?php
$veh = $_POST['veh_no'];
$fir_no= $_POST['fir_number'];
$sql = "SELECT vehicle_class, owner_name, address, engine_no, chassis_no FROM rto_vehicle_reg;";
$array = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($array);
echo json_encode($row);
?>