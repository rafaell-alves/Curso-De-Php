<?php

class Pessoa{
    public function atribuiNome($nome){
        return "O nome da pessoa é ".$nome;
    }
}

class Exibe{
    public $pessoa;
    public $nome;

    function __construct($nome){
        $this->pessoa =new Pessoa();
        $this -> nome = $nome;
    }

    public function ExibeNome(){
        echo $this->pessoa->atribuiNome($this->nome);
    }
}

$exibe = new Exibe("Rafael");

$exibe -> ExibeNome();