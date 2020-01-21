<?php
	if(!defined("INDEX")) die("---");

	mysqli_query($koneksi, "update artikel set hits=hits+1 where id_artikel='$_GET[id]'"); //hits digunakan untuk membaca berapa kali dibaca oleh pengunjung

	$artikel = mysqli_query($koneksi, "select * from artikel where id_artikel='$_GET[id]'");
	$data = mysqli_fetch_array($artikel);
	$isi = $data['isi'];
?>

<div class="artikel">
	<h2 class="judul"><?= $data['judul']; ?></h2>
	<p>
		<?php if($data['gambar']!="") ?>
			<img src="gambar/artikel/<?= $data['gambar']; ?>"
			class="gambar-artikel" width="350">
		<?= $isi; ?>
	</p>
	
</div>