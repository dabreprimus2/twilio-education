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
	$number = $_POST['From'];
$body = $_POST['Body'];
$url = 'https://raw.githubusercontent.com/samayo/country-json/master/src/country-by-population.json';
$file = file_get_contents($url);
$data = json_decode($file, true);

    foreach ($data as $character) {  
        if($character['country'] == $body) {
          $population = $character['population'];        
            echo "<Response>
    <Message>
           Population of " . $body . " is " . $population . "
    </Message>
</Response>
";
            break;
        }
    }
header('Content-Type: text/xml');
echo "Enter Country name to know its population";

?>