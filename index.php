<?php
  //számplógép 4 alap művelettel strategy pattern

  interface Operation{
    public function doOperation($number1, $number2)
  }

  class Addition implements Operation{
    public function doOperation($number1, $number2){
      return $number1 + $number2;
    }
  }

  class Subtraction implements Operation{
    public function doOperation($number1, $number2){
      return $number1 - $number2;
    }
  }

  class Multiplication implements Operation{
    public function doOperation($number1, $number2){
      return $number1 * $number2;
    }
  }

  class Division implements Operation{
    public function doOperation($number1, $number2){
      return $number1 * $number2;
    }
  }

  

?>