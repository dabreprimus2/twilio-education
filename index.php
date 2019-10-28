<?php
  require_once 'twilio-php-master/Twilio/autoload.php'; // Loads the library
    use Twilio\Rest\Client;
    $account_sid = 'AC2e9c00392eaa46066009decbfbfb2a20'; 
    $auth_token = 'db1c9561751d6cc167391321b60d6fa7'; 
    $client = new Client($account_sid, $auth_token); 
  require _DIR_ .'/vendor/autoload.php'; // Loads the library
    use Twilio\Rest\Client;
    $account_sid = 'AC2e9c00392eaa46066009decbfbfb2a20'; 
    $auth_token = 'db1c9561751d6cc167391321b60d6fa7'; 
    $client = new Client($account_sid, $auth_token); 
include 'keygen.php'
	$number = $_POST['From'];
$body = $_POST['Body'];
$url = 'https://services.hi-techhealth.com:4440/tsa/SIGNON.php';
$file = file_get_contents($url);
echo "<Response>
    <Message>
           Your token to login is" . random_generator_phone($digits)."."
    </Message>
</Response>
";
header('Content-Type: text/xml');


?>
