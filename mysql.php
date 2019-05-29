<?php 

	$host = mysql_connect("localhost","root","root");
	$db = mysql_select_db("sekolah");

	if ($host) {
		if ($db) {
			echo "berhasil";
		}
	}else{
		echo "gagal";
	}
 ?>