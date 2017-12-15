<?php
include('db_connect.php');

if(isset($_POST['login']))
{
	$user=$_POST['loginUsername'];
	$pass=$_POST['loginPassword'];
	 $query="select email,pass,u_type from users where email='$user' AND pass='$pass'";
	$result=mysqli_query($conn,$query);
	 $count=mysqli_num_rows($result);
	if($count == 1)
	{	
		$row=mysqli_fetch_array($result);
		$type=$row['u_type'];
		 $cookie_value= $user  ;
		setcookie("user", $cookie_value, time() + 3600);
		setcookie("usertype", $type, time() + 3600);
		
		header("location:index1.html");
	}else
	{
			echo "<script>alert('invalid UserName and Password')</script>";
			header("location:index.php");
	}
	
}
$conn->close();
?>