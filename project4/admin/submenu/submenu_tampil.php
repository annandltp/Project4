<?php
	if(!defined("INDEX")) die("---");
?>

<h2>Data Sub Menu</h2>

<a href="?tampil=submenu_tambah">Tambah Sub Menu</a></br></br>

<table width="100%" cellspacing="0" class="data" border="1">
	<tr>
		<th>No</th>
		<th>Judul Sub Menu</th>
		<th>Induk</th>
		<th>Link</th>
		<th>Urutan</th>
		<th>Aksi</th>
	</tr>

	<?php
		$no=1;
		$sql = mysqli_query($koneksi, "SELECT * FROM submenu ORDER BY urutan") or die(mysqli_error($koneksi));
		while($data=mysqli_fetch_array($sql)){
			$sqlmenu = mysqli_query($koneksi, "SELECT * FROM menu where id_menu='$data[id_menu]'");
			$datamenu = mysqli_fetch_array($sqlmenu);
		
	?>

	<tr>
		<td> <?= $no; ?> </td>
		<td> <?= $data['judul']; ?> </td>
		<td> <?= $datamenu['judul']; ?> </td>
		<td> <?= $data['link']; ?> </td>
		<td> <?= $data['urutan']; ?> </td>
		<td>
			<a href="?tampil=submenu_edit&id=<?=$data['id_submenu']; ?>"> Edit </a>
			<a href="?tampil=submenu_hapus&id=<?=$data['id_submenu']; ?>"> Hapus </a>
		</td>
	</tr>

	<?php
			$no++;
		}
	?>

</table>




