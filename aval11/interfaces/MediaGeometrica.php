<?php

require "Media.php";

/**
 * Interface especifica para calcular Media Geometricas
 */
interface MediaGeometrica extends Media
{
    public function calcularMediaGeo();
}
