<?php

require_once "Pessoa.class.php";

class Cliente extends Pessoa{
    private $rg;
    private $cpf;
    private $sexo;


    public function setDatabaseConnection(){
        $mysqli = new mysqli('localhost','Lupus', 'SL-221B-VAS', 'protocolo');
        return $mysqli;
    }


    public function setCliente($nome, $telefone, $email, $rg, $cpf, $sexo){
        $this->nome     = $nome;
        $this->telefone = $telefone;
        $this->email    = $email;
        $this->rg       = $rg;
        $this->cpf      = $cpf;
        $this->sexo     = $sexo;
    }


    public function cadastrarCliente(){
        $mysqli = $this->setDatabaseConnection();

        $stmt = $mysqli->prepare("INSERT INTO clientes (nome, celular, email, rg, cpf, sexo)
                          VALUES (?, ?, ?, ?, ?, ?)");

        $stmt->bind_param('ssssss', $this->nome, $this->telefone, $this->email, $this->rg, $this->cpf, $this->sexo );

        if ($stmt->execute())
            echo "Cliente Cadastrado com Sucesso";
        else
            echo "Erro ao Cadastrar";
    }
}
