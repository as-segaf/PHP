<!DOCTYPE html>
<html>
	<head>
		<title>validasi</title>
	</head>

	<body>
		<div class="content">

			<?php 
				if (isset($_GET['nama'])){
					if ($_GET['nama'] == "kosong") {
						echo "<h4 style='color:red'>Nama belum diisi</h4>";
					}
				}
				
			?>
			<form method="post" action="cek-validasi.php">
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit"></td>
				</tr>
			</form>
		</div>
	</body>
</html>