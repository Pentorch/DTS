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
		<h1>Edit Instruktur</h1><br>

<?php 
	include 'koneksi.php';
	$ambil=mysqli_query($db, "SELECT * FROM instruktur WHERE id='$_GET[id]' ");
	$data=mysqli_fetch_array($ambil);

	function active_radio_button($value,$input){
    // apabila value dari radio sama dengan yang di input
    $result =  $value==$input?'checked':'';
    return $result;

	}
 ?>


<fieldset>
	<form method="post" action="">

	  	<div class="form-group row">
	   	 <label class="col-sm-2 col-form-label">Nama</label>
	    	<div class="col-sm-5">
	      		<input type="text" name="nama" value="<?= $data['nama'] ?>" class="form-control">
	    	</div>
	  	</div>


	  	<div class="form-group row">
	   	 <label class="col-sm-2 col-form-check">Jenis Kelamin</label>
	    	<div class="form-check">
	    		<label class="form-check-label">
	    		<div class="col-sm-12">
	      		<input type="radio" class="form-check-input" name="jekel" value="L" <?php echo active_radio_button("L",$data['jekel'])?>>Laki-laki
	      		<br/>
	      		<input type="radio" class="form-check-input" name="jekel" value="P" <?php echo active_radio_button("P",$data['jekel'])?>>Perempuan
	      		</div>
	      		</label>
	    	</div>
	  	</div>


	  	<div class="form-group row">
	    	<label class="col-sm-2 col-form-label">Email</label>
	    		<div class="col-sm-4">
	      			<input type="email" name="email" value="<?= $data['email'] ?>" class="form-control" >
	    		</div>
	 	 </div>


	 	 <div class="form-group row">
	    	<label class="col-sm-2 col-form-label">No.Telpon</label>
	    		<div class="col-sm-4">
	      			<input type="tel" name="notelpon" value="<?= $data['notelpon'] ?>" class="form-control" >
	    		</div>
	 	 </div>


	  	<div class="form-group row">
	   		<label class="col-sm-2 col-form-label">Skema</label>
	    		<div class="col-sm-5">
	    			<select class="form-control" name="id_skema">
		    			<?php  
	    					include 'koneksi.php';
	    					$q=mysqli_query($db,"SELECT * FROM skema");
	    					while ($result=mysqli_fetch_array($q)) {
	    						echo "<option value=$result[id] ".($data[id_skema]==$result[id] ? 'selected' : '').">". $result[nama_skema] . "</option>";
	    					}
	    				?>	
	    			</select>
	    		</div>
	  	</div>

	
		<div class="form-group row">
	    	<label for="ttinggal" class="col-sm-2 col-form-label">Alamat</label>
	    		<div class="col-sm-10">
	      			<textarea name="alamat" cols="45" rows="5"> <?= $data['alamat'] ?> </textarea>
	    		</div>
		</div>
</fieldset>


	<div class="form-group row">
  		<label for="ttinggal" class="col-sm-2 col-form-label"></label>
	    	<div class="col-sm-10">
  				<div class="form-group row">
    				<div class="col-sm-10">
      					<input type="submit" value="Update" name="submit" class="btn btn-primary">
      				</div>
  				</div>
			</div>
		</div>
	</form>


	<?php
		if (isset($_POST['submit'])){
		  $q=mysqli_query($db, "UPDATE instruktur SET 
		  	nama 		='$_POST[nama]',
		  	jekel 		='$_POST[jekel]',
		  	email 		='$_POST[email]',
		  	notelpon 		='$_POST[notelpon]',
		  	id_skema 	='$_POST[id_skema]',
		  	alamat 		='$_POST[alamat]'
		  	 WHERE 	id='$_GET[id]'");
		  if ($q)
		     echo "<script>window.location='?p=instruktur'</script>";
		}
	?>
</div>
</body>
</html>