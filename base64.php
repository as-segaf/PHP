<?php 

	$kalimat = "testing base64";

	$hasil = base64_encode($kalimat);

	$decode = base64_decode($hasil);

	$testing = base64_encode(base64_decode($kalimat));

	echo $hasil; 
	echo "<br>". $decode;
	echo "<br>". $testing;
 ?>