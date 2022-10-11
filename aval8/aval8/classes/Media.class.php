<?php

abstract class Media {
    protected float $nota1;
    protected float $nota2;
    protected string $aluno;

    public function __construct(float $n1, float $n2, string $aluno)
    {
        $this->nota1 = $n1;
        $this->nota2 = $n2;
        $this->aluno = $aluno;
    }

    abstract public function mediaGeometrica():float;

    abstract public function mediaAritmetica():float;

    public function mostrar():void{}
}
