<?php
	include('db_connect.php');
	$reg_no = $_POST['reg_no'];
	$veh_type = $_POST['veh_type'];
	$owner_name = $_POST['O_name'];
	$owner_address = $_POST['O_address'];
	$engine_no = $_POST['e_no'];
	$chassis_no = $_POST['Chi_no'];
	$d_o_reg = $_POST['d_reg'];
	$d_o_valid = $_POST['vreg'];
	$fule_type = $_POST['f_type'];
	$seating_capacity = $_POST['se_cap'];
	$wheel_base = $_POST['wh_base'];
	$cylinder_no = $_POST['cy_no'];
	$mfg_month_yr = $_POST['ma_date'];
	$company_name = $_POST['co_name'];
	$colour = $_POST['v_color'];
	
 $sql_q="INSERT INTO rto_vehicle_reg (`reg_no`,`veh_type`,`owner_name`,'address`, `engine_no`,`chassis_no`, `date_of_reg`,`reg_validity`,`fule_type`,`seating_capacity`,`wheel_base`,`cylinder_no`,`mfg_month_yr`,`company_name`,`colour`) VALUES ('$reg_no','$veh_type','$owner_name','$owner_address','$engine_no','$chassis_no','$d_o_reg','$d_o_valid','$fule_type','$seating_capacity','$wheel_base','$cylinder_no','$mfg_month_yr','$company_name','$colour')";
	if($sql)
	{
		
	}
	else
	{
		echo("no");
	}
?>
