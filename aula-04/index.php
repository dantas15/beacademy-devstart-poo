<?php

include 'Usuario.php';
include 'Cliente.php';
include 'Gestor.php';

$c1 = new Cliente();
$c1->setNome('Clebinho');

$g1 = new Gestor();
$g1->setNome('Adamastor');

var_dump($c1);
var_dump($g1);
