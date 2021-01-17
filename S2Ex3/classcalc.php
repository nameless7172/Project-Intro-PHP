<?php

class Calculator
{
  var $nombre1;
  var $nombre2;


  function __construct($n1, $n2)
  {

    $this->nombre1 = $n1;
    $this->nombre2 = $n2;
  }

  public function add()
  {
    return ($this->nombre1 + $this->nombre2);
  }

  public function substract()
  {
    return ($this->nombre1 - $this->nombre2);
  }

  public function multiply()
  {
    return ($this->nombre1 * $this->nombre2);
  }

  public function divide()
  {
    return ($this->nombre1 / $this->nombre2);
  }
}
