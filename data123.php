<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api.zalando.com/articles?fullText=hoodies');        
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);

$r = curl_exec($ch);

print_r($r);


$content = file_get_contents($ch);
$json = json_decode($content, true);

echo $data[0]->weather->weatherIconUrl[0]->value;


foreach($json['data']['weather'] as $item) {
    print $item['id	'];
    print ' - ';
    print $item['weatherDesc'][0]['value'];
    print ' - ';
    print '<img src="' . $item['weatherIconUrl'][0]['value'] . '" border="0" alt="" />';
    print '<br>';
}



?>

<!DOCTYPE html>
<html>
<body>

<h2>JSON Object Creation in JavaScript</h2>

<p id="demo"></p>

<script>
var text = '{"name":"John Johnson","street":"Oslo West 16","phone":"555 1234567"}';

var obj = JSON.parse(text);

document.getElementById("demo").innerHTML =
obj.name + "<br>" +
obj.street + "<br>" +
obj.phone;
</script>

</body>
</html>