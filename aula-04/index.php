<?php

include 'Usuario.php';
include 'Cliente.php';
include 'Gestor.php';

$c1 = new Cliente('usuario1@teste.com', '123456');
$c1->setNome('Clebinho');

$g1 = new Gestor('gestor1@empresa.com', 'senha123', 3000);
$g1->setNome('Adamastor');

var_dump($c1);
var_dump($g1);
