<h2>Data Galeri</h2>

<a href="?tampil=galeri_tambah">Tambah Galeri</a><br><br>

<table width="100%" cellspacing="0" class="data" border="1">
	<tr>
		<th>No</th>
		<th>Foto</th>
		<th>Judul Foto</th>
		<th>Tanggal</th>
		<th>Aksi</th>
	</tr>

	<?php
		$no=1;
		$tampil = mysqli_query($koneksi, "SELECT * FROM galeri") or die(mysqli_error($koneksi)); //ORDER BY id_artikel DESC adalah data yang tampil diurutkan berdasarkan kolom id_artikel pada tabel artikel dengan urutan descending
		while($data = mysqli_fetch_array($tampil)){
	?>

	<tr>
		<td> <?= $no; ?> </td>
		<td> <img src="../gambar/galeri/<?=
			$data['gambar']; ?>" width="100"></td>
		<td> <?= $data['judul']; ?> </td>
		<td> <?= $data['tanggal']; ?> </td>
		<td>
			<a href="?tampil=galeri_edit&id=
				<?= $data['id_galeri']; ?>"> Edit </a>
			<a href="?tampil=galeri_hapus&id=
				<?= $data['id_galeri']; ?>"> Hapus </a>
		</td>
	</tr>
	<?php
			$no++;
		}
	?>
</table>