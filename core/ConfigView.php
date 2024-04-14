<?php

namespace Core;

if(!defined('C7E3L8K9E5')){
    header("Location: /");
    die("Erro: Página não encontrada<br>");
}

/**
 * Carregar as páginas da View
 *
 * @author Wagner Andrade <wsawebmaster@yahoo.com.br>
 */
class ConfigView
{

    /**
     * Receber o endereço da VIEW e os dados.
     * @param string $nameView Endereço da VIEW que deve ser carregada
     * @param array|string|null $data Dados que a VIEW deve receber.
     */
    public function __construct(private string $nameView, private array|string|null $data)
    {
    }

    /**
     * Carregar a VIEW.
     * Verificar se o arquivo existe, e carregar caso exista, não existindo apresenta a mensagem de erro
     *
     * @return void
     */
    public function loadView():void
    {
        if(file_exists('app/' .$this->nameView . '.php')){
            include 'app/Views/include/head.php';
            include 'app/Views/include/navbar.php';
            include 'app/Views/include/menu.php';
            include 'app/' .$this->nameView . '.php';
            include 'app/Views/include/footer.php';
        }else{
            die("Erro - 002: Por favor tente novamente. Caso o problema persista, entre em contato o administrador " . EMAILADM);
        }
    }

    /**
     * Carregar a VIEW login.
     * Verificar se o arquivo existe, e carregar caso exista, não existindo apresenta a mensagem de erro
     *
     * @return void
     */
    public function loadViewLogin():void
    {
        if(file_exists('app/' .$this->nameView . '.php')){
            include 'app/Views/include/head_login.php';
            include 'app/' .$this->nameView . '.php';
            include 'app/Views/include/footer_login.php';
        }else{
            die("Erro - 005: Por favor tente novamente. Caso o problema persista, entre em contato o administrador " . EMAILADM);
        }
    }
}
