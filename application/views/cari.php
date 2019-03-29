<center>
<div class="row mt-3">
  <div class="col-md-5">
   
      </div>
    </div>
   </form>
  </div>
 </div>
</center>

<center><h1>DATA MAHASISWA</h1></center>

<div class="container">
<table class="table table-striped">
	<thead>
	<tr>
		<th>NAMA</th>
		<th>NIM</th>
		<th>Tempat,Tanggal Lahir</th>
		<th>IPK</th>
		<th>KELAS</th>
		<th>Aksi</th>

	</tr></thead>
	<?php
	$no=1;

	foreach($result as $r) {
		?>
	<tr>
		<td><?php echo $r->nama?></td>
		<td><?php echo $r->nim ?></td>
		<td><?php echo $r->tgl_lahir ?></td>
		<td><?php echo $r->ipk ?></td>
		<td><?php echo $r->kelas ?></td>
		
	</tr>
	<?php
		$no++;
		}
	?>
</table><br>
</div>