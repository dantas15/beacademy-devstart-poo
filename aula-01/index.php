<?php

ini_set('display_errors', 1);

include 'Aluno.php';
include 'Professor.php';
include 'Curso.php';


$p1 = new Professor();
$p1->nome = 'Alessandro';
$p1->cpf = '12345678909';
$p1->salario = 1000;

var_dump($p1);
