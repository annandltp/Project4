<?php
	$sql = mysqli_query($koneksi, "SELECT * FROM user") or die(mysqli_error($koneksi));

	$data = mysqli_fetch_array($sql);
?>

<h2>Edit User</h2>

<form name="edit" method="post" action="?tampil=user_editproses">
	<input type="hidden" name="id" value="<?= $data['id_user']; ?>">
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" size="50" value="<?= $data['username']; ?>"></td>
			</tr>

			<tr>
				<td>Ganti Password</td>
				<td><input type="password" name="password"></td>
			</tr>

			<tr>
				<td>Ulang Password</td>
				<td><input type="password" name="password_ulang"></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" name="edit" value="Ubah Profil"></td>
			</tr>
		</table>
</form>