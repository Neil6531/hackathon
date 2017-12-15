<?php
if (isset($_COOKIE['user'])) {
	
		unset($_COOKIE['usertype']);
		 setcookie("usertype", null, -1);
        unset($_COOKIE['user']);
        setcookie("user", null, -1);
       
}
header("location:index.php");
?>