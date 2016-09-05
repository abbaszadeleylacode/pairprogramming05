<?php
/*PHP OOP yaxinlasmasinnan istifade ederek iki tarix arasindaki ferqi tapin.
Qeyd: Uzun hesablamalar aparmaga ehtiyac yoxdur. maksimum 4 setirle hell edin*/

 /**
  *
  */
 class DateDiff {
   public $date1;
   public $date2;
   function __construct($arg1,$arg2){
    $this->date1= new DateTime($arg1);
    $this->date2= new DateTime($arg2);

    $result = $this->date1->diff($this->date2);
     echo $result->format('%R%a gun ferq var');

   }
 }

 $interval = new DateDiff("2009-02-11", "2011-11-05");
 ?>
