<?php
class Carro { // Atributos são as variáveis globais dentro da classe
              // Modificador private restringe o acesso ao atributo somente dentro da classe
  private $marca;
  private $modelo; // CÓDIGO 1 carro.class.php
  private $placa;
  private $anoFabr;

  // Métodos são as sub-rotinas dentro da classe
  public function setCarro($Marca, $Modelo, $Placa, $AnoFabr) {
    $this->marca   = $Marca;
    $this->modelo  = $Modelo;
    $this->placa   = $Placa;
    $this->anoFabr = $AnoFabr;
  }

  public function ligar() {
    echo "<br>Carro Ligado!";
  }

  public function desligar() {
    echo "<br>Carro Desligado!";
  }

  public function getMarca() {
    return $this->marca;
  }
}
