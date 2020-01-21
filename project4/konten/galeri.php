<?php
	if(!defined("INDEX")) die("---");
?>
	<h2>Galeri Foto</h2>
	<div class="galeri">
		<table cellpadding="5">
			<tr>
				<?php
					$no = 1;
					$artikel = mysqli_query($koneksi, "select * from galeri order by id_galeri desc limit 12");
					while($data=mysqli_fetch_array($artikel)){
				?>
				<td align="center">
					<img src="gambar/galeri/<?= $data['gambar']; ?>" width="150" height="100">
					<br> <?= $data['judul']; ?>
				</td>
				<?php
					if($no%4 == 4) echo"</tr></tr>"; //untuk menutup baris sebelumnya jika nilai variabel $no kelipatan 4 dan membuka baris baru
					$no++;
				}
				?>
			</tr>
		</table>
	</div>