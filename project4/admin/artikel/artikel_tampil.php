<h2>Data Artikel</h2>

<a href="?tampil=artikel_tambah">Tambah Artikel</a><br><br>

<table width="100%" cellspacing="0" class="data" border="1">
	<tr>
		<th>No</th>
		<th>Judul Artikel</th>
		<th>Tanggal</th>
		<th>Aksi</th>
	</tr>

	<?php
		include("../lib/fungsi_tglindonesia.php"); //untuk tanggal indonesia

		$no=1;
		$tampil = mysqli_query($koneksi, "SELECT * FROM artikel ORDER BY id_artikel DESC") or die(mysqli_error($koneksi)); //ORDER BY id_artikel DESC adalah data yang tampil diurutkan berdasarkan kolom id_artikel pada tabel artikel dengan urutan descending
		while($data = mysqli_fetch_array($tampil)){
			$tanggal = tgl_indonesia($data['tanggal']); //untuk tanggal indonesia
	?>

	<tr>
		<td> <?= $no; ?> </td>
		<td> <?= $data['judul']; ?> </td>
		<td> <?= $tanggal; ?> </td> <!--untuk tanggal indonesia-->
		<td>
			<a href="?tampil=artikel_edit&id=
				<?= $data['id_artikel']; ?>"> Edit </a>
			<a href="?tampil=artikel_hapus&id=
				<?= $data['id_artikel']; ?>"> Hapus </a>
		</td>
	</tr>
	<?php
			$no++;
		}
	?>
</table>