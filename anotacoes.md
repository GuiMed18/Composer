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