<?php

if (isset($_POST['submit'])) {
	$username = $_POST['user'];
	$pass = $_POST['pass'];
	$user = array(
			"user" => "achil",
			"pass" => "1205"
			);
	if ($username == $user['user'] && $pass == $user['pass']) {
		echo "Berhasil Masuk, Silahkan isi data dibawah ini!";
		# code...

?>

<h1>Isi Data</h1>
		Genre Film yang disukai :
		<form method="post">
			<table>
				<tr>
					<td>Horror <input type="checkbox" name="film[]" value="horror"></td>
				</tr>
				<tr>
					<td>Action <input type="checkbox" name="film[]" value="action"></td>
				</tr>
				<tr>
					<td>Anime <input type="checkbox" name="film[]" value="anime"></td>
				</tr>
				<tr>
					<td>Thriller <input type="checkbox" name="film[]" value="thriller"></td>
				</tr>
				<tr>
					<td>Animasi <input type="checkbox" name="film[]" value="animasi"></td>
				</tr>
			</table>
		</form>

		<form method="post">
			Tempat Wisata Tujuan : <br>
				<tr>
					<td>Bali <input type="checkbox" name="wisata[]" value="bali"></td><br>
				</tr>
				<tr>
					<td>Raja Ampat <input type="checkbox" name="wisata[]" value="rajaampat"></td><br>
				</tr>
				<tr>
					<td>Pulau Derawan <input type="checkbox" name="wisata[]" value="derawan"></td><br>
				</tr>
				<tr>
					<td>Bangka Belitung <input type="checkbox" name="wisata[]" value="bangka"></td><br>
				</tr>
				<tr>
					<td>Labuan Bajo <input type="checkbox" name="wisata[]" value="bajo"></td><br>
				</tr><br>
				<tr>
					<td><input type="submit" name="kirim" value="Kirim"></td>
				</tr>
		</form>

<?php

		error_reporting(0);

		if (isset($_POST['kirim'])) {
			$data = $_POST['film'];
			$sub = $_POST['wisata'];

			foreach ($data as $film => $wisata) {
				echo $film;
				echo $wisata;
				# code...
			}
			# code...
			?>

			<?php
		}
	}else{
			echo "Gagal Masuk, Silahkan coba lagi!";
		}
	# code...
}

?>
