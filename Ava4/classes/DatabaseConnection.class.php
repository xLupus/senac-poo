<?php

class DatabaseConnection{
    public $DB_DRIVE;
    public $DB_HOST;
    public $DB_NAME;
    public $DB_USER;
    public $DB_PASS;

    public function __construct()
    {
        $this->setDBDRIVE('mysql');
        $this->setDBHOST('localhost');
        $this->setDBNAME('protocolo');
        $this->setDBUSER('Lupus');
        $this->setDBPASS('SL-221B-VAS');
    }

    public function setConnection(){
        $dns = "mysql:host={$this->DB_HOST};dbname={$this->DB_NAME}";
        $user = $this->DB_USER;
        $pass = $this->DB_PASS;

        try {
            $conn = new PDO($dns, $user, $pass);
            return $conn;

        } catch (\Exception $e) {
            echo $e;
        }
    }

    /**
     * Define o valor de DB DRIVE
     * @param mixed $DB_DRIVE
     * @return self
     */
    public function setDBDRIVE($DB_DRIVE)
    {
        $this->DB_DRIVE = $DB_DRIVE;

        return $this;
    }

    /**
     * Pega o valor de DB DRIVE
     * @return mixed
     */
    public function getDBDRIVE()
    {
        return $this->DB_DRIVE;
    }

    /**
     * Define o valor de DB HOST
     * @param mixed $DB_HOST
     * @return self
     */
    public function setDBHOST($DB_HOST)
    {
        $this->DB_HOST = $DB_HOST;

        return $this;
    }

    /**
     * Pega o valor de DB HOST
     * @return mixed
     */
    public function getDBHOST()
    {
        return $this->DB_HOST;
    }

    /**
     * Define o valor de DB NAME
     * @param mixed $DB_NAME
     * @return self
     */
    public function setDBNAME($DB_NAME)
    {
        $this->DB_NAME = $DB_NAME;

        return $this;
    }

    /**
     * Pega o valor de DB NAME
     * @return mixed
     */
    public function getDBNAME()
    {
        return $this->DB_NAME;
    }

    /**
     * Define o valor de DB USER
     * @param mixed $DB_USER
     * @return self
     */
    public function setDBUSER($DB_USER)
    {
        $this->DB_USER = $DB_USER;

        return $this;
    }

    /**
     * Pega o valor de DB USER
     * @return mixed
     */
    public function getDBUSER()
    {
        return $this->DB_USER;
    }

    /**
     * Define o valor de DB PASS
     * @param mixed $DB_PASS
     * @return self
     */
    public function setDBPASS($DB_PASS)
    {
        $this->DB_PASS = $DB_PASS;

        return $this;
    }

    /**
     * Pega o valor de DB PASS
     * @return mixed
     */
    public function getDBPASS()
    {
        return $this->DB_PASS;
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
  	validado varchar(1),
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
