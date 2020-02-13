<?php
include 'koneksi.php';
$q=mysqli_query($db, "DELETE FROM user WHERE username='$_GET[username]' ");
if ($q) 
	header('location:index.php?p=user'); //redirect


?>