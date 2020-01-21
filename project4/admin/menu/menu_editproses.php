<?php
	$edit = mysqli_query($koneksi, "UPDATE menu set
		judul = '$_POST[judul]',
		link = '$_POST[link]',
		urutan = '$_POST[urutan]'
		WHERE id_menu='$_POST[id]'") or die (mysqli_error($koneksi)); //untuk menampilkan pesan kesalahan

	if($edit){
		echo "Data telah diedit";
		echo "<meta http-equiv='refresh' content='1	url=?tampil=menu'>"; //http-equiv digunakan untuk mengalihkan ke halaman lain setelah delay sekian detik dan angka 1 menunjukkan angka delay 1 detik
	}

?>