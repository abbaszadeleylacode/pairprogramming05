<?php
//sort() funksiyasindan istifade ederek tam ededlerden ibaret array-in elementlerini sort eden Class yazin.//
$arr = [2,56,3,10,43];

class Sort {
  public $arr;

  function __construct($arg){
   $this->arr = $arg;
   sort($this->arr);
   print_r("<pre>") ;
   print_r($this->arr) ;
  }
}

$a = new Sort($arr);



 ?>
