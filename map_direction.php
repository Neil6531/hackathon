<?php
session_start();
$lat = round($_POST['lat'],3);
$lng = round($_POST['lng'],3);
$p_s_lat = round($_SESSION['p_s_lat'],3);
$p_s_lng = round($_SESSION['p_s_lng'],3);

if($lat > $p_s_lat && $lng > $p_s_lng){echo("North East");}
else if($lat < $p_s_lat && $lng > $p_s_lng){echo("South East");}
else if($lat < $p_s_lat && $lng < $p_s_lng){echo("South West");}
else if($lat > $p_s_lat && $lng < $p_s_lng){echo("North West");}
else if($lat > $p_s_lat && $lng == $p_s_lng){echo("North");}
else if($lat == $p_s_lat && $lng > $p_s_lng){echo("East");}
else if($lat < $p_s_lat && $lng == $p_s_lng){echo("South");}
else if($lat == $p_s_lat && $lng < $p_s_lng){echo("West");}
else {echo("Near by Police Station");}
?>