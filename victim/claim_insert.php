<!doctype html>
<?php
include("../db_connect.php");
$fir_no=$_POST["f_no"];
$sql="insert into claim (`fir_no`) values('$fir_no')"
$result=mysqli_query($conn,$sql);
if($result)
{
	echo("yes");
	
}
else{
	echo("no");
}
?>