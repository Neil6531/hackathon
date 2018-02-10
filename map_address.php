<?php
session_start();
$lat = $_POST['lat'];
$lng = $_POST['lng'];
$p_s_lat = $_SESSION['p_s_lat'];
$p_s_lng = $_SESSION['p_s_lng'];

$url = "https://maps.googleapis.com/maps/api/distancematrix/json?origins=".$p_s_lat.",".$p_s_lng."&destinations=".$lat."%2C".$lng."&key=AIzaSyDl2rTMQRXoWdblHPCrDJPkOns0SeqlxFM";
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = json_decode(curl_exec($ch), true);
    
    if($response['status'] == "OK"){
        $dist = $response['destination_addresses'][0];
        echo "$dist";
    }
?>