<?php
// Shirket ucun Ishcilerin siyahisi yaradilmalidir, yaradilan butun ishcilerin siyahisi table sheklinde muvafiq melumatlarla ekrana cixmali ve hal hazirki gunde dogum gunu olan ishcinin melumatlari qirmizi rengle yazilmalidir.
class Workers {
	public $name;
	public $surname;
	public $position;
	public $birthDate;
	public function addWorker($name,$surname,$position,$birthday){
		$this->name = $name;
		$this->surname = $surname;
		$this->position = $position;
		$this->birthDate = $birthday;
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="">
		<form class="" action="" method="post">
			<input type="text" name="name" value="">
			<input type="text" name="surname" value="">
			<input type="text" name="status" value="">
			<input type="datetime" name="birthday" value="">
			<input type="submit" name="submit" value="add">
		</form>
	</div>
<table>
	<thead>
		<tr>
			<td>Ad</td>
			<td>Soyad</td>
			<td>Status</td>
			<td>Dogum tarixi</td>
			<td>Action</td>
		</tr>
	</thead>
	<tbody>
		<?php
		session_start();
		if (isset($_POST['submit']) && isset($_SESSION) ) {
			$name = $_POST["name"];
			$surname = $_POST["surname"];
			$status = $_POST["status"];
			$birthday = $_POST["birthday"];
			$_SESSION[$name] = new Workers;
			$_SESSION[$name]->addWorker($name,$surname,$status,$birthday);
		}
		if (isset($_GET["name"])) {
		  $row = $_GET["name"];

			unset($_SESSION[$row]);

		}
    foreach ($_SESSION as $key => $value) {

		?>
		<tr>
			<td><?= $value->name ?></td>
			<td><?=$value->surname ?></td>
			<td><?= $value->position ?></td>
			<td><?= $value->birthDate ?></td>
			<td><a href="q04.php?name=<?= $key ?>">Delete</a></td>
		</tr>
		<?php

		}
		 ?>

	</tbody>

</table>
</body>
</html>
