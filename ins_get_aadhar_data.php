
<?php
include('db_connect.php');
$aadhar = $_POST['aadhar'];
$sql = "SELECT name,address,email,phone,d_o_b,gender FROM aadhar where aadhar_no='$aadhar'";
$array = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($array);
echo json_encode($row);
?>