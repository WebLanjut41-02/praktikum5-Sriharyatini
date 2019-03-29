<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="container">
<div class="row mt-3">

<table>
<form action="<?=base_url().'index.php/Siswa/update'?>" method="POST">
		<td>NAMA</td>
		<td>:</td>
		<td><input type="text" name="nama" value="<?=$r['nama']?>"></td>
	</tr>
	<tr>
		<td>NIM</td>
		<td>:</td>
		<td><input type="text" name="nim" value="<?=$r['nim']?>"></td>
	</tr>
	<tr>
		<td>Tempat,Tanggal lahir</td>
		<td>:</td>
		<td><input type="text" name="tgl_lahir" value="<?=$r['tgl_lahir']?>"></td>
	</tr>
	<tr>
		<td>IPK</td>
		<td>:</td>
		<td><input type="text" name="ipk" value="<?=$r['ipk']?>"></td>
	</tr>
	<tr>
		<td>KELAS</td>
		<td>:</td>
		<td><input type="text" name="kelas" value="<?=$r['kelas']?>"></td>
	</tr>
<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="submit" value="submit"></td>
	</tr>
</form>
</table>