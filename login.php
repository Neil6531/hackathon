<?php
$servername = "db4free.net:3307";
$username = "neelpatel6531";
$password = "neelpatel";
$dbname = "hackathon2018";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
}
	$user= $_POST['loginUsername'];
	$pass= $_POST['loginPassword'];
	$sql = "SELECT p_name,e_mail,password FROM police";
	$sql1 = "SELECT r_name,e_mail,password FROM RTO";
	$sql2 = "SELECT comp_name,e_mail,password FROM InsurenceCompany";
	$result =  mysqli_query($conn, $sql);
	$result1 =  mysqli_query($conn, $sql1);
	$result2 =  mysqli_query($conn, $sql2);
	$flag = true;
	if (mysqli_num_rows($result) > 0) {
    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
			if($user == $row["e_mail"] && $pass == $row["password"])
			{
				
				session_start();
				$_SESSION["user"] = $row["p_name"];
				header('location: user_police_login.php');
			
				
			
			}
			
			
			
			
	}
	
	}
	else if(mysqli_num_rows($result1) > 0)
	{
		 while($row = mysqli_fetch_assoc($result)) {
			if($user == $row["e_mail"] && $pass == $row["password"])
			{
				
				session_start();
				$_SESSION["user"] = $row["r_name"];
				header('location: user_Rto_login.php');
			
				
			
			}
		
	}
	}
	else if(mysqli_num_rows($result2) > 0)
	{
		 while($row = mysqli_fetch_assoc($result)) {
			if($user == $row["e_mail"] && $pass == $row["password"])
			{
				
				session_start();
				$_SESSION["user"] = $row["i_name"];
				header('location: user_Insurence_login.php');
			
				
			
			}
		
	}
		
	}
	else
	{
	header('location: index.php');	
	}

	
		
	
$conn->close();
?>	