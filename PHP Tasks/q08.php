<?php
//1.Ededin faktorialini hesablayan Class yazin//

class Factorial {
  public $num;

  function __construct($arg){
    $this->num = $arg;
    $result = 1;
    for ($i=1; $i <= $this->num; $i++) {
      $result = $result*($i);

    }
    echo $result;
  }
}

$test = new Factorial(10);

 ?>
