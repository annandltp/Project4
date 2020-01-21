<?php
	if(!defined("INDEX")) die("---");
?>

<ul class="nav">
	<?php
		$menu = mysqli_query($koneksi, "select * from menu order by urutan");
		while($data=mysqli_fetch_array($menu)){
	?>
		
	<li><a href="<?= $data['link']; ?>"> <?= $data['judul']; ?></a>

		<ul>
			<?php
			$submenu = mysqli_query($koneksi, "SELECT * FROM submenu WHERE id_menu='$data[id_menu]'");
			while($datasub = mysqli_fetch_array($submenu)){
			?>

			<li><a href="<?= $datasub['link']; ?>">
				<?= $datasub['judul']; ?> </a></li>
			
			<?php
				}
			?>
		</ul>
	</li>
	<?php
		}
	?>
</ul>