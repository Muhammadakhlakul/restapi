<!DOCTYPE html>
<html>
<head>
	<style>
		body, h3, h4 {
			text-align: center;
		}
	
		table {
			border-collapse: collapse;
			width: 100%;
		}

		th, td {
			text-align: center;
			padding: 8px;
			background-color: #f2f2f2
		}

		th {
			background-color: #ff471a;
			color: white;
		}
	</style>
</head>
<body>

		<h4>Tampilan Format JSON Tabel BEM U</h4>
	<?php
		include'terhubung.php';
 
		$query = mysqli_query($koneksi, 'select * from bemu');
 
		if (mysqli_num_rows($query) > 0) {
			# buat array
			$responsistem = array();
			$responsistem["data"] = array();
		while ($row = mysqli_fetch_assoc($query)) {
			# kerangka format penampilan data json
			$data['id'] = $row["id"];
			$data['nama lk'] = $row["nama_lk"];
			$data['nim anggota'] = $row["nim_anggota"];
			$data['nama anggota'] = $row["nama_anggota"];
			$data['jabatan'] = $row["jabatan_anggota"];
			array_push($responsistem["data"], $data); 
		}
		echo json_encode($responsistem);
		} else {
			# menmapilkan pesan jika tidak ada data dalam tabel
			$responsistem["message"]="tidak ada data";
			echo json_encode($responsistem);
		}
	?>
		<br>
		<h4>Tampilan Format JSON Tabel IC</h4>

	<?php
		include'terhubung.php';
 
		$query = mysqli_query($koneksi, 'select * from ic');

		if (mysqli_num_rows($query) > 0) {
			# buat array
			$responsistem = array();
			$responsistem["data"] = array();
		while ($row = mysqli_fetch_assoc($query)) {
			# kerangka format penampilan data json
			$data['id'] = $row["id"];
			$data['nama lk'] = $row["nama_lk"];
			$data['nim anggota'] = $row["nim_anggota"];
			$data['nama anggota'] = $row["nama_anggota"];
			$data['jabatan'] = $row["jabatan_anggota"];
			array_push($responsistem["data"], $data);
		}
			echo json_encode($responsistem);
		} else {
			# menmapilkan pesan jika tidak ada data dalam tabel
			$responsistem["message"]="tidak ada data";
			echo json_encode($responsistem);
		}
	?>
		
		<br>
		<h4>Tampilan Format JSON Tabel User</h4>
	<?php
		include'terhubung.php';
 
		$query = mysqli_query($koneksi, 'select * from user');
	
		if (mysqli_num_rows($query) > 0) {
			# buat array
			$responsistem = array();
			$responsistem["data"] = array();
		while ($row = mysqli_fetch_assoc($query)) {
			# kerangka format penampilan data json
			$data['id'] = $row["id"];
			$data['nama'] = $row["nama"];
			$data['username'] = $row["username"];
			$data['password'] = $row["password"];
			$data['level'] = $row["level"];
			array_push($responsistem["data"], $data);
		}
		echo json_encode($responsistem);
		} else {
			# menmapilkan pesan jika tidak ada data dalam tabel
			$responsistem["message"]="tidak ada data";
			echo json_encode($responsistem);
		}
	?>
	
	&nbsp;
 
	<table>
		<tr>
			<th>NO</th>
			<th>ID</th>
			<th>Nama LK</th>
			<th>NIM</th>
			<th>Nama Anggota</th>
			<th>Jabatan Anggota</th>
		</tr>
		<h3>Tampilan Tabel Anggota BEM U (normal)</h3>
	<?php 
		include 'terhubung.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from bemu");
		while($d = mysqli_fetch_array($data)){
	?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['id']; ?></td>
			<td><?php echo $d['nama_lk']; ?></td>
			<td><?php echo $d['nim_anggota']; ?></td>
			<td><?php echo $d['nama_anggota']; ?></td>
			<td><?php echo $d['jabatan_anggota']; ?></td>
		</tr>
	<?php 
		}
	?>
	</table>
	<br>
	
	<table>
		<tr>
			<th>NO</th>
			<th>ID</th>
			<th>Nama LK</th>
			<th>NIM</th>
			<th>Nama Anggota</th>
			<th>Jabatan Anggota</th>
		</tr>
		<h3>Tabel Anggota Internet Club (normal)</h3>
	<?php 
		include 'terhubung.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from ic");
		while($d = mysqli_fetch_array($data)){
	?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['id']; ?></td>
			<td><?php echo $d['nama_lk']; ?></td>
			<td><?php echo $d['nim_anggota']; ?></td>
			<td><?php echo $d['nama_anggota']; ?></td>
			<td><?php echo $d['jabatan_anggota']; ?></td>
		</tr>
	<?php 
		}
	?>
	</table>
	<br>

	<table>
		<tr>
			<th>NO</th>
			<th>ID</th>
			<th>Nama User</th>
			<th>Username</th>
			<th>password</th>
			<th>Level</th>
		</tr>
		<h3>Tabel Anggota User (normal)</h3>
	<?php 
		include 'terhubung.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from user");
		while($d = mysqli_fetch_array($data)){
	?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['id']; ?></td>
			<td><?php echo $d['nama']; ?></td>
			<td><?php echo $d['username']; ?></td>
			<td><?php echo $d['password']; ?></td>
			<td><?php echo $d['level']; ?></td>
		</tr>
	<?php 
		}
	?>
	</table>
	
</body>
</html>