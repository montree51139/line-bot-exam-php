<?php


require "vendor/autoload.php";

$access_token = 'NVUaJzyIa7s4wNxVEE0VNnZqxV8soHPZa7qPIqmdwdRk1IKB55wFYAD2H1PwyUDF81XDGjrVlHtzThJeWWrMjPwLLggGRUNFr04xXyHVWFBRQJDTslKwrhCrErj0gUvN7nAYMFwqyWCuDPvnJ0qsVQdB04t89 / 1O / w1cDnyilFU =';

$channelSecret = '80aab8b2e9f7734926d37a98834b5f7a';

$pushID = 'Uac22acfa9b652d8017dc44e1f0fc7f12';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

$response->getHTTPStatus() . ' ' . $response->getRawBody();

 
?>




