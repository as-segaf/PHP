<?php 

	$angka1 = $_POST['angka1'];
	$angka2 = $_POST['angka2'];
	$operator = $_POST['tanda'];

	if ($operator == "+") {
		echo $angka1 + $angka2;

	}elseif ($operator == "-") {
		echo $angka1 - $angka2;

	}elseif ($operator == "*") {
		echo $angka1 * $angka2;

	}elseif ($operator == "/") {
		echo $angka1 / $angka2;

	}elseif ($operator == "%") {
		echo $angka1 % $angka2;
	}

 ?>