<?php namespace Desafio;

require_once "LivroTecnico.php";

class LivroTPWeb extends LivroTProgramacao{
    public function __construct()
    {
        echo 'Livros de Programação Web';
    }

}

?>