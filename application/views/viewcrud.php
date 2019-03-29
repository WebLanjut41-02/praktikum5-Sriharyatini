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


	foreach($data as $r) {
		?>
	<tr>
		<td><?php echo $r['nama'] ?></td>
		<td><?php echo $r['nim'] ?></td>
		<td><?php echo $r['tgl_lahir'] ?></td>
		<td><?php echo $r['ipk'] ?></td>
		<td><?php echo $r['kelas'] ?></td>
		<td><a href="<?=base_url().'index.php/Siswa/delete/'.$r['nim']?>">Hapus</a> ||
		<a href="<?=base_url().'index.php/Siswa/update/'.$r['nim']?>">Edit</a></td>
	</tr>
	<?php
		$no++;
		}
	?>

        </tbody>
	</table>
    <div class="row">
    	<div class="col">
	<?php
    		    echo $this->pagination->create_links();
    ?>	
    	</div>
    </div>

</div>
<!--Load file bootstrap.js-->
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
</body>
</html>