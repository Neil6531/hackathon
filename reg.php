<?php
	include('db_connect.php');
	$name = $_POST['name'];
	$org_name = $_POST['org_name'];
	$org_reg_name = $_POST['org_reg_no'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$pass = $_POST['pass'];
	$u_type = $_POST['u_type'];
	$district = $_POST['district'];
	
	$sql_q="INSERT INTO users (`name`, `org_name`, `org_reg_no`, `phone`, `email`, `pass`, `u_type`, `district`) VALUES ('$name', '$org_name', '$org_reg_name', '$phone', '$email', '$pass', '$u_type','$district');";
	if($conn->query($sql_q) === TRUE)
	{
		echo("1");	
	}
	else
	{
		echo("2");
	}
?>