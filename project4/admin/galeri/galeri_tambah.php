<h2>Tambah Galeri</h2>

<form name="tambah" method="post" action="?tampil=galeri_tambahproses" enctype="multipart/form-data"> <!--enctype="multipart/form-data" harus ditambahkan jika di dalam form tersebut ada inputan untuk upload file.-->
	<table>
		<tr>
			<td>Judul Galeri</td>
			<td><input type="text" name="judul" size="50"></td>
		</tr>

		<tr>
			<td>Gambar</td>
			<td><input type="file" name="gambar"></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="tambah" value="Tambah"></td>
		</tr>
	</table>
</form>