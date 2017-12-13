<?php
	include('db_connect.php');
	$r_name= $_POST['rto_name'];
	$r_email= $_POST['rto_emailid'];
	$r_phone= $_POST['rto_phone'];
	$r_pass = $_POST['rto_pass'];
	$sql_r="insert into RTO (r_name,e_mail,phone,password) values ('$r_name','$r_email','$r_phone','$r_pass')";
		
		if($conn->query($sql_r) === TRUE)
		{
			echo("registered");	
		}
		else
		{
			echo("2");
		}
?>