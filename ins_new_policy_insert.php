<?php
session_start();
include("db_connect.php");
$com_name = $_SESSION['org'];
$in_no = $_POST['in_no'];
$name = $_POST['name'];
$aadhar = $_POST['aadhar'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$d_o_b = $_POST['d_o_b'];
$gender = $_POST['gender'];
$in_type = $_POST['in_type'];
$no_type = $_POST['no_type'];
$no_aadhar = $_POST['no_aadhar'];
$no_name = $_POST['no_name'];
$no_phone = $_POST['no_phone'];
$amount = $_POST['amount'];
$exp_date = $_POST['exp_date'];
$veh_no = $_POST['veh_no'];
$veh_type = $_POST['veh_type'];
$veh_own = $_POST['veh_own'];
$veh_own_add = $_POST['veh_own_add'];
$veh_eng_no = $_POST['veh_eng_no'];
$veh_ch_on = $_POST['veh_ch_on'];

$sql = "INSERT INTO `hackathon2018`.`insurance` (`in_no`, `com_name`, `aadhar_no`, `name`, `address`, `email`, `phone`, `d_o_b`, `gender`, `in_type`, `no_type`, `no_aadhar`, `no_name`, `no_phone`, `ammount`, `exp_date`, `veh_no`, `veh_type`, `veh_own`, `veh_own_add`, `veh_eng_no`, `veh_ch_no`) VALUES ('$in_no', '$com_name', '$aadhar', '$name', '$address', '$email', '$phone', '$d_o_b', '$gender', '$in_type', '$no_type', '$no_aadhar', '$no_name', '$no_phone', '$amount', '$exp_date', '$veh_no', '$veh_type', '$veh_own', '$veh_own_add', '$veh_eng_no', '$veh_ch_on')";
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