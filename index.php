<?php
session_start(); // Inicia sessão
ob_start(); // Buffer de saída

//Constante que define que o usuário está acessando páginas internas através da página "index.php".
define('C7E3L8K9E5', true);

//Carregar o Composer
require './vendor/autoload.php';

//Instanciar a classe ConfigController, responsável em tratar a URL
$url = new Core\ConfigController();

//Instanciar o método para carregar a página/controller
$url->loadPage();
