<?php

use GuzzleHttp\Client;

$client = new Client(['verify' => false]);
$resposta = $client->request('GET', 'https://www.alura.com.br/cursos-online-programacao/php');
$html = $resposta->getBody();