<!DOCTYPE html>
<html>
<head>
	<title>Edit Form pada PHP</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="">
<style>body{
	padding-top:25px;
		}
</style>
</head>
<body>
	<div class="container">
		<h1>Edit Skema</h1><br>

<?php 
	include 'koneksi.php';
	$ambil=mysqli_query($db, "SELECT * FROM skema WHERE id='$_GET[id]' ");
	$data=mysqli_fetch_array($ambil);
 ?>

	<form method="post" action="">
	  	<div class="form-group row">
	   	 <label class="col-sm-2 col-form-label">Nama Skema</label>
	    	<div class="col-sm-5">
	      		<input type="text" name="nama_skema" value="<?= $data['nama_skema'] ?>" class="form-control" id="inputnama" placeholder="Nama Skema" required="">
	    	</div>
	  	</div>
	  	

	
		<div class="form-group row">
	    	<label for="ttinggal" class="col-sm-2 col-form-label">Keterangan</label>
	    		<div class="col-sm-10">
	      			<textarea name="keterangan" cols="45" rows="5"> <?= $data['keterangan'] ?> </textarea>
	    		</div>
		</div>

  </fieldset>
  <div class="form-group row">
	    <label for="ttinggal" class="col-sm-2 col-form-label"></label>
	    	<div class="col-sm-10">
  <div class="form-group row">
    <div class="col-sm-10">
      <input type="submit" value="Update" name="submit" class="btn btn-success">
      </div>
  </div>
</div>
</form>

	<?php
		if (isset($_POST['submit'])){
		  $q=mysqli_query($db, "UPDATE skema SET 
		  	nama_skema 	='$_POST[nama_skema]',
		  	keterangan 	='$_POST[keterangan]'
		  	 WHERE id='$_GET[id]'");
		  if ($q)
		   echo "<script>window.location='?p=skema'</script>";
		}
	?>
</div>
</body>
</html>