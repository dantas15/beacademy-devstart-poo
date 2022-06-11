<?php

include 'Produto.php';
include 'Categoria.php';

$c1 = new Categoria('Roupas', 'Roupas Unissex');
$c2 = new Categoria('Imóveis', 'Para mobiliar sua casa!!');
$c3 = new Categoria('Calçados', 'Calçados em geral');

var_dump($c1);
var_dump($c2);
var_dump($c3);

$p1 = new Produto('Tênis para corrida', 350, $c3);
$p2 = new Produto('Sofá', 1000, $c2);
$p2 = new Produto('Calça Jeans', 94.5, $c1);

var_dump($p1);
var_dump($p2);
