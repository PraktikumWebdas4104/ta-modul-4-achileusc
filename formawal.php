<form action="" method="post">
	<table>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><input type="text" name="user"></td><br>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="pass"></td><br>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Kirim"></td>
		</tr>
	</table>
</form>

<?php

error_reporting(0);

if (isset($_POST['submit'])) {
	include 'proses.php';
	# code...
}

?>
