<!doctype html>
<?php
include('db_connect.php');
$fir_no = $_GET['fir_no'];
$sql = "SELECT * FROM hackathon2018.form223 where fir='$fir_no';";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

?>

<html>
<head>
<meta charset="UTF-8">
<title>FIR Report</title>
</head>

<body>

<table width="700px">
	<tr>
		<td colspan="2">
			<center><h3><strong>Form M. V. ACCIDENT</strong><br>
ACCIDENT REPORT FORM<br>(See rule 208 (4))</h3></center>

		<strong>1. Name of the Police Station: :</strong><?php echo(" ".$row['p_station']); ?><br>
		<strong>2. Description and registered Number of motor vehicle. :</strong><?php echo(" ".$row['v_no']); ?><br>
		<strong>3. Condition of brakes and brake connections :</strong><?php echo(" ".$row['d_vehi']); ?><br>
		<strong>4. Condition of steering, steering arms and connections & engine & engine control. :</strong><?php echo(" ".$row['c_break']); ?><br>
		<strong>5. Condition of gear-box and differential :</strong><?php echo(" ".$row['c_steering']); ?><br>
		<strong>6. Frame (side, front and rear members). :</strong><?php echo(" ".$row['c_gear']); ?><br>
		<strong>7. Wheel, axles and springs (front and rear). :</strong><?php echo(" ".$row['frame']); ?><br>
		<strong>8. Any other defects worthy of special mention :</strong><?php echo(" ".$row['wheel']); ?><br>
		<strong>9. Was accident, in the opinion of the inspecting Officer, due to any mechanical defects in the vehicle?  :</strong><?php echo(" ".$row['other']); ?><br>
		<strong>10. Are registration and tax in order? :</strong><?php echo(" ".$row['opinion']); ?><br>
		<strong>11. is insurance in order? :</strong><?php echo(" ".$row['opinion']); ?><br>
		<strong>12. If a transport vehicle, are the certificate of fitness and permit in order? :</strong><?php echo(" ".$row['insurance']); ?><br>
		<strong>13. Date, time and place of accident. :</strong><?php echo(" ".$row['d_accident']." & ".$row['t_accident']); ?><br>
		<strong>14. Date, time and place of inspection :</strong><?php echo(" ".$row['p_accident']); ?><br>
	
		</td>
		<td></td>
		
	</tr>
	<tr><td width="450px"><strong>FIR Number : <?php echo(" ".$row['fir']); ?></strong></td><td><img src="img/sign.png" width="100px"></td></tr>
	<tr><td width="450px"></td><td>Sign of Authorized Police Officer</td></tr>
</table>

</body>
</html>
