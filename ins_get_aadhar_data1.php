
<?php
include('db_connect.php');
$aadhar = $_POST['no_aadhar'];
$sql = "SELECT name,phone FROM aadhar where aadhar_no='$aadhar'";
$array = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($array);
echo json_encode($row);
?>