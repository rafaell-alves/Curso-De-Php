<?php

class Veiculos{
    private $modelo;
    public $cor;
    public $ano;

    public function Andar(){
        echo "Andou";
    }
    public function Parar(){
        echo "Parou";
    }
    public function setModelo($m)
    {
        $this->modelo = $m;
    }
    public function getModelo(){
        return $this->modelo;
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
$carro -> setModelo("Gol");
$carro -> cor = "Amarelo";
$carro -> ano = "2010";
echo $carro -> getModelo();
var_dump($carro);
