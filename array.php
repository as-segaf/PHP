<?php 
	
	$a = array('tes1', 'tes2', 'tes3', 'tes4');

	echo $a[0]."<br>";

	$b = ['tes1', 'tes2', 'tes3'];

	echo $b[0]."<br>";

	$a[0] = "tesing1";
	$a[1] = "testing2";
	$a[2] = "testing3";

	echo $a[0]. "<br>";

	$a= array(
		0 => "data1",
		1 => "data2",
		2 => "data3"
	);

	echo $a[1]. "<br>";

	$kata= array('tes1', 'tes2', 'tes3');

	for ($i=0; $i < count($a) ; $i++) { 
		echo $kata[$i]. "<br>";
	}

 ?>