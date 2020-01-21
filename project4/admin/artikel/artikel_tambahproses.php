<?php
	$nama_gambar = $_FILES['gambar']['name']; //untuk menunjukkan nama file
	$lokasi_gambar = $_FILES['gambar']['tmp_name']; //untuk menunjukkan lokasi file
	$tipe_gambar = $_FILES['gambar']['type']; //untuk menujukkan tipe file

	$tanggal = date('Ymd'); //year, mounth, day
	$isi = addslashes($_POST['isi']);

	if($lokasi_gambar==""){
		$input = mysqli_query($koneksi, "INSERT INTO artikel set
			judul = '$_POST[judul]',
			isi = '$_POST[isi]',
			tanggal = '$_POST[tanggal]'") or die (mysqli_error($koneksi)); //untuk menampilkan pesan kesalahan
	}else{
		move_uploaded_file($lokasi_gambar, "../gambar/artikel/$nama_gambar");
		$input = mysqli_query($koneksi, "INSERT INTO artikel set
			judul = '$_POST[judul]',
			isi = '$isi',
			tanggal = '$tanggal',
			gambar = '$nama_gambar'") or die (mysqli_error($koneksi));
	
	}
	if($input) {
		echo "Data telah tersimpan";
		echo "<meta http-equiv='refresh' content='1	url=?tampil=artikel'>";
	}
?>