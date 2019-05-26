<?php 

	$kalimat = "testing explode dan implode";

	$data = explode(' ', $kalimat);

	print_r($data);

	$kalimat1 = array("testing", "explode", "dan", "implode");

	$data = implode("-", $kalimat1);

	echo "<br>".$data;


 ?>