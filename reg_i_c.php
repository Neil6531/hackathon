<?php
	include('db_connect.php');
	$name= $_POST['i_c_name'];
	$code= $_POST['i_c_code'];
	$email= $_POST['i_c_emailid'];
	$phone= $_POST['i_c_phone'];
	$pass= $_POST['i_c_pass'];

	$sql_i_c = "insert into InsurenceCompany (comp_name,comp_code,e_mail,phone,password) values ('$name','$code','$email','$phone','$pass')";
	if($conn->query($sql_i_c) === TRUE)
	{
		echo("registered");	
	}
	else
	{
		echo("1");
	}
?>