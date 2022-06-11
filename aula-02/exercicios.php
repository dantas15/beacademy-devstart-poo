<?php

declare(strict_types=1);

// Make getters and setters for:

// 1. Aluno
class Aluno
{
  private string $nome;
  private string $cpf;

  public function setNome(string $nome): void
  {
    $this->nome = $nome;
  }

  public function getNome(): string
  {
    return $this->nome;
  }

  public function setCpf(string $cpf): void
  {
    $this->cpf = $cpf;
  }

  public function getCpf(): string
  {
    return $this->cpf;
  }
}


// 2. Curso
class Curso
{
  private string $nome;
  private string $descricao;
  private float $cargaHoraria;

  public function setNome(string $nome)
  {
    $this->nome = $nome;
  }

  public function getNome(): string
  {
    return $this->nome;
  }

  public function setDescricao(string $descricao)
  {
    $this->descricao = $descricao;
  }

  public function getDescricao(): string
  {
    return $this->descricao;
  }

  public function setCargaHoraria(float $cargaHoraria)
  {
    $this->cargaHoraria = $cargaHoraria;
  }

  public function getCargaHoraria(): float
  {
    return $this->cargaHoraria;
  }
}

// 3. Professor
class Professor
{
  private string $nome;
  private string $cpf;
  private float $salario;


  public function setNome(string $nome)
  {
    $this->nome = $nome;
  }

  public function getNome(): string
  {
    return $this->nome;
  }

  public function setCpf(string $cpf)
  {
    $this->cpf = $cpf;
  }

  public function getCpf(): string
  {
    return $this->cpf;
  }

  public function setSalario(float $salario)
  {
    $this->salario = $salario;
  }

  public function getSalario(): float
  {
    return $this->salario;
  }
}
