<?php
	$sql = mysqli_query($koneksi, "SELECT * FROM artikel WHERE id_artikel = '$_GET[id]'") or die(mysqli_error()); //WHERE id_menu = '$_GET[id] untuk membatasi data yang diambil dari database
	$data = mysqli_fetch_array($sql);
?>


<h2>Edit Artikel</h2>

<form name="edit" method="post" action="?tampil=artikel_editproses" enctype="multipart/form-data"           >
	<input type="hidden" name="id" value="<?= $data['id_artikel']; ?>">
		<table>
			<tr>
				<td>Judul Artikel</td>
				<td><input type="text" name="judul" size="50" value="<?= $data['judul']; ?>"></td>
			</tr>

			<tr>
				<td>Gambar</td>
				<td><img src="../gambar/artikel/<?= $data['gambar']; ?>" width="100"><br>
					<input type="file" name="gambar"></td>
			</tr>

			<tr>
				<td>Isi Artikel</td>
				<td><textarea name="isi" cols="80" rows="15"><?=$data['isi']; ?>
					</textarea></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" name="edit" value="Edit"></td>
			</tr>
		</table>
</form>

