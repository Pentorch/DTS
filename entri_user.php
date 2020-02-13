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
		<h1>Entri User Pengguna</h1><br>
			<form method="post" action="">

	<div class="form-group row">
	   	<label class="col-sm-2 col-form-label">Username</label>
	    	<div class="col-sm-4">
	     		<input type="text" name="username"  class="form-control" id="inputuser" placeholder="Masukan Username Anda" required="">
	     	</div>
	</div>


	<div class="form-group row">
	    <label class="col-sm-2 col-form-label">Password</label>
	    	<div class="col-sm-4">
	      		<input type="password" name="password" class="form-control" id="inputpassword" placeholder="Masukan Password Anda" required="">
	    	</div>
	</div>

	<div class="form-group row">
	    <label class="col-sm-2 col-form-label">Confirm Password</label>
	    	<div class="col-sm-4">
	      		<input type="password" name="password_ulang" class="form-control" id="inputpassword" placeholder="Masukan Password Anda" required="">
	    	</div>
	</div>


	<div class="form-group row">
	    <label class="col-sm-2 col-form-label">Email</label>
	    	<div class="col-sm-4">
	      		<input type="email" name="email" class="form-control" id="inputemail" placeholder="Masukan Email Anda" required="">
	    	</div>
	</div>

	<div class="form-group row">
    		<label class="col-sm-2">Pilih Level</label>
    		<div class="col-sm-4">
    			<select name="level" class="form-control">
    				<option value="">--Pilih--</option>
    				<option value="adiministrator">Adiministrator</option>
    				<option value="operator">Operator</option>
    			</select>
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
		$pass=md5($_POST['password']);
		  include 'koneksi.php';//menyisipkan file lain
		  if ($_POST['password']!=$_POST['password_ulang']){
		  	echo "<script>alert('Password anda adalah');</script>";
		  }
		  else {
		  $q=mysqli_query($db, "INSERT INTO user(username,password,email,level)VALUES('$_POST[username]','$pass','$_POST[email]','$_POST[level]')");
		  if ($q)
		    echo "<script>window.location='?p=user'</script>";
		}
		}
	?>
</div>
</div>
</body>
</html>