<?php

class Pessoa 
{
    private $dados = array();

    public function __set($nome,$valor){
        $this-> dados[$nome] = $valor;
    }
    public function __get($nome){
        return $this->dados[$nome];
    }
    public function __tostring(){
        return "Tentei Imprimir o objeto";
    }
    public function __invoke(){
        return "Objeto como função";
    }
}

$pessoa = new Pessoa();
$pessoa ->nome = "Rafael";
$pessoa->idade = 18;
$pessoa->sexo = "Masculino";
echo $pessoa;