<?php
	$hapus = mysqli_query($koneksi, "DELETE FROm menu WHERE id_menu ='$_GET[id]'") or die(mysqli_error($koneksi));

	if($hapus){
		echo"Data telah dihapus";
		echo "<meta http-equiv='refresh' content='1	url=?tampil=menu'>"; //http-equiv digunakan untuk mengalihkan ke halaman lain setelah delay sekian detik dan angka 1 menunjukkan angka delay 1 detik
	}


?>