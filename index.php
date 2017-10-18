<?php
  require_once 'twilio-php-master/Twilio/autoload.php'; // Loads the library
    use Twilio\Rest\Client;
    $account_sid = 'AC2e9c00392eaa46066009decbfbfb2a20'; 
    $auth_token = 'db1c9561751d6cc167391321b60d6fa7'; 
    $client = new Client($account_sid, $auth_token); 
?>