<?php
	include('db_connect.php');
		$date_of_reg=$_POST['date_of_reg'];
		$reg_validity=$_POST['reg_validity'];
		$owner_name=$_POST['owner_name'];
		$chassis_no=$_POST['chassis_no'];
		$engine_no=$_POST['engine_no'];
		$vehicle_class=$_POST['vehicle_class'];
		$fule_type=$_POST['fule_type'];
		$owner_sr_name=$_POST['owner_sr_name'];
		$address=$_POST['address'];
		$seating_capacity= $_POST['seating_capacity'];
		$wheel_base=$_POST['wheel_base'];
		$cylinder_no= $_POST['cylinder_no'];
		$mfg_month_yr=$_POST['mfg_month_yr'];
		$market_name=$_POST['market_name']; 
		$colour=$_POST['colour']; 
		$body_type=$_POST['body_type'];
	
		$query="INSERT INTO rto_vehicle_reg (`date_of_reg`, `reg_validity`, `owner_name`, `chassis_no`, `engine_no`, `vehicle_class`, `fule_type`, `owner_sr_name`, `address`, `seating_capacity`, `wheel_base`,`cylinder_no`, `mfg_month_yr`, `market_name`, `colour`, `body_type` ) VALUES ('$date_of_reg', '$reg_validity', '$owner_name', '$chassis_no', '$engine_no','$vehicle_class', '$fule_type', '$owner_sr_name' , '$address', '$seating_capacity', '$wheel_base', '$cylinder_no', '$mfg_month_yr', '$market_name', '$colour', '$body_type');";
		
		if($conn->query($query) === TRUE)
		{
		echo "<script type='text/javascript'>alert('sucessfully Insert');</script>";
		
	
		}
		else
		{
			echo "<script type='text/javascript'>alert('error');</script>";
		}
		?>