<?php

class DatabaseConnection{
    private $DB_DRIVE;
    private $DB_HOST;
    private $DB_NAME;
    private $DB_USER;
    private $DB_PASS;

    public function setConnection(){
      $this->DB_DRIVE = 'mysql';
      $this->DB_HOST  = 'localhost';
      $this->DB_NAME  = 'protocolo';
      $this->DB_USER  = 'root';
      $this->DB_PASS  = '';

      try {
        $conn = new PDO("mysql:host={$this->DB_HOST};dbname={$this->DB_NAME}", $this->DB_USER, $this->DB_PASS);

        return true;

      } catch (\Exception $e) {
        echo $e;
        return false;
      }
    }

}

/*
CREATE DATABASE Protocolo;

CREATE TABLE usuarios(
	id_cli int unsigned AUTO_INCREMENT PRIMARY KEY,
  	login varchar(50),
  	email varchar(50),
  	telefone varchar(12),
  	codAcesso varchar(6),
  	varlidado varchar(1),
  	tipo varchar(1)
);

CREATE TABLE clientes(
	id_cliente int unsigned AUTO_INCREMENT PRIMARY KEY,
  	nome varchar(50),
  	email varchar(50),
  	celular varchar(12),
  	sexo varchar(1),
  	rg varchar(9),
  	cpf varchar(11)
)
 */
