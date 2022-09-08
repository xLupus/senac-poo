<?php

error_reporting (0);
mysqli_report ( MYSQLI_REPORT_OFF );// desabilita msgs de erros automática

$mysqli = new mysqli("localhost", "root", "");

echo "<pre>";
var_dump($mysqli);
echo "</pre>";
try {
    $mysqli->execute("create database protocolo");
    $mysqli->execute("create table clientes (cpf varchar(12))");
} catch (Exception $e) {
     echo 'Exceção capturada: ' , $e->getMessage(), "\n";
}

mysqli_select_db(protocolo, $mysqli);
