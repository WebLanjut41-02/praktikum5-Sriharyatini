<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Registrasi</title>
  </head>
  <body>
<center>
<h1>Form Pendaftaran Constributor</h1></center>

<form action="<?=base_url().'index.php/Siswa/insert';?>" method="POST">
<div class="container">
<div class="row mt-3">
	<div class="col-md-12">

	<div class="form-group">
	    <label for="nama">NIS</label>
	    <input type="text" name="nis" class="form-control" id="nis" placeholder=" Masukan Nis ">
	</div>

	<div class="form-group">
	    <label for="nama">Nama Lengkap</label>
	    <input type="text"  name="nama" class="form-control" id="nama" placeholder="Masukan Naman Lengkap ">
	</div>

	<div class="form-group">
	    <label for="nama">Tempat, Tanggal Lahir</label>
	    <input type="text"  name="ttl" class="form-control" id="ttl" placeholder="Masukan Tempat, Tanggal Lahir">
	</div>

	<div class="form-group">
	    <label for="nama">Jenis Kelamin</label>
	    <input type="text"  name="jenis_kelamin" class="form-control" id="jenis_kelamin" placeholder="Masukan Jenis Kelamin">
	</div>

	<div class="form-group">
	    <label for="nama">Pendidikan</label>
	    <input type="text"  name="pend" class="form-control" id="pend" placeholder="Masukan Data Pendidikan anda! Contohnya, SD/SMP/SMA/Kuliah">
	</div>
	<div class="form-group">
	    <label for="nama">Nomor Telfon</label>
	    <input type="text"  name="telp" class="form-control" id="telp" placeholder="Masukan Nomor Telfon Anda">
	</div>
	<div class="form-group">
	    <label for="nama">Alamat Lengkap</label>
	    <input type="text"  name="alamat" class="form-control" id="alamat" placeholder="Masukan Nama Lengkap">
	</div>
	  <button type="submit" name="submit" value="submit" class="btn btn-primary" >Submit</button>
</div>
</div>
</div>
</form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>