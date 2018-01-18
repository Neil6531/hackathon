<?php
include('db_connect.php');
$fir_no= $_POST['fir_number'];
$sql = "SELECT `fir_no`, `date`, `address_occ`, `time_of_occ`, `p_address`, `person_name` FROM hackathon2018.police_fir where fir_no='$fir_no'";
$array = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($array);
echo json_encode($row);
?>