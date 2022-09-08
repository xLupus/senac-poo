<?php
require_once ("classes/Funcionario.class.php");

$func = new Funcionario();                // instanciamento da classe filha ou subclasse
$func->email = "teste@teste.com.br";      // Atributo da SuperClasse
$func->telefone = "9999-99999";           // Atributo da SuperClasse
$func->nome = "Sara Silva";               // Atributo da classe SubClasse

$html ="<pre><br>Funcionário:{$func->email}<br>Telefone:{$func->telefone}";
$html .= "<br>Nome:{$func->nome} </pre>";

$func->exibirPessoa ($html);              // envia html para a SuperClasse
