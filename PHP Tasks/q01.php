<?php

	function ekranaYaz (){
   $arg = func_get_args();

		foreach ($arg as $key => $value) {
			echo "$value" . " ";
		}
	}
	ekranaYaz('Salam','Elvin.','Necesen?');

//   Neticesi aşağıdakılar olan funksiya yazın

	/*
		ekranaYaz(); 								-->Boş
		ekranaYaz('salam'); 						-->arg1: salam
		ekranaYaz('salam', 'heci', 'necesen');		-->arg1: salam,arg2: heci,arg3: necesen


	*/



?>
