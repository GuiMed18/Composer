# Anotações Composer

Composer é um gerenciador de dependências

Ele realiza a instalação das dependências (Symphony, laravel, redis)

Para começar a utilizar, precisa criar o arquivo no projeto - composer.json

o arquivo composer.json não pode estar vazio, precisa ter pelo menos um "{}"

## Composer init - Criação da estrutura do JSON

* Package Name: seu-nickname/buscador-cursos
* Description: Projeto que busca cursos no site da alura - colocar a descrição sobre o projeto
* Author: Seu Nome - Se já tiver iniciado um repositório GIT, ele puxará automático
* Minimum Stability: deixa em branco - Função serve habilitar a busca por pacotes em desenvolvimento ou somente completos
* Package Type: library - Library é padrão
* License: deixa em branco


Vai criar o arquivo JSON, com as informações do projeto no composer

## **Exemplo de estrutura após a criação:**

`` 
{
    "name": "guilhe1811/buscador_cursos",
    "description": "Projeto que busca cursos na alura",
    "type": "library",
    "autoload": {
        "psr-4": {
            "Guilhe1811\\BuscadorCursos\\": "src/"
        }
    },
    "authors": [
        {
            "name": "GuiMed18",
            "email": "guilhe1811@gmail.com"
        }
    ],
    "require": {}
}
``
## Buscando pacotes

O Composer possui um repositório principal, o packagist //link aqui
No packagist podemos buscar pacotes públicos, mas também é possível configurar o composer para buscar de qualquer lugar, seja um site corporativo ou até mesmo no github

Para o exemplo, vamos usar o Guzzle (http client - fazer requisições http) e o DomCrawler (Faz a leitura do html)

Para instalar, é possível de duas maneiras

Pegar o comando composer require "pacote do packagist" -> Vai instalar automático

No composer.json, inserir manualmente o pacote e a versão 

`` "require": {
        "guzzlehttp/guzzle": "^7.9",
        "symphony/dom-crawler": "^7.1.1"
    }
``

Após finalizar as inserções, dar um composer install

composer.lock -> Fica as informações de todos os pacotes

Vamos supor que o dom-crawler teve a versão atualizada para ^7.2.1

Alterar no composer.json, depois rodar um composer update, para subir as informações de versão para o projeto

O ^ significa que se houver versões superiores, ele instala ex ^7.3.5

O autoload faz o carregamento de todas as classes instaladas dentro do composer, sem necessidade de puxar uma a uma

``
require 'vendor/autoload.php';
 ``
 

