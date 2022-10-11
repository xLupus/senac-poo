<?php
# programa teste.php
require_once("media.class.php");

class MediaGeo extends Media{

    function __construct ($n1, $n2, $aluno)
    {
        parent::__construct ($n1, $n2, $aluno);
    }

    function mostrarAluno()
    {
        parent::mostrarAluno (); // método void exemplo de polimorfismo
        echo parent::mediaGeo(); // método não void
    }

    function __destruct ()
    {
        parent::__destruct();
        echo "<br>Programa MediaGeo Finalizado com Sucesso!";
    }
}

$m1 = new MediaGeo (3.3,7.4,"Eliseu");

echo $m1->mostrarAluno();

unset($m1);
