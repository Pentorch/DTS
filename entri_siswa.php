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
		<h1>Entri Siswa</h1><br>
			<form method="post" action="">

	<div class="form-group row">
	   	<label class="col-sm-2 col-form-label">Nama</label>
	    	<div class="col-sm-5">
	     		<input type="text" name="nama"  class="form-control" id="inputnama" placeholder="Masukan Nama Anda" required="">
	     	</div>
	</div>


	<div class="form-group row">
	    <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
	    <div class="col-sm-5">
	   		<div class="form-check">
	      		<input  class="form-check-input" type="radio" name="jekel" value="Laki-laki" checked="">
	      		<label class="form-check-label">Laki-Laki</label>
	      	</div>

	      	<div class="form-check">
	    		<input  class="form-check-input" type="radio" name="jekel" value="Perempuan" checked="">
	      		<label class="form-check-label">Perempuan</label>
	      	</div>
	     </div>
	</div>



	<div class="form-group row">
    		<label class="col-sm-2">Pilih Skema</label>
    		<div class="col-sm-5">
    			<select name="id_skema" class="form-control">
    				<option value="">--Pilih--</option>

    				<?php  
    					include 'koneksi.php';
    					$q=mysqli_query($db,"SELECT * FROM skema");
    					while ($data=mysqli_fetch_array($q)) {
    						echo "<option value=".$data[id].">".$data[nama_skema]."</option>"; 
    					}
    				?>
    			</select>
    		</div>
    </div>



	<div class="form-group row">
	    <label class="col-sm-2 col-form-label">Umur</label>
	    	<div class="col-sm-4">
	      		<input type="number" name="umur" class="form-control" id="inputumur" placeholder="Masukan Umur Anda" required="">
	    	</div>
	</div>

	<div class="form-group row">
    		 <label class="col-sm-2 col-form-label">Hobi</label>
    			<div class="col-sm-10">

      				<div class="form-check">
	        			<input class="form-check-input" type="checkbox" name="hobi[]"  value="Membaca" >
	        			<label class="form-check-labe1" for="gridCheck1">Membaca</label>
      				</div>

      				<div class="form-check">
	        			<input class="form-check-input" type="checkbox" name="hobi[]"  value="Menulis">
	        			<label class="form-check-labe2" for="gridCheck1">Menulis</label>
      				</div>
    			</div>
    </div>
	
	<div class="form-group row">
	    <label for="ttinggal" class="col-sm-2 col-form-label">Alamat</label>
	    	<div class="col-sm-10">
	      		<textarea name="alamat" cols="45" rows="5"></textarea>
	    	</div>
	</div>
  

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
			$hobi=implode(',', $_POST['hobi']);
		  include 'koneksi.php';//menyisipkan file lain
		  $q=mysqli_query($db, "INSERT INTO siswa(nama,jk,id_skema,umur,hobi,alamat)VALUES('$_POST[nama]','$_POST[jekel]','$_POST[id_skema]','$_POST[umur]','$hobi','$_POST[alamat]')");
		  if ($q)
		    echo "<script>window.location='?p=siswa'</script>";
		}
	?>
</div>
</div>
</body>
</html>