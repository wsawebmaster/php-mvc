<?php
class galeriaController extends controller {

    public function index() {
        $dados = array(
            'qt' => 5,
        );

        $this->loadTemplate('galeria', $dados);
    }

}