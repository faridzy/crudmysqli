<!DOCTYPE html>
<html>
<head>
	<title>Edit CRUD</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap.css">
</head>
<body>
<?php 
include "config/koneksi.php";
//isset dari input  name btn
if(isset($_POST['btn'])):
	$crud=$mysqli->prepare("INSERT INTO anggota (nama,kelas) VALUES(?,?)");
	$crud->bind_param('ss',$nama,$kelas);
	$nama=$_POST['nama'];
	$kelas=$_POST['kelas'];
	if($crud->execute()):
		echo "<script>location.href='index.php'</script>";
	else:
		echo "<script>alert('".$crud->error."')</script>";
	endif;
endif;
?>
<form method="post" class="form-horizontal">
<p><input type="text" placeholder="Name" name="nama"/></p>
<p><input type="text" placeholder="Tel" name="kelas"/></p>
<input type="submit" value="Save" name="btn"/>
</form>

</body>
</html>