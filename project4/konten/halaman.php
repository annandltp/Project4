<?php
	if(!defined("INDEX")) die("---");

	$artikel = mysqli_query($koneksi, "select * from halaman where id_halaman='$_GET[id]'");
	$data = mysqli_fetch_array($artikel);
	$isi = $data['isi'];
?>

<div class="halaman">
	<h2 class="judul"><?= $data['judul']; ?></h2>
	<p>
		<?= $isi; ?>
	</p>
	
</div>