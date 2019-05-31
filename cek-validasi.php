<?php 

	if (isset($_POST['submit'])) {
		$nama = $_POST['nama'];

		if ($nama == "") {
			header('location:validasi.php?nama=kosong');

		}else{
			echo "Nama anda adalah $nama";
		}
	}

 ?>