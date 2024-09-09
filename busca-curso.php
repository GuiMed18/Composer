<?php
require 'vendor/autoload.php'; //Faz o carregamento de todas as classes instaladas

use GuzzleHttp\Client; //Inicializa a classe Client e Crawler
use Symfony\Component\DomCrawler\Crawler;

$client = new Client();
$resposta = $client->request('GET', 'https://www.alura.com.br/cursos-online-programacao/php'); //Request para URL

$html = $resposta->getBody(); //Contém o corpo do link

$crawler = new Crawler();
$crawler->addHtmlContent($html); //Adiciona o conteúdo do html
$cursos = $crawler->filter("span.card-curso__nome"); //Aqui, pegamos todos os span com a id card-curso__nome, no site da alura

foreach($cursos as $curso){
   echo $curso->textContent."<br>"; //Interamos cada conteúdo de texto dentro dos span
}





?>