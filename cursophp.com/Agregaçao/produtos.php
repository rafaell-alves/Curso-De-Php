<?php

class  Produtos 
{
    public $nome ;
    public $valor;

    function __construct($nome,$valor)
    {
        $this->nome = $nome;
        $this->valor = $valor;
    }
}

class Carrinho{
    public $produtos;

    public function adicionaProduto(Produtos $produto){
        $this->produtos[]=$produto;
    }
    
    public function Exibi(){
        foreach($this->produtos as $produto){
            echo $produto->nome."<br>";
             echo $produto->valor. "<hr>";
        }
    }
}

$produto1 = new Produtos("Notebook",1500);
$produto2 = new Produtos('Mouse',50);

$carrinho = new Carrinho();
$carrinho ->adicionaProduto($produto1);
$carrinho ->adicionaProduto($produto2);
$carrinho -> Exibi();
