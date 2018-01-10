<?php
include('db_connect.php');
session_start();
$user=$_POST['loginUsername'];
$pass=$_POST['loginPassword'];
$query="select id,name,org_name,district,email,pass,u_type from users where email='$user' AND pass='$pass'";
$result=mysqli_query($conn,$query);
$count=mysqli_num_rows($result);
if($count == 1)
{	
	$row=mysqli_fetch_array($result);
	$type=$row['u_type'];
	$name=$row['name'];
	$id=$row['id'];
	$org=$row['org_name'];
	$district = $row['district'];

	$_SESSION["name"]=$name;
	$_SESSION["type"]=$type;
	$_SESSION["id"]=$id;
	$_SESSION["org"]=$org;
	$_SESSION["district"]=$district;
	
	$query = mysqli_query($conn,"select p_s_lat,p_s_lng from police_station_location where p_s_name='$org'");
	$sql=mysqli_fetch_array($query);
	$p_s_lat= $sql['p_s_lat'];
	$p_s_lng= $sql['p_s_lng'];
	$_SESSION["p_s_lat"]= $p_s_lat;
	$_SESSION["p_s_lng"]= $p_s_lng;

	if($type=="police"){?><script>window.location = "police_index.php";</script><?php }
	else if($type=="rto"){?><script>window.location = "rto_index.php";</script><?php }
	else if($type=="insurance"){?><script>window.location = "insurance_index.php";</script><?php }
}else
{
	?><script>window.location = "index.php";</script><?php
}
?>