<?php

include("db_connect.php");

$in_no = $_POST['in_no'];
$name = $_POST['name'];
$aadhar = $_POST['aadhar'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$d_o_b = $_POST['d_o_b'];
$gender = $_POST['gender'];
$in_type = $_POST['in_type'];
$amount = $_POST['amount'];
$exp_date = $_POST['exp_date'];

$sql = "INSERT INTO insurance (`in_no`, `aadhar_no`, `name`, `address`, `email`, `phone`, `d_o_b`, `gender`, `in_type`, `ammount`, `exp_date`) VALUES ('$in_no', '$aadhar', '$name', '$address', '$email', '$phone', '$d_o_b', '$gender', '$in_type', '$amount', '$exp_date')";
$result = mysqli_query($conn,$sql);

if($result)
		{
		echo("yes");	
		}
		else
		{
			echo("no");
		}

?>