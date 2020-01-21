<?php
	$tampil = mysqli_query($koneksi, "SELECT * FROM halaman WHERE id_halaman = '$_GET[id]'") or die(mysqli_error($koneksi)); //WHERE id_menu = '$_GET[id] untuk membatasi data yang diambil dari database
	$data = mysqli_fetch_array($tampil);
?>

<h2>Edit Halaman</h2>

<form name="edit" method="post" action="?tampil=halaman_editproses">
	<input type="hidden" name="id" value="<?= $data['id_halaman']; ?>">
		<table>
			<tr>
				<td>Judul Halaman</td>
				<td><input type="text" name="judul" size="50" value="<?= $data['judul']; ?>"></td>
			</tr>

			<tr>
				<td>Isi Halaman</td>
				<td><textarea name="isi" cols="80" rows="15"><?=$data['isi']; ?>
					</textarea></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" name="edit" value="Edit"></td>
			</tr>
		</table>
</form>
