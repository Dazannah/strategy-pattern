<?php
  //számplógép 4 alap művelettel strategy pattern

  interface Operation{
    public function doOperation($number1, $number2);
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
      return $number1 / $number2;
    }
  }

  class OperationClass{
    private $strategy;

    public function __construct(Operation $startegy){
      $this->strategy = $startegy;
    }

    public function setStrategy(Operation $startegy){
      $this->strategy = $startegy;
    }

    public function do($number1, $number2){
      return $this->strategy->doOperation($number1, $number2);
    }
  }

  $test = new OperationClass(new Addition());
  $result = $test->do(2,3);
  echo $result . "<br>";

  $test->setStrategy(new Subtraction());
  $result = $test->do(2,3);
  echo $result . "<br>";

  $test->setStrategy(new Multiplication());
  $result = $test->do(2,3);
  echo $result . "<br>";

  $test->setStrategy(new Division());
  $result = $test->do(2,3);
  echo $result . "<br>";
?>