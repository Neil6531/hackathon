<!--data: "name="+u_name+"&org_name="+name+"&org_reg_no="+code+"&email="+email+"&phone="+phone+"&pass="+pass+"&u_type="+u_type,-->


<?php
	include('db_connect.php');
	$name = $_POST['name'];
	$org_name = $_POST['org_name'];
	$org_reg_name = $_POST['org_reg_no'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$pass = $_POST['pass'];
	$u_type = $_POST['u_type'];
	
	$sql_q="INSERT INTO users (`name`, `org_name`, `org_reg_no`, `phone`, `email`, `pass`, `u_type`) VALUES ('$name', '$org_name', '$org_reg_name', '$phone', '$email', '$pass', '$u_type');";
	if($conn->query($sql_q) === TRUE)
	{
		echo("1");	
	}
	else
	{
		echo("2");
	}
?>