<?php

class Pedido {
    public $numero;
    public $cliente;
}

class Cliente
{
    public $nome;
    public $endereco;
}
$cliente =  new Cliente();

$cliente -> nome = "Rafael";
$cliente -> endereco = "Av. Algum Lugar";

$pedido = new Pedido();
$pedido -> numero = 43;
$pedido -> cliente = $cliente;

$dados = array(
    'numero' => $pedido ->numero,
    'nome' => $pedido -> cliente ->nome,
    'endereco_cliente' => $pedido -> cliente ->endereco  
);
var_dump($dados);