<?php

	if(!defined("INDEX")) die("---"); //agar file menu tidak bisa dibuka secara langsung jadi harus login
	
	if(isset($_GET['tampil'])) $tampil = $_GET['tampil']; //digunakan untuk mengecek apakah ada data tampil atau tidak
	else $tampil = "home"; //nilai dari data tampil, jika tidak ada maka nilai variabelnya beranda
?>

<div class='box'>
	
<?php

	if($tampil == "home") include("konten/home.php");

	else if($tampil == "halaman") include("konten/halaman.php");
	else if($tampil == "galeri") include("konten/galeri.php");
	else if($tampil == "artikel_detail") include("konten/artikel_detail.php");
	else if($tampil == "kontak") include("konten/kontak.php");
	else if($tampil == "kontak_proses") include("konten/kontak_proses.php");
	else if($tampil == "pencarian") include("konten/pencarian.php");
	

	else echo"Halaman tidak ditemukan";


?>
</div>