<?php
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
