<?php

declare(strict_types=1);

class GestorGeral extends Gestor
{
  private float $bonusAnual;

  /**
   * @return float
   */
  public function getBonusAnual(): float
  {
    return $this->bonusAnual;
  }

  /**
   * @param float $bonusAnual
   */
  public function setBonusAnual(float $bonusAnual): void
  {
    $this->bonusAnual = $bonusAnual;
  }


}
