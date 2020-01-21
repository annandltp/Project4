<?php
	if(!defined("INDEX")) die("---");
?>

<h2>Tambah Menu</h2>
<form name="tambah" method="post" action="?tampil=submenu_tambahproses">
	<table>
		<tr>
			<td>Judul Menu</td>
			<td><input type="text" name="judul"></td>
		</tr>
		<tr>
			<td>Induk</td>
			<td><select name="induk">
				<?php
					$sqlmenu = mysqli_query($koneksi, "SELECT * from menu");
					while($datamenu = mysqli_fetch_array($sqlmenu)){
						echo"<option value='$datamenu[id_menu]'>$datamenu[judul] </option>";
					}

				?>
			</select></td>
		</tr>
		<tr>
			<td>Link</td>
			<td><input type="text" name="link"></td>
		</tr>
		<tr>
			<td>Urutan</td>
			<td><input type="text" name="urutan"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="tambah" value="Tambah"></td>
		</tr>
	</table>
</form>