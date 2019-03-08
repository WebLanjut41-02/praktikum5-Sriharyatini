<table>
<form action="<?=base_url().'index.php/Siswa/update'?>" method="POST">
		<td>NIS</td>
		<td>:</td>
		<td><input type="text" name="nis" value="<?=$r['nis']?>"></td>
	</tr>
	<tr>
		<td>Nama  Lengkap</td>
		<td>:</td>
		<td><input type="text" name="nama" value="<?=$r['nama']?>"></td>
	</tr>
	<tr>
		<td>Tempat,Tanggal Lahir</td>
		<td>:</td>
		<td><input type="text" name="ttl" value="<?=$r['ttl']?>"></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><input type="text" name="jk" value="<?=$r['jenis_kelamin']?>"></td>
	</tr>
	<tr>
		<td>Pendidikan</td>
		<td>:</td>
		<td><input type="text" name="pend" value="<?=$r['pend']?>"></td>
	</tr>
	<tr>
		<td>Nomor Telfon</td>
		<td>:</td>
		<td><input type="text" name="telp" value="<?=$r['telp']?>"></td>
	</tr>
	<tr>
		<td>Alamat Lengkap</td>
		<td>:</td>
		<td><input type="text" name="alamat" value="<?=$r['alamat']?>"></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="submit" value="submit"></td>
	</tr>
</form>
</table>