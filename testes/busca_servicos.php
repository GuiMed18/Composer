<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client();

$resposta_acesso = $client->request("GET","https://www.marilia.sp.gov.br/portal/carta-servicos/1/0/0/0/cidadao/0/");

$corpo_html = $resposta_acesso->getBody();

$crawler = new Crawler();
$crawler->addHtmlContent($corpo_html);
$servicos = $crawler->filter('div.cs_titulo_servico');

foreach($servicos as $servico){  

   echo $servico->textContent.'<br>';
   
}







?>