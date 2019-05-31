<!DOCTYPE html>

<?php 
	include('config.php');
 ?>

<html>
	<head>
		<title>pagination</title>
	</head>

	<body>
		<div class="content">
			<table border="1">
				<tr>
					<th>NO</th>
					<th>NAMA</th>
				</tr>

				<?php 
					$halaman = 10;
					$page = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
					$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
					$result = mysqli_query($link, "SELECT * FROM  user");
					$total = mysqli_num_rows($result);
					$pages = ceil($total/$halaman);
					$query = mysqli_query($link, "SELECT * FROM user LIMIT $mulai, $halaman")or die(mysqli_error());
					$no = $mulai+1;

					while ($data = mysqli_fetch_assoc($query)) {
				?>

				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $data['username']; ?></td>
				</tr>

				<?php
					}

				 ?>

			</table>
			<div class="">
				<?php for ($i=1; $i <= $pages ; $i++) { ?>
				<a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
				<?php } ?>
			</div>
		</div>
	</body>
</html>