<?php

declare(strict_types=1);

class Produto
{
  private string $nome;
  private float $valor;

  public function getNome(): string
  {
    return $this->nome; // This faz referência ao objeto que está chamando o método
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
}
