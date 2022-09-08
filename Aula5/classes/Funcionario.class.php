<?php
require_once("Pessoa.class.php");

class Funcionario extends Pessoa{
    public $nome;
    public $cpf;
    public $rg;

    public function setFuncionario ( $nome, $cpf, $rg ):void
    {
        $this->nome = $nome;
        $this->cpf  = $cpf;
        $this->rg   = $rg;
    }
}
