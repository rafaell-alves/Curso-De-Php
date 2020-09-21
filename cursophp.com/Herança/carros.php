<?php

class Veiculos{
    public $modelo;
    public $cor;
    public $ano;

    public function Andar(){
        echo "Andou";
    }
    public function Parar(){
        echo "Parou";
    }
    
}

class Carros extends Veiculos{

    public function ligarLimpador(){
        echo "Limpando 321";
    }
}
class Moto extends Veiculos{
    public function darGrau(){
        echo "Dando Grau em 321";
    }
}

$carro = new Carros();
$carro -> modelo = "Gol";
$carro -> cor = "Amarelo";
$carro -> ano = "2010";
$carro -> Andar();
$carro -> ligarLimpador();
var_dump($carro);

$motos = new Moto();
$motos -> modelo = "Honda";
$motos -> cor = "Preta";
$motos -> ano = "2010";
$motos -> Andar();
$motos -> darGrau();
var_dump($motos);