<?php

include ('classes/Registro.class.php');

$t = new Registro();
$t->setUsuario('221b','teste@teste.com', '110123456789');
$t->setRegistrar();

echo "<pre>";
var_dump($t);
echo "</pre>";
