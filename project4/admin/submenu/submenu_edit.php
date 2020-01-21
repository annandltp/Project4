<?php
	if(!defined("INDEX")) die("---");

	$sql = mysqli_query($koneksi, "SELECT * FROM submenu WHERE id_submenu='$_GET[id]'") or die(mysqli_error($koneksi));
	$data = mysqli_fetch_array($sql);
?>

<h2>Edit Sub Menu</h2>

<form name="edit" method="post" action="?tampil=submenu_editproses">
	<input type="hidden" name="id" value="<?=$data['id_submenu']; ?>">
	<table>
		<tr>
			<td>Judul Sub Menu</td>
			<td><input type="text" name="judul" value="<?php echo $data['judul']; ?>"></td>
		</tr>
		<tr>
			<td>Induk</td>
			<td><select name="induk">
				<?php
					$sqlmenu = mysqli_query($koneksi, "SELECT * from menu");
					while($datamenu = mysqli_fetch_array($sqlmenu)){
						if($datamenu['id_menu'] == $data['id_menu'])
							echo"<option value='$datamenu[id_menu]' selected> $datamenu[judul] </option>";
						else echo"<option value='$datamenu[id_menu]'> $datamenu[judul] </option>";
					}
				?>
			</select></td>
		</tr>
		<tr>
			<td>Link</td>
			<td><input type="text" name="link" value="<?= $data['link']; ?>"></td>
		</tr>
		<tr>
			<td>Urutan</td>
			<td><input type="text" name="urutan" value="<?php echo $data['urutan']; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="edit" value="Edit"></td>
		</tr>
	</table>
</form>