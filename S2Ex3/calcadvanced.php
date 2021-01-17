<?php

class Calcadvanced extends Calculator{

    function __construct($n1, $n2) {
      parent::__construct($n1, $n2);
    }

    public function sqrt()
    {
      // racine du premier parametre
      return sqrt($this->nombre1);
    }
      // exp du premier parametre
    public function exp() {
      return exp($this->nombre1);
    }


}
