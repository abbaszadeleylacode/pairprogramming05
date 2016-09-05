<?php
class Telebe {

  public $ad;
  public $soyad;
  public $register;

  public function qarsila()
  {


  }


  public function qeydiyyataAl()
  {
      $this->register = true;
      return $this;
  }


  public function melumatlandir()
  {
    if ($this->register) {
      echo "Salam $this->ad $this->soyad!.Sizin müracietiniz qeyde alındı ve size email gönderildi.Teşekkürler";
      return $this;
    }
  }
}

$telebe01 = new Telebe();
$telebe01 -> ad = "Memmed";
$telebe01 -> soyad = "Hesenov";

$telebe01 -> qeydiyyataAl() -> melumatlandir();

/*

 verilen Telebe class struktrunu ele qurmaq lazımdır ki,

$telebe01 -> qeydiyyataAl() -> melumatlandir();

 komandasını işe saldıgınız zaman ekrana
   "Salam Memmed Hesenov!.Sizin müracietiniz qeyde alındı ve size email gönderildi.Teşekkürler"
 ifadesi cıxsın

 */
?>
