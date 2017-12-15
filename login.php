
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
		 $query2="select name from users where email='$user' && pass='$pass'";
		$result1=mysqli_query($conn,$query2);
		$row1=mysqli_fetch_array($result1);
		 $cookie_value=$row1['name'];
		
		$row=mysqli_fetch_array($result);
		echo  $type=$row['u_type'];
		
		setcookie("user", $cookie_value, time() + 3600);
		setcookie("usertype", $type, time() + 3600);
		 
		 if($type == 'police')
		 {
			 header("location:user_police_login.php");
		 }
		 else if($type == 'RTO')
		 {
			 header("location:user_rto_login.php");
		 }
		 else if($type == 'Insurance')
		 {
			 header("location:user_insurance_login.php");
		 }
		 
	}else
	{
			echo "<script>alert('invalid UserName and Password')</script>";
			header("location:index.php");
	}
	
}
$conn->close();

