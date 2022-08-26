<?php
require_once("classes/carro.class.php");

$MeuCarro = new Carro();

$MeuCarro->setCarro("GM","Camaro","DXY-1355","2018");
$MeuCarro->ligar();
echo "<br><br>Marca {$MeuCarro->getMarca()}<br>";
$MeuCarro->desligar();
$MeuCarro = null;
