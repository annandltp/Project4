<?php
	$isi = addslashes($_POST['isi']); //addslashes adalah untuk mengantisipasi simbol('"') yang nantinya akan dibuat error jika salah
	$input = mysqli_query($koneksi, "INSERT INTO halaman SET 
		judul = '$_POST[judul]',
		isi = '$isi'") or die(mysqli_error($koneksi));

	if($input){
		echo"Data telah ditambah";
		echo"<meta http-equiv='refresh'
			content='1; url=?tampil=halaman'>";
	}

?>