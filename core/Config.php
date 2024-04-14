<?php

namespace Core;

if (!defined('C7E3L8K9E5')) {
    header("Location: /");
    die("Erro: Página não encontrada<br>");
}

/**
 * Configurações básicas do site.
 *
 * @author Wagner Andrade <wsawebmaster@yahoo.com.br>
 */

define("ENVIRONMENT", "development");
//define("ENVIRONMENT", "production");

abstract class Config
{
    /**
     * Possui as constantes com as configurações.
     * Configurações de endereço do projeto.
     * Página principal do projeto.
     * Credenciais de acesso ao banco de dados
     * E-mail do administrador.
     *
     * @return void
     */
    protected function config(): void
    {
        if (ENVIRONMENT == 'development') {
            //configurações do servidor local
            define('URL', 'http://localhost/estrutura_mvc/');
            define('URLADM', 'http://localhost/estrutura_mvc/adm/');

            define('CONTROLLER', 'Home');
            define('METODO', 'index');
            define('CONTROLLERERRO', 'Erro');

            //Credenciais do banco de dados
            define('HOST', 'localhost');
            define('USER', 'root');
            define('PASS', '');
            define('DBNAME', 'estrutura_mvc');
            define('PORT', 3306);

            define('EMAILADM', 'wsawebmaster@yahoo.com.br');
        } else {
            //configurações do servidor externo
            define("URL", "http://meusite.com.br/estrutura_mvc/");
            define('URLADM', 'http://meusite.com.br/estrutura_mvc/adm/');
        }
    }
}
