<!DOCTYPE html>
<html>
<head>
	<title>Edit CRUD</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap.css">
</head>
<body>
<?php 
include "config/koneksi.php";
if(isset($_GET['id'])):
if(isset($_POST['btn'])):
	$crud=$mysqli->prepare("UPDATE anggota set nama=?,kelas=? WHERE id =?");
	$crud->bind_param('sss',$nama,$kelas,$id);
	$nama=$_POST['nama'];
	$kelas=$_POST['kelas'];
	$id=$_POST['id'];
	if($crud->execute()):
		echo "<script>location.href='index.php'</script>";
	else:
		echo "<script>alert('".$crud->error."')</script>";
	endif;
endif;
$table=$mysqli->query("SELECT * FROM anggota WHERE id =".$_GET['id']);
$row=$table->fetch_assoc();
?>
<form method="post">
     <input type="hidden" value="<?php echo $row['id'] ?>" name="id"/>
     <p><input type="text" value="<?php echo $row['nama'] ?>" name="nama"/></p>
     <p><input type="text" value="<?php echo $row['kelas'] ?>" name="kelas"/></p>

     <input type="submit" value="Update" name="btn"/>
</form>
<?php
endif;
?>

</body>
</html>