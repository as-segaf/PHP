<!DOCTYPE html>

<?php
	include('config.php');

	if (isset($_POST['submit'])) {		
		$username = $_POST['username'];
		$pass 	  = $_POST['pass'];
		$query 	  = mysqli_query($link, "SELECT * FROM user WHERE username='$username' AND password='$pass'");

		if ($query) {
			$hasil = "Login berhasil";
			
		}else{
			$hasil = "Login gagal";
		}
	}
 ?>

<html>
	<head>
		<title>Login</title>
	</head>

	<body>
		<div class="content">
			<form method="post" action="">
				<table>
					<tr>
						<td>Username</td>
						<td><input type="text" name="username"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="pass"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit"></td>
					</tr>
				</table>
			</form>

			<div class="hasil">
				<?php if (isset($_POST['submit'])) { echo $hasil; } ?>
			</div>			
		</div>
	</body>
</html>

