<?php

// Redirecionar ou para o processamento quando o usuário não acessa o arquivo index.php
if (!defined('C7E3L8K9E5')) {
   header("Location: /");
   die("Erro: Página não encontrada!");
}

echo "<h1>Página Inicial</h1>";

//var_dump($this->data[0]);
//echo "ID: {$this->data['id']}<br>";

