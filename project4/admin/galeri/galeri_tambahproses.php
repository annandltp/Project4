<?php
	$nama_gambar = $_FILES['gambar']['name']; //untuk menunjukkan nama file
	$lokasi_gambar = $_FILES['gambar']['tmp_name']; //untuk menunjukkan lokasi file
	$tipe_gambar = $_FILES['gambar']['type']; //untuk menujukkan tipe file

	$tanggal = date('Ymd'); //year, mounth, day

	if($lokasi_gambar==""){
		$input = mysqli_query($koneksi, "INSERT INTO galeri set
			judul = '$_POST[judul]',
			tanggal = '$tanggal'") or die (mysqli_error($koneksi)); //untuk menampilkan pesan kesalahan
	}else{
		move_uploaded_file($lokasi_gambar, "../gambar/galeri/$nama_gambar");
		$input = mysqli_query($koneksi, "INSERT INTO galeri set
			judul = '$_POST[judul]',
			tanggal = '$tanggal',
			gambar = '$nama_gambar'") or die (mysqli_error($koneksi));
	
	}
	if($input) {
		echo "Data telah tersimpan";
		echo "<meta http-equiv='refresh' content='1	url=?tampil=galeri'>";
	}
?>