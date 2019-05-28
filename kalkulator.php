<?php 

	if (isset($_POST['submit'])) {
		$angka1 = $_POST['angka1'];
		$angka2 = $_POST['angka2'];
		$operator = $_POST['tanda'];

		if ($operator == "+") {
			$hasil = $angka1 + $angka2;

		}elseif ($operator == "-") {
			$hasil = $angka1 - $angka2;

		}elseif ($operator == "*") {
			$hasil = $angka1 * $angka2;

		}elseif ($operator == "/") {
			$hasil = $angka1 / $angka2;

		}elseif ($operator == "%") {
			$hasil = $angka1 % $angka2;
		}
		
	}


?>

<form method="post" action="">
	<table>
		<tr>
			<input type="number" name="angka1" required>
			<select name="tanda">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">*</option>
				<option value="/">/</option>
				<option value="%">%</option>
			</select>
			<input type="number" name="angka2" required>
			<input type="submit" name="submit">
		</tr>
	</table>	
</form>

<?php if (isset($_POST['submit'])) {?>

<input type="text" name="hasil" value=" <?php echo $hasil; ?> ">

<?php }else{ ?>

<input type="text" name="hasil" value="0">

<?php } ?>