<?php
	if(!defined("INDEX")) die("---");

	$hapus = mysqli_query($koneksi, "DELETE FROM submenu WHERE id_submenu='$_GET[id]'") or die(mysqli_error($koneksi));

	if($hapus){
		echo"Data telah terhapus";
		echo"<meta http-equiv='refresh'
			content='1; url=?tampil=submenu'>";
	}
?>