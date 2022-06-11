<?php

declare(strict_types=1);

class Produto
{
  private string $nome;
  private float $valor;
  private string $descricao;

  public function __construct(string $nome, float $valor)
  {
    $this->nome = $nome;
    $this->valor = $valor;
  }

  public function getNome(): string
  {
    return $this->nome;
  }

  public function setNome(string $nome): void
  {
    $this->nome = $nome;
  }

  public function getValor(): float
  {
    return $this->valor;
  }

  public function setValor(float $valor): void
  {
    if (!$valor < 0) {
      die('Ops, valor não pode ser negativo!');
    }

    $this->valor = $valor;
  }

  public function getDescricao(): string
  {
    return $this->descricao;
  }

  public function setDescricao(string $descricao): void
  {
    $this->descricao = $descricao;
  }
}
