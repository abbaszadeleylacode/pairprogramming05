<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		input{
			display:block;
			padding:5px 10px;
			margin:5px;
		}
		input[type="radio"]{
			display:inline-block;
		}
		p{
			background:gray;
		}
	</style>
</head>
<body>
<form action="" method="post">
	<input type="number" name="num01">
	<input type="number" name="num02">
	<span>+</span><input type="radio"  name="plus" value="+">
	<span>-</span><input type="radio" name="minus" value="-">
	<span>*</span><input type="radio" name="multiply" value="*">
	<span>/</span><input type="radio" name="devide" value="/">
	<input type="submit" name="submit" value="Hesabla">
	<p>Netice:</p>
	<?php
	// forması yuxarıda verilen besit hesablama masını yazın



		if (isset($_POST["submit"]) && isset($_POST["num01"]) && isset($_POST["num02"])) {
			$num1 = $_POST["num01"];
			$num2 = $_POST["num02"];
			$submit = $_POST["submit"];

			if (!empty($_POST["plus"])) {
			 ?>
			 <p>
			 	<?= $num1+$num2 ?>
			 </p>
			 <?php
			}
			if (!empty($_POST["minus"])) {
			 ?>
			 <p>
			 	<?= $num1-$num2 ?>
			 </p>
			 <?php
			}

			if (!empty($_POST["multiply"])) {
			 ?>
			 <p>
			 	<?= $num1*$num2 ?>
			 </p>
			 <?php
			}

			if (!empty($_POST["devide"])) {
				if ($num2  == "0") {
					?>
	 			 <p>Sifiri bolmek olmaz</p>
	 			 <?php
			 }else{
			 ?>
			 <p>
			 	<?= $num1/$num2 ?>
			 </p>
			 <?php
			 }
			}

			// print_r("<pre>");
			// print_r($_POST);


		}

	?>

</form>
</body>
</html>
