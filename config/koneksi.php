<?php
$mysqli=new mysqli("localhost","root","","db_webdev");
if($mysqli->connect_errno){

	echo "Failed Connect:".
	$mysqli->connect_error;

}
?>