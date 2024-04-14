<?php
require 'environment.php';

$config = array();

if(ENVIRONMENT == 'development') {
    //configurações do servidor local
    define("BASE_URL", "http://localhost/estrutura_mvc/");
    $config['dbname'] = 'estrutura_mvc';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
} else {
    //configurações do servidor externo
    define("BASE_URL", "http://meusite.com.br/estrutura_mvc/");

}

global $db;
try {
    $db= new PDO("mysql:dbname=".$config['dbname'].";host".$config['host'], $config['dbuser'], $config['dbpass']);
} catch(PDOException $e) {
    echo "ERRO: ".$e->getMessage();
    exit;
}