<?php
	if(!defined("INDEX")) die("---"); //agar file menu tidak bisa dibuka secara langsung jadi harus login
?>


<ul class="left">
	<li><a href="admin.php"> Beranda </a></li>
	<li><a href="?tampil=menu"> Menu </a></li>
	<li><a href="?tampil=halaman"> Halaman </a></li>
	<li><a href="?tampil=artikel"> Artikel </a></li>
	<li><a href="?tampil=galeri"> Galeri </a></li>
	<li><a href="?tampil=pesan"> Pesan </a></li>
	<li><a href="?tampil=submenu"> Sub Menu </a></li>
</ul>

<ul class="right">	<!--ul membuat kerangka dari list-->
	<li><a href="../" target="blank"> Preview </a></li>
	<li><a href="?tampil=user_edit"> Profil </a></li>
	<li><a href="?tampil=keluar"> Keluar </a></li>
</ul>