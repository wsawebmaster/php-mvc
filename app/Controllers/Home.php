<?php

namespace Controllers;

// Redirecionar ou para o processamento quando o usuário não acessa o arquivo index.php
if (!defined('C7E3L8K9E5')) {
    header("Location: /");
    die("Erro: Página não encontrada!");
}

/**
 * Controller da página Home
 *
 * @author Wagner Andrade <wsawebmaster@yahoo.com.br>
 */
class Home
{

    /** @var array|string|null $dados Recebe os dados que devem ser enviados para VIEW */
    private array|string|null $data;

    /**
     * Instanciar a MODELS e receber o retorno
     * Instanciar a classe responsável em carregar a View e enviar os dados para View.
     *
     * @return void
     */
    public function index(): void
    {
        $home = new \Models\Home();
        $this->data['home'] = $home->index();

        $listSeo = new \Models\Seo();
        $this->data['seo'] = $listSeo->index();

        $footer = new \Models\Footer();
        $this->data['footer'] = $footer->index();

        $loadView= new \Core\ConfigView("Views/home/home", $this->data);
        $loadView->loadView();
    }
}
