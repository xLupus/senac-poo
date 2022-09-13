<?php

require_once "classes/Registro.class.php";

$registro = new Registro();

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
        echo "Logado";
    else
        echo "Email ou senha incorretos";
}

if (isset($_POST['btn_validar'])) {
    $user  = $_POST['login'];
    $codigo = $_POST['validar'];

    $registro->setValidar($user, $codigo);
}
