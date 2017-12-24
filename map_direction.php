<?php
$lat = $_POST['lat'];
$lng = $_POST['lng'];
$p_s_lat = 22.998537;
$p_s_lng = 72.602333;

if($lat > $p_s_lat && $lng > $p_s_lng){echo("North East");}
else if($lat < $p_s_lat && $lng > $p_s_lng){echo("South East");}
else if($lat < $p_s_lat && $lng < $p_s_lng){echo("South West");}
else if($lat > $p_s_lat && $lng < $p_s_lng){echo("North West");}
else if($lat > $p_s_lat && $lng == $p_s_lng){echo("North");}
else if($lat == $p_s_lat && $lng > $p_s_lng){echo("East");}
else if($lat < $p_s_lat && $lng == $p_s_lng){echo("South");}
else if($lat == $p_s_lat && $lng < $p_s_lng){echo("West");}

?>