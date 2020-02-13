<!DOCTYPE html>
<html>
<head>
	<title>Penanganan Form pada PHP</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="">
<style>body{
padding-top:25px;
	}
</style>
</head>
<body>
	<div class="container">
		<h1>Entri Skema</h1><br>
<form method="post" action="">
	  <div class="form-group row">
	    <label class="col-sm-2 col-form-label">Nama Skema Pelatihan</label>
	    	<div class="col-sm-5">
	      		<input type="text" name="nama_skema"  class="form-control" id="inputskema" placeholder="Nama Skema" required="">
	    	</div>
	  </div>
	 	
	 	<div class="form-group row">
	    <label for="ttinggal" class="col-sm-2 col-form-label">Keterangan</label>
	    	<div class="col-sm-10">
	      		<textarea name="keterangan" placeholder="Masukan Keterangan Anda" cols="45" rows="5"></textarea>
	    	</div>
		</div>

  </fieldset>
  <div class="form-group row">
	    <label for="ttinggal" class="col-sm-2 col-form-label"></label>
	    	<div class="col-sm-10">
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" name="simpan" class="btn btn-danger">Simpan</button>
      </div>
  </div>
</div>
</form>

	<?php
		if (isset($_POST['simpan'])){
		  include 'koneksi.php';//menyisipkan file lain
		  $q=mysqli_query($db, "INSERT INTO skema(nama_skema,keterangan)VALUES('$_POST[nama_skema]','$_POST[keterangan]')");
		  if ($q)
		    echo "<script>window.location='?p=skema'</script>";
		}
	?>
</div>
</body>
</html>