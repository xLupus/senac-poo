<?php

require_once "../interface/MediaA.php";

/**
 * Classe para calcular medias geometricas
 */
class MediaGeometrica implements MediaA {
    private $notas = [];
    private $media = '';

    public function setDados(array $notas):void
    {
        $this->notas = $notas;
    }
    public function mostrarMedia(Media $media)
    {

    }
    public function calcularMediaGeo()
    {

    }
}
