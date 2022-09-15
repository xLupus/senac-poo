<?php
require_once "classes/Registro.class.php";
require_once 'classes/Cliente.class.php';

$registro = new Registro();
$cli      = new Cliente();


if (isset($_POST['btn_cadastrar'])) {
    $login = $_POST['login'];
    $email = $_POST['email'];
    $tel   = $_POST['tel'];

    $registro->setUsuario($login, $email, $tel);
    $registro->setRegistrar();
}


if (isset($_POST['btn_logar'])) {
    $email = $_POST['login'];
    $senha = $_POST['password'];

    if ($registro->setLogin($email, $senha))
        header('location: FormCliente.html');
    else
        echo "Email ou senha incorretos";
}


if (isset($_POST['btn_validar'])) {
    $user   = $_POST['login'];
    $codigo = $_POST['validar'];

    $registro->setValidar($user, $codigo);
}


if(isset($_POST{'btn_cliente'})){
    $nome  = $_POST['nome'];
    $tel   = $_POST['telefone'];
    $email = $_POST['email'];
    $rg    = $_POST['rg'];
    $cpf   = $_POST['cpf'];
    $sexo  = $_POST['sexo'];

    $cli->setDatabaseConnection();
    $cli->setCliente($nome, $tel, $email, $rg, $cpf, $sexo);
    $cli->cadastrarCliente();
}
