<?php
	$input = mysqli_query($koneksi, "INSERT INTO menu set
		judul = '$_POST[judul]',
		link = '$_POST[link]',
		urutan = '$_POST[urutan]'") or die (mysqli_error($koneksi)); //untuk menampilkan pesan kesalahan

	if($input){
		echo "Data telah tersimpan";
		echo "<meta http-equiv='refresh' content='1	url=?tampil=menu'>"; //http-equiv digunakan untuk mengalihkan ke halaman lain setelah delay sekian detik dan angka 1 menunjukkan angka delay 1 detik
	}

?>