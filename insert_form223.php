<?php
	include('db_connect.php');
		$fir=$_POST['fir'];
		$p_station=$_POST['p_station'];
		$v_no=$_POST['v_no'];
		$d_vehi=$_POST['d_vehi'];
		$c_break=$_POST['c_break'];
		$c_steering=$_POST['c_steering'];
		$c_gear=$_POST['c_gear'];
		$frame=$_POST['frame'];
		$wheel=$_POST['wheel'];
		$other=$_POST['other'];
		$opinion=$_POST['opinon'];
		$registration= $_POST['reg'];
		$insurance= $_POST['insurance'];
		$certificate=$_POST['certificate'];
		$d_accident= $_POST['d_accident'];
		$t_accident=$_POST['t_accident'];
		$p_accident=$_POST['p_accident']; 
		$d_inspection=$_POST['d_inspection']; 
		$p_inspection=$_POST['p_inspection'];
		$i_name= $_POST['i_name'];
		$i_desig= $_POST['i_desig'];
		$rto1=$_POST['rto1'];
		$d_current=$_POST['d_current'];
		

		$sql="INSERT INTO `hackathon2018`.`form223` (`fir`, `p_station`, `v_no`, `d_vehi`, `c_break`, `c_steering`, `c_gear`, `frame`, `wheel`, `other`, `opinion`, `registration`, `insurance`, `certificate`, `d_accident`, `t_accident`, `p_accident`, `d_inspection`, `p_inspection`, `i_name`, `i_desig`, `rto_name`, `d_current`) VALUES ('$fir', '$p_station', '$v_no', '$d_vehi', '$c_break', '$c_steering', '$c_gear', '$frame', '$wheel', '$other', '$opinion', '$registration', '$insurance', '$certificate', '$d_accident', '$t_accident', '$p_accident', '$d_inspection', '$p_inspection', '$i_name', '$i_desig', '$rto1', '$d_current')";
		
		$sql_update = "UPDATE `req_rto` SET `status`='1' WHERE `fir_no`='$fir'";
		//$query="INSERT INTO `hackathon2018`.`form223` (`fir`, `p_station`, `v_no`, `d_vehi`, `c_break`, `c_steering`, `c_gear`, `frame`, `wheel`, `other`, `opinion`, `registration`, `insurance`, `certificate`, `d_accident`, `t_accident`, `p_accident`, `d_inspection`, `p_inspection`, `i_name`, `i_desig`, `rto_name`, `d_current`) VALUES('{$conn->real_escape_string($_POST['fir'])}','{$conn->real_escape_string($_POST['p_station'])}','{$conn->real_escape_string($_POST['v_no'])}','{$conn->real_escape_string($_POST['d_vehi'])}','{$conn->real_escape_string($_POST['c_break'])}','{$conn->real_escape_string($_POST['c_steering'])}','{$conn->real_escape_string($_POST['c_gear'])}','{$conn->real_escape_string($_POST['frame'])}','{$conn->real_escape_string($_POST['wheel'])}','{$conn->real_escape_string($_POST['other'])}','{$conn->real_escape_string($_POST['opinion'])}','{$conn->real_escape_string($_POST['registration'])}','{$conn->real_escape_string($_POST['insurance'])}','{$conn->real_escape_string($_POST['certificate'])}','{$conn->real_escape_string($_POST['d_accident'])}','{$conn->real_escape_string($_POST['t_accodent'])}','{$conn->real_escape_string($_POST['p_accident'])}','{$conn->real_escape_string($_POST['d_inspection'])}','{$conn->real_escape_string($_POST['p_inspection'])}','{$conn->real_escape_string($_POST['i_name'])}','{$conn->real_escape_string($_POST['i_desig'])}','{$conn->real_escape_string($_POST['rto'])}','{$conn->real_escape_string($_POST['d_current'])}')";
		
$result = mysqli_query($conn,$sql);


if($result){
	echo("yes");
		$result2 = mysqli_query($conn,$sql_update);
}


?>