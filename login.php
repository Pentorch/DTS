<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>DTS - 2019 | Log in</title>
  <link href="dist/img/favicon.ico" rel="shortcut icon">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="dist/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">

</head>
<body background = "dist/img/12.jpg">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>DTS</b>- 2019</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="" method="post">
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Username">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8"></div>



          <div class="col-xs-4">
          <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
      </div>
        <!-- /.col -->
      </div>
    </form>
    <?php
    if(isset($_POST['submit'])){
    include 'koneksi.php';
    $pass=md5($_POST['password']);
    $login=mysqli_query($db,"SELECT * FROM user WHERE username='$_POST[username]' AND password='$pass'");
    $cek=mysqli_num_rows($login);
    $data=mysqli_fetch_array($login);
    if($cek>0) {
      session_start();
      $_SESSION['status']='login';
      $_SESSION['level']=$data['level'];
      echo "<script>window.location='index.php'</script>";
    }
  }
    ?>
