<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <title>Data Constribbutor</title>
  </head>
  <body>


   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php base_url();?>Siswa">Data Coonstributor</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php base_url();?>Siswa/insert">Regristrasi</a>
      </li>
      <li class="nav-item">
        <a class=" " href="#" tabindex="-1" aria-disabled="true"></a>
         <form action="<?php echo base_url()?>index.php/Siswa/search" method="post">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Cari Nis Siswa . . ." name="keyword">
      <div class="input-group-append">
        <button class="btn btn-primary" type="submit">Cari</button>
      </li>
    </ul>
  </div>
</nav>