<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">	
  <style>
    body {
      padding-top: 25px;
    }
  </style>
</head>
<body>
	<header>
  <h2>Digital Talent Scholarship</h2>
  <h4>Vocational School Graduate Academy</h4>
  </header>
  <section>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="index.php?p=siswa">Data Siswa</a></li>
        <li><a href="index.php?p=skema">Data Skema</a></li>
      </ul>
    </nav>
    <article>
      <?php
          $page=isset($_GET['p']) ? $_GET['p'] : 'home';
          if ($page=='home') include 'home.php';
          if ($page=='siswa') include 'list_siswa.php';
          if ($page=='skema') include 'list_skema.php';
          if ($page=='tambah_siswa') include 'entri_siswa.php';
          if ($page=='tambah_skema') include 'entri_skema.php';
          if ($page=='edit_siswa') include 'edit_siswa.php';
          if ($page=='edit_skema') include 'edit_skema.php';
          if ($page=='hapus_siswa') include 'delete_siswa.php';
          if ($page=='hapus_skema') include 'delete_skema.php';

      ?>
    </article>
</section>
<footer><p>Footer</p>
</footer>


</body>
</html>