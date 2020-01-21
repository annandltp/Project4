<?php
	mysqli_query($koneksi, "UPDATE pesan SET balasan='$_POST[balas]' WHERE id_pesan='$_POST[id]'") or die(mysqli_error($koneksi));

	$email = mail($_POST['email'], $_POST['subjek'], $_POST['pesan'],
		"From: pemilikwebsite@gmail.com"); //code untuk mengirim email
	//maka nanti akan muncul error: Notice: Undefined index: pesan in C:\xampp\htdocs\project4\admin\pesan\pesan_balasproses.php on line 4
	//itu karena website kita belum dokoneksikan ke hosting

	echo"Data telah terhapus";
	echo"<meta http-equiv='refresh'
		content='1; url=?tampil=pesan'>";
	
?>