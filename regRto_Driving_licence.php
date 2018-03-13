<?php
	include('db_connect.php');
	$name = $_POST['name'];
	$d_o_b = $_POST['d_o_b'];
	$blood_group = $_POST['blood_group'];
	$issue_date = $_POST['issue_date'];
	$exp_date = $_POST['exp_date'];
	$licence_type=$_POST['licence_type'];
	$aadhar_no = $_POST['aadhar_no'];

	$phone = $_POST['phone'];
	$address = $_POST['address'];
	
$sql="INSERT INTO rto_driving_licence(`name`,`d_o_b`,`blood_group`,`issue_date`,`exp_date`,`licence_type`,`aadhar_no`,`phone`,`address`) VALUES ('{$conn->real_escape_string($_POST['name'])}','{$conn->real_escape_string($_POST['d_o_b'])}','{$conn->real_escape_string($_POST['blood_group'])}','{$conn->real_escape_string($_POST['issue_date'])}','{$conn->real_escape_string($_POST['exp_date'])}','{$conn->real_escape_string($_POST['licence_type'])}','{$conn->real_escape_string($_POST['aadhar_no'])}','{$conn->real_escape_string($_POST['phone'])}','{$conn->real_escape_string($_POST['address'])}')";
	$insert = $conn->query($sql);
   if ( $insert ) {

	   header("Location:rto_index.php");
    
  } else {
	   header("Location:Rto_Driving_Licence.php");
	  
 
  }

?>
