<?php

class Veiculos{
    private $modelo;
    public $cor;
    public $ano;

    protected function Andar(){
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
    public function MostrarAction()
    {
        $this -> Andar();
    }
}
class Moto extends Veiculos{
    public function darGrau(){
        echo "Dando Grau em 321";
    }
}

$carro = new Carros();
$carro -> MostrarAction();
