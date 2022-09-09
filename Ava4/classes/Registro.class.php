<?php

class Registro{
  private $id_cli;
  private $login;
  private $email;
  private $telefone;
  private $validado;
  private $codAcesso;
  private $tipo;

  public function setUsuario($login, $email, $telefone)
  {
    $this->login    = $login;
    $this->email    = $email;
    $this->telefone = $telefone;
  }

  public function setRegistrar()
  {
    $pass = rand(0, 9);

    for ($i = 0; $i < 5; $i++) {
      $pass .= rand(0, 9);
    }


  }
}
