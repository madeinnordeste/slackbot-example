<?php 

//More information on slack.com integrations

echo "Slackbot\n";

$DOMAIN = 'YOUSLACKDOMAIN';
$TOKEN = 'YOUTOKEN';
$CHANNEL = 'general';

$text = 'Houston, we have a problem!';

$url = 'https://'.$DOMAIN.'.slack.com/services/hooks/slackbot?token='.$TOKEN.'&channel=%23'.$CHANNEL;

//send to slack
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POSTFIELDS, $text);
$result = curl_exec($ch);
curl_close($ch);


//print result
echo $result;

 ?>