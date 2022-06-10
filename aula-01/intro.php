<?php

include 'Aluno.php';
include 'Professor.php';
include 'Curso.php';


$a1 = new Aluno(); // instanciando
$a1->cpf = '12345678909';
$a1->nome = 'Gustavo';

$cursoPHP = new Curso();
$cursoPHP->nome = 'Introdução ao PHP';
$cursoPHP->cargaHoraria = 88;
$cursoPHP->descricao = 'Aprender o básico e o intermediário de PHP';

echo "<h1>Aluno: {$a1->nome}</h1>";
