<?php 
    include('way2sms-api.php');
    $client = new WAY2SMSClient();
    $client->login('8460015851', 'Q6223M');
    $client->send('8758855301', 'msg1');
    //Add sleep between requests to make this requests more human like! 
    //A blast of request's may mark the ip as spammer and blocking further requests.
    
    $client->logout();
?>

