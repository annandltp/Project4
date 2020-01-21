<h2>Data Halaman</h2>

<a href="?tampil=halaman_tambah">Tambah Halaman</a><br><br>

<table width="100%" cellspacing="0" class="data" border="1">
	<tr>
		<th>No</th>
		<th>Judul Halaman</th>
		<th>Link Halaman</th> <!--untuk menampilkan link yang harus dimasukkan ke kotak inputan link pada formulir tambah menu.-->
		<th>Aksi</th>
	</tr>

	<?php
		$no=1;
		$tampil = mysqli_query($koneksi, "SELECT * FROM halaman") or die(mysqli_error($koneksi));
		while($data=mysqli_fetch_array($tampil)){
	?>

	<tr>
		<td> <?= $no; ?> </td>
		<td> <?= $data['judul']; ?> </td>
		<td> ?tampil=halaman&id=<?= $data['id_halaman']; ?> </td>
		<td>
			<a href="?tampil=halaman_edit&id=
				<?= $data['id_halaman']; ?>"> Edit </a>
			<a href="?tampil=halaman_hapus&id=
				<?= $data['id_halaman']; ?>"> Hapus </a>	
		</td>
	</tr>

	<?php
		$no++;
		}
	?>

</table>