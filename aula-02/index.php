<?php

include 'Produto.php';

$p1 = new Produto();
$p1->setNome('Tênis para corrida');
$p1->setValor(350);

$p2 = new Produto();
$p2->setNome('Calça Jeans');
$p2->setValor(94.5);


// *-*-*-*-* Antes dos Getters e Setters
// $p1 = new Produto();
// $p1->nome = 'Tênis';
// $p1->valor = 350;

// $p1 = new Produto();
// $p1->nome = 'Calça Jeans';
// $p1->valor = 100;
