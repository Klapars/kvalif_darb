<?php

require 'vendor/autoload.php';
use Goutte\Client;
$client = new Client();
$url = "https://www.bbc.com/news/topics/cgdzpg5yvdvt/stock-markets";
$crawler = $client->request('GET', $url);
$news = $crawler->filter("<headline's selector>")->text();
echo($news."\n");
?>