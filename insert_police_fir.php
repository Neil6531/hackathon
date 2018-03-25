<?php
	include('db_connect.php');
		$fir_no=$_POST['fir_no'];
		$p_s_name=$_POST['p_s_name'];
		$district=$_POST['district'];
		$date=$_POST['fir_date'];
		$v_no=$_POST['v_no'];
		$rto=$_POST['rto'];
		$p_name=$_POST['p_name'];
		$p_f_h_name=$_POST['f_or_h_name'];
		$p_address=$_POST['p_address'];
		$p_phone=$_POST['p_phone'];
		$p_email=$_POST['email'];
		$loc_lat= $_POST['lat'];
		$loc_long=$_POST['lng'];
		$dis_p_s= $_POST['dist_from_p_s'];
		$direct_p_s=$_POST['direction_from_p_s'];
		$date_of_occ=$_POST['date_occurrence']; 
		$address_of_occ=$_POST['address_occurrence']; 
		$time_of_occ=$_POST['time_occurrence'];
		$nat_offence= $_POST['offence_nature'];
		$section= $_POST['section'];
		$desc=$_POST['description'];
		$w_name=$_POST['witness_name'];
		$w_phone= $_POST['witness_phone'];
		$w_add=$_POST['witness_address'];

		$query="INSERT INTO police_fir (`fir_no`, `police_station_name`, `district`, `date`,`vehical_no`,`rto_name`, `person_name`, `p_f_or_h_name`, `p_address`, `p_phone`, `p_email`, `location_lat`, `location_long`, `dist_from_p_s`, `direct_from_p_s`, `date_of_occ`, `time_of_occ`, `nature_of_offence`, `section`, `description`, `witness_name`, `witness_phone`, `witness_address`,`address_occ` , `photo`, `video`) VALUES ('$fir_no', '$p_s_name', '$district', '$date','$v_no','$rto', '$p_name', '$p_f_h_name', '$p_address', '$p_phone' , '$p_email', '$loc_lat', '$loc_long', '$dis_p_s', '$direct_p_s', '$date_of_occ', '$time_of_occ', '$nat_offence', '$section', '$desc', '$w_name', '$w_phone', '$w_add','$address_of_occ',NULL,NULL);";

		$sql="INSERT INTO req_rto (`fir_no`,`rto`) VALUES ('$fir_no','$rto')";
		if($conn->query($sql)){}
		if($conn->query($query) === TRUE)
		{
		echo("yes");	
		}
		else
		{
			echo("no");
		}
		?>