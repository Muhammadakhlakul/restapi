<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="tugas2.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<center>
<div class="header">
	<h2> Tugas 2 Menampilkan Database </h2>
</div>
	
<div class="row text-center">
  <div class="col-sm-4  thumbnail"> 
    <center>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>prodi</th>
		</tr>
		<h3>Tabel Mahasiswa</h3>
	<?php 
	  include 'koneksi.php';
	  $no = 1;
	  $data = mysqli_query($koneksi,"select * from mahasiswa");
	  while($d = mysqli_fetch_array($data)){
	?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['nim']; ?></td>
			<td><?php echo $d['nama']; ?></td>
			<td><?php echo $d['prodi']; ?></td>
		</tr>
	<?php 
		}
	?>
	</table>
	</center>
  </div>
	
  <div class="col-sm-4 thumbnail">
    <center>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>kode matakuliah</th>
			<th>nama matakuliah</th>
			<th>sks</th>
			<th>prodi</th>
		</tr>
		<h3>Tabel Matakuliah</h3>
	<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from matakuliah");
		while($d = mysqli_fetch_array($data)){
	?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['kdmk']; ?></td>
			<td><?php echo $d['nmmk']; ?></td>
			<td><?php echo $d['sks']; ?></td>
			<td><?php echo $d['prodi']; ?></td>
		</tr>
	<?php 
		}
	?>
	</table>
	</center>
  </div>
	
  <div class="col-sm-4 thumbnail">
    <center>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>tahun akademik</th>
			<th>nim</th>
			<th>kode matakuliah</th>
			<th>nilai</th>
			
		</tr>
		<h3>Tabel Nilai</h3>
	<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from nilai");
		while($d = mysqli_fetch_array($data)){
	?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['thakd']; ?></td>
			<td><?php echo $d['nim']; ?></td>
			<td><?php echo $d['kdmk']; ?></td>
			<td><?php echo $d['nilai']; ?></td>
		</tr>
	<?php 
		}
	?>
	</table>
	</center>
  </div>
 </div>
	
<div class="row text-center">
  <div class="col-sm-12 thumbnail">
    <center>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>id</th>
			<th>username</th>
			<th>password</th>
			<th>Nama</th>
			<th>umur</th>
			<th>alamat</th>
			<th>telp</th>
			<th>email</th>
			<th>tanggal lahir</th>
			<th>kode pos</th>
			<th>nama ibuk</th>
			<th>gender</th>
		</tr>
		<h3>Tabel Customer</h3>
	<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from customer");
		while($d = mysqli_fetch_array($data)){
	?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['id_customer']; ?></td>
			<td><?php echo $d['username']; ?></td>
			<td><?php echo $d['password']; ?></td>
			<td><?php echo $d['nama']; ?></td>
			<td><?php echo $d['umur']; ?></td>
			<td><?php echo $d['alamat']; ?></td>
			<td><?php echo $d['telp']; ?></td>
			<td><?php echo $d['email']; ?></td>
			<td><?php echo $d['tgl_lahir']; ?></td>
			<td><?php echo $d['kode_pos']; ?></td>
			<td><?php echo $d['nama_ibu_k']; ?></td>
			<td><?php echo $d['gender']; ?></td>
		</tr>
	<?php 
		}
	?>
	</table>
	</center>
  </div>
 </div>

</body>
</html>
