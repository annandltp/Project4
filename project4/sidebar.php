<?php
	if(!defined("INDEX")) die("---");
?>

<div class="box">

	<h3 class="judul">PENCARIAN</h3>
	<form method="post" action="?tampil=pencarian">
		<input type="text" name="kata" placeholder="Cari di sini...">
		<input type="submit" value="Cari">
	</form>

	<!-- 1 /-->
	<h3 class="judul">Video</h3>
	<video src="media/sablon.mp4" width="100%" controls></video> <!-- control digunakan untuk menampilkan play, pause, dll -->

	<!-- 2 /-->
	<h3 class="judul">Artikel Terbaru</h3>
	<ul>
		<?php
			$artikel = mysqli_query($koneksi, "select * from artikel order by id_artikel desc limit 5");
			while($data=mysqli_fetch_array($artikel)){
				echo"<li><a href='?tampil=artikel_detail&id=$data[id_artikel]'>$data[judul]</a></li>";
			}
		?>
	</ul>

	<!-- 3 /-->
	<h3 class="judul">Artikel Populer</h3>
	<ul>
		<?php
			$artikel = mysqli_query($koneksi, "select * from artikel order by hits desc limit 5");
			while($data=mysqli_fetch_array($artikel)){
				echo"<li><a href='?tampil=artikel_detail&id=$data[id_artikel]'>$data[judul]</a></li>";
			}
		?>
	</ul>

</div>