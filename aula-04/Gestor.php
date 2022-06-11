<?php

declare(strict_types=1);

class Gestor extends Usuario
{
  private float $salario;
  private string $horario;

  /**
   * @return float
   */
  public function getSalario(): float
  {
    return $this->salario;
  }

  /**
   * @param float $salario
   */
  public function setSalario(float $salario): void
  {
    $this->salario = $salario;
  }

  /**
   * @return string
   */
  public function getHorario(): string
  {
    return $this->horario;
  }

  /**
   * @param string $horario
   */
  public function setHorario(string $horario): void
  {
    $this->horario = $horario;
  }
}
