<?php

class Usuario
{
  private string $nome;
  private string $email;
  private string $senha;
  private string $cpf;

  /**
   * @return string
   */
  public function getNome(): string
  {
    return $this->nome;
  }

  /**
   * @param string $nome
   */
  public function setNome(string $nome): void
  {
    $this->nome = $nome;
  }

  /**
   * @return string
   */
  public function getEmail(): string
  {
    return $this->email;
  }

  /**
   * @param string $email
   */
  public function setEmail(string $email): void
  {
    $this->email = $email;
  }

  /**
   * @return string
   */
  public function getSenha(): string
  {
    return $this->senha;
  }

  /**
   * @param string $senha
   */
  public function setSenha(string $senha): void
  {
    $this->senha = $senha;
  }

  /**
   * @return string
   */
  public function getCpf(): string
  {
    return $this->cpf;
  }

  /**
   * @param string $cpf
   */
  public function setCpf(string $cpf): void
  {
    $this->cpf = $cpf;
  }
}
