<?php
	$sql = mysqli_query($koneksi, "SELECT * FROM menu WHERE id_menu = '$_GET[id]'") or die(mysqli_error()); //WHERE id_menu = '$_GET[id] untuk membatasi data yang diambil dari database
	$data = mysqli_fetch_array($sql);
?>

<h2>Edit Menu</h2>

<form name="edit" method="post" action="?tampil=menu_editproses">
	<input type="hidden" name="id" value="<?= $data['id_menu']; ?>"> <!--Hidden adalah menyumbinyikan kotak inputan-->
		<table>
			<tr>
				<td>Judul Menu</td>
				<td><input type="text" name="judul" value="<?= $data['judul']; ?>"></td>
			</tr>
			<tr>
				<td>Link</td>
				<td><input type="text" name="link" value="<?= $data['link']; ?>"></td>
			</tr>
			<tr>
				<td>Urutan</td>
				<td><input type="text" name="urutan" value="<?= $data['urutan']; ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="edit" value="Edit"></td>
			</tr>
		</table>
	
</form>