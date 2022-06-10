<?php

declare(strict_types=1);

class Curso
{
    public $nome;
    public $duracao;
    public $maxAlunos;
}

class Professor
{
    public $nome;
    public $idade;
    public $salario;
}

class Disciplina
{
    public $professor;
    public $curso;
    public $nome;
}