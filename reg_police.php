<?php
	include('db_connect.php');
	$p_s_name= $_POST['p_s_name'];
	$p_s_pincode= $_POST['p_s_pincode_area'];
	$p_s_emailid= $_POST['p_s_emailid'];
	$p_s_phone= $_POST['p_s_phone'];
	$p_s_password= $_POST['p_s_pass'];

	$sql_p = "insert into police (p_name,pin_code,e_mail,phone,password) values ('$p_s_name','$p_s_pincode','$p_s_emailid','$p_s_phone','$p_s_password')";
	if($conn->query($sql_p) === TRUE)
	{
		echo("registered");	
	}
	else
	{
		echo("1");
	}
?>