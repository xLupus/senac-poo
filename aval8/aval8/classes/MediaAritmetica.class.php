<?php

require_once "Media.class.php";

class MediaAritmetica extends Media {
    protected float    $nota1;
    protected float    $nota2;
    protected string   $aluno;

    function __construct ($n1, $n2, $aluno)
    {
        parent::__construct ($n1, $n2, $aluno);
    }

    public function mediaAritmetica():float
    {
        return ($this->nota1 + $this->nota2) / 2;
    }

    public function mediaGeometrica():float
    {
        return pow($this->nota1 * $this->nota2, (1/2));
    }

    public function __destruct(){}

}
