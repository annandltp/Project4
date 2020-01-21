<?php
	$tampil = mysqli_query($koneksi, "select * from pesan where id_pesan='$_GET[id]'") or die(mysqli_error($koneksi));

	$data = mysqli_fetch_array($tampil);
?>

<h2>Balas Pesan</h2>

<form name="edit" method="post" action="?tampil=pesan_balasproses">
	<input type="hidden" name="id" value="<?= $data['id_psan']; ?>">
		<table>
			<tr>
				<td>Kepada</td>
				<td><input type="text" name="email" size="50" value="<?= $data['email']; ?>"></td>
			</tr>

			<tr>
				<td>Subjek</td>
				<td><input type="text" name="subjek" size="50" value="Re: <?= $data['subjek']; ?>"></td>
			</tr>

			<tr>
				<td>Pesan</td>
				<td> <?= $data['pesan']; ?> </td>
			</tr>

			<tr>
				<td>Balas</td>
				<td><textarea name="balas" cols="80" rows="10"><?= $data['balasan']; ?></textarea></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" name="edit" value="Balas"></td>
			</tr>
		</table>
</form>