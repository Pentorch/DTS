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
		<h1>Edit User</h1><br>

<?php 
	include 'koneksi.php';
	$ambil=mysqli_query($db, "SELECT * FROM user WHERE username='$_GET[username]'" );
	$data=mysqli_fetch_array($ambil);
	
 ?>


<fieldset>
	<form method="post" action="">

	  	<div class="form-group row">
	   	 <label class="col-sm-2 col-form-label">Username</label>
	    	<div class="col-sm-4">
	      		<input type="text" name="username" value="<?= $data['username'] ?>" class="form-control">
	    	</div>
	  	</div>


	  	<div class="form-group row">
	    	<label class="col-sm-2 col-form-label">Password</label>
	    		<div class="col-sm-4">
	      			<input type="password" name="password"  class="form-control" > *Kosongkan Jika Tidak Ingin Mengubah Password
	    		</div>
	 	 </div>

	 	 <div class="form-group row">
	    	<label class="col-sm-2 col-form-label">Confirm Password</label>
	    		<div class="col-sm-4">
	      			<input type="password" name="password_ulang" class="form-control" >
	    		</div>
	 	 </div>

	 	 <div class="form-group row">
	    	<label class="col-sm-2 col-form-label">Email</label>
	    		<div class="col-sm-4">
	      			<input type="email" name="email" value="<?= $data['email'] ?>" class="form-control" >
	    		</div>
	 	 </div>

	 	 <div class="form-group row">
	    	<label class="col-sm-2 col-form-label">Level</label>
	    		<div class="col-sm-4">
	      			<input type="text" name="level" value="<?= $data['level'] ?>" class="form-control" >
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
			$pass=md5($_POST['password']);
			include 'koneksi.php';
			if ($_POST['password']!="") {
				$q=mysqli_query($db, "UPDATE user SET 
			  	username 		='$_POST[username]',
			  	password 		='$pass',
			  	email 			='$_POST[email]',
			  	level 			='$_POST[level]'
			  	WHERE username='$_GET[username]'");
			}

		else {
		  	$q=mysqli_query($db, "UPDATE user SET 
			  	username 		='$_POST[username]',
			  	email 			='$_POST[email]',
			  	level 			='$_POST[level]'
			  	WHERE username='$_GET[username]'");
		}
		if ($q)
		    echo "<script>window.location='?p=user'</script>";
		}
	?>
</div>
</body>
</html>