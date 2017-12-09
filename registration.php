<?php
	include('db_connect.php');
	$type= $_POST['type'];
	if($type=='police')
	{
		$p_s_name= $_POST['p_s_name'];
		$p_s_pincode= $_POST['p_s_pincode_area'];
		$p_s_emailid= $_POST['p_s_emailid'];
		$p_s_phone= $_POST['p_s_phone'];
		$p_s_password= $_POST['p_s_pass'];
		echo $p_s_name."   ";
		echo $p_s_pincode."   ";
		echo $p_s_emailid."   ";
		echo $p_s_phone."   ";
		echo $p_s_password."   "; 
		echo $type;
	}
	else if($type=='RTO')
	{
		echo"1";
	}
	else if($type=='Insurance')
	{
		echo"2";
	}
?>