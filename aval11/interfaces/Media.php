<?php

/**
 * Interface generica para calcular Medias
 */
interface Media
{
    public function setDados(array $notas):void;
    public function mostrarMedia(Media $media);
}
