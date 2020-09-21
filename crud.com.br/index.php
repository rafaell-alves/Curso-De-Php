<?php

require_once 'vendor/autoload.php';

$produto = new \App\Model\Produto();
$produto -> setId(1);
$produto-> setNome('Televisão LG');
$produto->setDescricao('Smart HD');

$produtoDao = new \App\Model\ProdutoDao();
$produtoDao -> delete(1);
//$produtoDao -> create($produto);
$produtoDao -> read();

foreach($produtoDao->read() as  $produto):
    echo $produto['nome']."<br>".$produto['descricao']."<hr>";
endforeach;