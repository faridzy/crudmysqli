<!DOCTYPE html>
<html>
<head>
	<title>Hapus</title>
</head>
<body>
<?php
include "config/koneksi.php";
if(isset($_GET['id'])):
	$crud=$mysqli->prepare("DELETE FROM anggota WHERE id=?");
	$crud->bind_param('s',$id);
	$id=$_GET['id'];

	if($crud->execute()):
		echo "<script>location.href='index.php'</script>";
	else:
		echo "<script>alert('".$crud->error."'')</script>";
	endif;
endif;


?>

</body>
</html>