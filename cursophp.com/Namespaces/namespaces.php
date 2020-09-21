<?php


require 'classes/produto.php';
require 'models/produto.php';

use models\Produtos as productModel;

use classes\Produtos as productClasses;


$produto = new productModel();
$produto -> mostrarDetalhes();

echo "<br>";

$produto2 = new productClasses();
$produto2 -> mostrarDetalhes();