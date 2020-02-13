<?php
include 'koneksi.php';
$q=mysqli_query($db, "DELETE FROM skema WHERE id='$_GET[id]' ");
if ($q) 
	header('location:index.php?p=skema'); //redirect


?>