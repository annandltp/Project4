<h2>Data Pesan</h2>

<table width="100%" cellspacing="0" class="data" border="1">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Subjek</th>
		<th>Tanggal</th>
		<th>Dibalas</th>
		<th>Aksi</th>
	</tr>

	<?php
		$no=1;
		$tampil = mysqli_query($koneksi, "SELECT * FROM pesan") or die(mysqli_error($koneksi)); //ORDER BY id_artikel DESC adalah data yang tampil diurutkan berdasarkan kolom id_artikel pada tabel artikel dengan urutan descending
		while($data = mysqli_fetch_array($tampil)){
	?>

	<tr>
		<td> <?= $no; ?> </td>
		<td> <?= $data['nama']; ?> </td>
		<td> <?= $data['email']; ?> </td>
		<td> <a href='?tampil=pesan_balas&id=
			<?= $data['id_pesan']; ?>'>
				<?= $data['subjek']; ?> </a></td>
		<td> <?= $data['tanggal']; ?> </td>
		<td>
			<?php 
				if($data['balasan']=="") echo "Belum";
				else echo "Sudah";
			?>
		</td>
		<td>
			<a href="?tampil=pesan_hapus&id=
				<?= $data['id_pesan']; ?>"> Hapus </a>
		</td>
	</tr>
	<?php
			$no++;
		}
	?>
</table>