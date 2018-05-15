<!doctype html>
<?php
include 'db_connect.php';
$fir_no = $_GET['fir_no'];
$sql = "SELECT * FROM hackathon2018.police_fir where fir_no='$fir_no';";
$result = mysqli_query($conn, $sql);
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
			<center><h1>Proforma for Reporting the First Information (FIR)
of a Cognizable Offence</h1></center>
	<strong>1. Personal details of the Complainant / Informant:</strong><br>
	<strong>(a) Name:</strong> <?php echo (" " . $row['person_name']); ?><br>
	<strong>(b) Father's / Husband's Name :</strong><?php echo (" " . $row['p_f_or_h_name']); ?><br>
	<strong>(c) Address:</strong><?php echo (" " . $row['p_address']); ?><br>
	<strong>(d) Phone number & Fax</strong><?php echo (" " . $row['p_phone']); ?><br>
	<strong>(e) Email: </strong><?php echo (" " . $row['p_email']); ?><br>
	<br><br>
	<strong>2. Place of Occurrence:</strong><?php echo (" " . $row['']); ?><br>
	<strong>a) Distance from the police station :</strong><?php echo (" " . $row['dist_from_p_s']); ?><br>
	<strong>b) Direction from the police station :</strong><?php echo (" " . $row['direct_from_p_s']); ?><br>
	<br><br>
	<strong>3. Date Occurrence: </strong> <?php echo (" " . $row['date_of_occ']); ?><br>
	<strong> Time Occurrence: </strong> <?php echo (" " . $row['time_of_occ']); ?><br><br><br>
	<strong>4. Offence:  </strong><br>
	<strong>a) Nature of the offence :</strong><?php echo (" " . $row['nature_of_offence']); ?><br>
	<strong>b) Section :</strong><?php echo (" " . $row['section']); ?><br>
	<br><br>
	<strong>5. Description of the accused: </strong><?php echo (" " . $row['description']); ?><br>
		</td>
		<td></td>

	</tr>
	<tr><td width="450px"></td><td><img src="img/sign.png" width="100px"></td></tr>
	<tr><td width="450px"></td><td>Sign of Authorized Police Officer</td></tr>
</table>

</body>
</html>
