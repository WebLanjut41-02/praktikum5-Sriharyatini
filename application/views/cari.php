
<div class="row mt-3">
  <div class="col-md-5">
 <center><h1>Data Perusahaan</h1></center>

<div class="container">
<table class="table table-striped">
	<thead>
	<tr>
		<th>NIS</th>
		<th>Nama Lengkap</th>
		<th>Tempat,Tanggal Lahir</th>
		<th>Jenis Kelamin</th>
		<th>Pendidikan</th>
		<th>Nomor Telfon</th>
		<th>Alamat Lengap</th>
	</tr>
</thead>

	<?php
	$no=1;
	foreach($result as $r) {
		?>
	<tr>
		<td><?php echo $r->nis ?></td>
		<td><?php echo $r->nama ?></td>
		<td><?php echo $r->ttl ?></td>
		<td><?php echo $r->jenis_kelamin ?></td>
		<td><?php echo $r->pend ?></td>
		<td><?php echo $r->telp ?></td>
		<td><?php echo $r->alamat ?></td>
	</tr>
	<?php
		$no++;
		}
	?>
</table><br>
</div>