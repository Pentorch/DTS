<?php
include 'koneksi.php';
$q=mysqli_query($db, "DELETE FROM siswa WHERE id='$_GET[id]' ");
if ($q) 
	header('location:index.php?p=siswa'); //redirect


?>