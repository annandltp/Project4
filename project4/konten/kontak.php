<?php
	if(!defined("INDEX")) die("---");


?>
<h2>Kontak Kami</h2>
<form method="post" action="?tampil=kontak_proses">
	<table>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td valign="top">Pesan</td>
			<td><textarea name="pesan" cols="50" rows="10"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Kirim Pesan"></td>
		</tr>
	</table>
</form>