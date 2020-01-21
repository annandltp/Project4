<?php
	$hapus = mysqli_query($koneksi, "delete from halaman where id_halaman='$_GET[id]'") or die(mysqli_error($koneksi));

	if($hapus){
		echo"Data telah terhapus";
		echo"<meta http-equiv='refresh'
			content='1; url=?tampil=halaman'>";
	}

?>