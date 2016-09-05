<?php
	/*Asagidaki kodlar-ın outputu necə olacaq və nə üçün?*/


// 1-ci
$x = 5;
echo $x;
echo "<br />";
echo $x++ + $x++;
echo "<br />";
echo $x;
echo "<br />";
echo $x---$x--;
echo "<br />";
echo $x;
// Cunku birinci neticeni ekrana cixardir sonra ustune bir gelir ve ya cixir ve novbeti defe cagiranda deyishilmish halda gelir



// // 2-ci
var_dump(0123 == 123);
var_dump('0123' == 123);
var_dump('0123' === 123);

// Birinci outputda 0123 kimi eded olmadigindan ve 123 beraber olmadigindan false gosterir
// Ikinci outputda strinqin icinden duzgun eded olaraq 123 cixarir ve onu 123 beraberi true - dur
// Ucuncu outputda beraberleshdirme data type gore oldugu uchun false qaytarir


// //3-cü
$x = true and false;
var_dump($x);
//Burada birinci true yazildigina gore true chixardir. Eger false yazilsa idi false cxardacaq idi
//
// //4-cü $x-in dəyəri nə olacaq?
$x = 3 + "15%" + "$25";
// 18 chixardir chunku 15% string oldugundan burdan 15 chixardir ve $25 ise deyishen adi kimi gorduyu uchun hecne chixartmir

 ?>
