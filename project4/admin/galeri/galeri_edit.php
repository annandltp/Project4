<?php
	$sql = mysqli_query($koneksi, "SELECT * FROM galeri WHERE id_galeri = '$_GET[id]'") or die(mysqli_error()); //WHERE id_menu = '$_GET[id] untuk membatasi data yang diambil dari database
	$data = mysqli_fetch_array($sql);
?>


<h2>Edit Galeri</h2>

<form name="edit" method="post" action="?tampil=galeri_editproses" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?= $data['id_galeri']; ?>">
		<table>
			<tr>
				<td>Judul Galeri</td>
				<td><input type="text" name="judul" size="50" value="<?= $data['judul']; ?>"></td>
			</tr>

			<tr>
				<td>Gambar</td>
				<td><img src="../gambar/galeri/<?= $data['gambar']; ?>" width="100"><br>
					<input type="file" name="gambar"></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" name="edit" value="Edit"></td>
			</tr>
		</table>
</form>

