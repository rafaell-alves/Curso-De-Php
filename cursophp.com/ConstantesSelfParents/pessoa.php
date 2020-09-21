<?php

class Pessoa{
    const nome = "Rafael";
    public function exibirNome(){
        echo self::nome;
    }
}

class Rafael extends Pessoa{
    const nome = "Alves";

    public function exibirNome(){
        echo parent::nome;
    }
}

$pessoa = new Rafael();
$pessoa -> exibirNome();