<?php

declare(strict_types=1);

final class Cliente extends Usuario
{
  private string $dataCadastro;
  
  public function __construct(string $email, string $senha)
  {
    parent::__construct($email, $senha);
  }

  /**
   * @return string
   */
  public function getDataCadastro(): string
  {
    return $this->dataCadastro;
  }

  /**
   * @param string $dataCadastro
   */
  public function setDataCadastro(string $dataCadastro): void
  {
    $this->dataCadastro = $dataCadastro;
  }
}
