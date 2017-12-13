<?php
	include('db.php');
	$user = $_POST['tb1'];
	$pass = $_POST['tb2'];
	$sql_q = "INSERT INTO userpass (user,pass) VALUES ('$user','$pass')";
		if($conn->query($sql_q) === TRUE)
		{
			echo("registered");	
		}
		else
		{
			echo("1");
		}
?>