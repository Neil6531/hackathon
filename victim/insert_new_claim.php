<?php
include('../db_connect.php');
$policy_no = $_POST['policy_no'];
$fir_no = $_POST['fir_no'];
$p_s_name = $_POST['p_s_name'];
$name = $_POST['name'];
$no_name = $_POST['no_name'];
$no_phone = $_POST['no_phone'];
$no_email = $_POST['no_email'];
$com_name = $_POST['com_name'];

//echo($policy_no."  ".$fir_no."  ".$p_s_name."  ".$name."  ".$no_name."  ".$no_phone."  ".$no_email."  ".$com_name);
$sql = "INSERT INTO `hackathon2018`.`claim` (`fir_no`,`policy_no`, `p_s_name`, `name`, `no_name`, `no_phone`, `no_mail`, `com_name`) VALUES ('$fir_no','$policy_no', '$p_s_name', '$name', '$no_name', '$no_phone', '$no_email', '$com_name')";
$result = mysqli_query($conn,$sql);
if($result){echo("Yes");}
else{ echo("No"); }

//-------------------------------------------------mail------------------------------------------------

require '../PHPMailer/PHPMailerAutoload.php';


$sql_s = "select * from claim where policy_no = '$policy_no'";
$result = mysqli_query($conn,$sql_s);
$row = mysqli_fetch_array($result);
$c_id = $row['c_id'];
$mail = new PHPMailer;

$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'neelpatel981119@gmail.com';          // SMTP username
$mail->Password = 'n8758855301'; // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                          // TCP port to connect to

$mail->setFrom('neelpatel981119@gmail.com', 'Integration System');
$mail->addReplyTo('neelpatel981119@gmail.com', 'Integration System');
$mail->addAddress($no_email);   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h3>Integration System</h3>';
$bodyContent .= '<p>Your claim request is recieved for Policy Number '.$policy_no.'.<br>Your Claim ID is '.$c_id.'<br>
 Please Check <a herf="localhost:8888/sih2k18/victim">Click Here</a> </p>';

$mail->Subject = 'Integration Claim Details';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}




//-------------------------------------------------message------------------------------------------------
include('../msg/way2sms-api.php');
    $client = new WAY2SMSClient();
    $client->login('8758855301', '8866560521');
    $client->send('8758855301', 'Your claim has been completed. Your Policy Number is '.$policy_no.' and Claim ID is '.$c_id);
    //Add sleep between requests to make this requests more human like! 
    //A blast of request's may mark the ip as spammer and blocking further requests.
    
    $client->logout();


?>