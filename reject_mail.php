<?php

include 'db_connect.php';

$policy_no = $_GET['p_no'];

require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP(); // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
$mail->SMTPAuth = true; // Enable SMTP authentication
$mail->Username = 'neelpatel981119@gmail.com'; // SMTP username
$mail->Password = 'n8758855301'; // SMTP password
$mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587; // TCP port to connect to

$mail->setFrom('neelpatel981119@gmail.com', 'Integration System');
$mail->addReplyTo('neelpatel981119@gmail.com', 'Integration System');
$mail->addAddress('neelpatel.6531@gmail.com'); // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true); // Set email format to HTML

$bodyContent = '<h3>Integration System</h3>';
$bodyContent .= '<p>Your Policy Number is ' . $policy_no . '.<br> and  your Claim ID is ' . $c_id . '<br>
 <strong style="color: #f10032">Your policy claim unsuccessfully, Sorry....!</strong></p>';

$mail->Subject = 'Integration Claim Details';
$mail->Body = $bodyContent;

if (!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
    ?><script>window.location.href = "claim_request.php";</script><?php
$sql1 = "update `hackathon2018`.`claim` set `status`='1' where c_id='$c_id'";
    $result1 = mysqli_query($conn, $sql1);

}

//-------------------------------------------------message------------------------------------------------
include '../msg/way2sms-api.php';
$client = new WAY2SMSClient();
$client->login('8758855301', '8866560521');
$client->send('8758855301', 'Your Policy Number is ' . $policy_no . 'and  your Claim ID is ' . $c_id . ', Your policy claim unsuccessfully, Sorry....!.');
//Add sleep between requests to make this requests more human like!
//A blast of request's may mark the ip as spammer and blocking further requests.

$client->logout();

?>