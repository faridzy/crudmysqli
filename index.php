<!DOCTYPE html>
<html>
<head>
	<title>CRUD MYSQLI</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap.css">
</head>
<body>
<h2 align="center">CRUD Sederhana dengan Mysqli</h2>
<div class="container">
<a href="tambah.php" class="btn btn-primary">Tambah</a>
<table class="table table-bordered">
<thead>
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Kelas</th>
		<th>Aksi</th>
	</tr>
</thead>
<tbody>
    <?php
    //include file koneksi
	include"config/koneksi.php";
	//query menampilkan data
	$table = $mysqli->query("SELECT * FROM anggota");
	//looping data
	while ($row = $table->fetch_assoc()):
	?>
	<tr>
		<td><?php echo $row['id'] ?></td>
		<td><?php echo $row['nama'] ?></td>
		<td><?php echo $row['kelas'] ?></td>
		<td>
			<a href="edit.php?id=<?php echo $row['id'] ?>">Edit</a>|
			<a href="hapus.php?id=<?php echo $row['id'] ?>">Hapus</a>
		</td>
	</tr>
	<?php
	endwhile;
	?>
</tbody>
</table>
</div>
</body>
</html>