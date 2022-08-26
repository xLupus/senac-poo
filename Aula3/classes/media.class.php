<?php // CÓDIGO 2 media.class.php
class media {
  public $nota1;
  public $nota2;
  public $nota3;
  public $nota4;

  // Modificador public permite o acesso aos atributos e métodos para outros códigos fora da classe
  // Métodos
  public function setMedia( $n1, $n2 , $n3 , $n4 ) {
    $this->nota1 = $n1;
    $this->nota2 = $n2;
    $this->nota3 = $n3;
    $this->nota4 = $n4;
  }

  public function getMediaAri() {
    $medi = ($this->nota1 + $this->nota2+ $this->nota3 + $this->nota4) / 4;
    return $medi;
  }

  public function getMediaGeo() {
    $medi = pow($this->nota1 * $this->nota2 * $this->nota3 * $this->nota4, (1/4));
    return $medi;
  }
}
