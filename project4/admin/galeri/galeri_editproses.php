<?php
	$nama_gambar = $_FILES['gambar']['name'];
	$lokasi_gambar = $_FILES['gambar']['tmp_name'];
	$tipe_gambar = $_FILES['gambar']['type'];

	$tanggal = date("Ymd");


	if($lokasi_gambar==""){
		$edit = mysqli_query($koneksi, "UPDATE galeri set
		judul = '$_POST[judul]'
		WHERE id_galeri='$_POST[id]'") or die (mysqli_error($koneksi)); //untuk menampilkan pesan kesalahan
	}else{
		$data = mysqli_fetch_array(mysqli_query($koneksi, "select * from galeri
			where id_galeri='$_POST[id]'"));

		if($data['gambar'] != "")
			unlink("../gambar/galeri/$data[gambar]"); //jika data gambar tidak kosong

		move_uploaded_file($lokasi_gambar, "../gambar/galeri/$nama_gambar");

		$edit = mysqli_query($koneksi, "UPDATE galeri set
		judul = '$_POST[judul]',
		gambar = '$nama_gambar'
		WHERE id_galeri='$_POST[id]'") or die (mysqli_error($koneksi)); //untuk menampilkan pesan kesalahan
	}

	if($edit){
		echo"Data telah diedit";
		echo"<meta http-equiv='refresh'
			content='1; url=?tampil=galeri'>";
	}
?>



