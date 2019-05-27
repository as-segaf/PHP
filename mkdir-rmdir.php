<?php 

	//mkdir("nama file", "action setelah berhasil");

	function sukses(){
		echo "folder berhasil di buat";
	}

	mkdir("testing",sukses());

	if (rmdir("testing")) {
		echo "folder berhasil di hapus";
		
	}else{
		echo "gagal";
	}



 ?>