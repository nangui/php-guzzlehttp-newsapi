<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;

const API_KEY = "8ca61d6af0fb4b179617244f60faeaa9";
const BASE_URI = "https://newsapi.org/v2/";

$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => BASE_URI,
]);

$uri = 'top-headlines?sources=bbc-news&apiKey='.API_KEY;

$response = $client->request('GET', $uri);

$content = json_decode($response->getBody()->getContents(), true);

$articles = $content['articles'];