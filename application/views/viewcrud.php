<center>
<div class="row mt-3">
  <div class="col-md-5">
   
      </div>
    </div>
   </form>
  </div>
 </div>
</center>

<center><h1>Data Perusahaan</h1></center>

<div class="container">
<table class="table table-striped">
	<thead>
	<tr>
		<th>NIS</th>
		<th>Nama Lengkap</th>
		<th>Tempat,Tanggal Lahir</th>
		<th>Jenis Lelamin</th>
		<th>Pendidikan</th>
		<th>Nomor Telfon</th>
		<th>Alamat Lengkap</th>
		<th>Aksi</th>

	</tr></thead>
	<?php
	$no=1;


	foreach($data as $r) {
		?>
	<tr>
		<td><?php echo $r['nis'] ?></td>
		<td><?php echo $r['nama'] ?></td>
		<td><?php echo $r['ttl'] ?></td>
		<td><?php echo $r['jenis_kelamin'] ?></td>
		<td><?php echo $r['pend'] ?></td>
		<td><?php echo $r['telp'] ?></td>
		<td><?php echo $r['alamat'] ?></td>
		<td><a href="<?=base_url().'index.php/Siswa/delete/'.$r['nis']?>">Hapus</a> ||
		<a href="<?=base_url().'index.php/Siswa/update/'.$r['nis']?>">Edit</a></td>
	</tr>
	<?php
		$no++;
		}
	?>
</table><br>
</div>