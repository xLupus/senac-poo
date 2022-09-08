<?php
class Pessoa{
    private $email;
    private $telefone;
    private $cep;
    private $logradouro;
    private $número;

    function setPessoa( $email, $tel, $cep, $log, $num): void
    {
      $this->email      = $email;
      $this->telefone   = $tel;
      $this->cep        = $cep;
      $this->logradouro = $log;
      $this->numero     = $num;
  }

    function exibirPessoa ( $html ): void
    {
      echo $html;
    }
}
