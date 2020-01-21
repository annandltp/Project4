<?php
	if($_POST['password'] == ""){
		$edit = mysqli_query($koneksi, "UPDATE user SET username = '$_POST[username]'") or die(mysqli_error($koneksi));
		if($edit) echo"Profil Berhasil di Edit";
	}else{
		if($_POST['password'] != $_POST['password_ulang']){ //simbol != adalah tidak sama maka akan menampilkan error
			echo"<p style='color:red'>
				password dan ulang password tidak sama</p>"; 
		}else{
			$password = md5($_POST['password']);
			$edit = mysqli_query($koneksi, "UPDATE user SET
					username = '$_POST[username]',
					password = '$password'") or die(mysqli_error($koneksi));
			if($edit) echo"Profil Berhasil di Edit";
		}
	}

	echo"<meta http-equiv='refresh'
		content='1; url=?tampil=user_edit'>";
?>