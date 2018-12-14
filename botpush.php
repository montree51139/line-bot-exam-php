<?php


require "vendor/autoload.php";

$access_token = 'NVUaJzyIa7s4wNxVEE0VNnZqxV8soHPZa7qPIqmdwdRk1IKB55wFYAD2H1PwyUDF81XDGjrVlHtzThJeWWrMjPwLLggGRUNFr04xXyHVWFBRQJDTslKwrhCrErj0gUvN7nAYMFwqyWCuDPvnJ0qsVQdB04t89 / 1O / w1cDnyilFU =';

$channelSecret = '80aab8b2e9f7734926d37a98834b5f7a';

$pushID = 'Ueac469ec6c9f1c655acd64434090854c';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

$response->getHTTPStatus() . ' ' . $response->getRawBody();

 
?>




