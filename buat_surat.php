<html>
<head>
<meta charset="utf-8">
<title>Buat Surat Izin Sekolah Generator</title>
  <link rel="icon" type="image/png" href="img/icon.png">
  <meta charset="utf-8">
    <meta name="description" content="Buat Surat Izin Sekolah Online">
  <meta name="keywords" content="Bikin SUrat,surat,surat izin,make surat izin,surat sekolah,contoh surat sekolah,surat sekolah generator,surat izin generator,surat izin tidak masuk sekolah,surat sekolah,surat tdk masuk,surat izin tdk sekolah">
  <meta name="author" content="Muhamad Bagus Maulana">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 20px Montserrat, sans-serif;
    line-height: 1.8;
    color: black;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 {
    background-color: #1abc9c; /* Green */
    color: #ffffff;
  }
  .bg-2 {
    background-color: #474e5d; /* Dark Blue */
    color: #ffffff;
  }
  .bg-3 {
    background-color: #ffffff; /* White */
    color: #555555;
  }
  .bg-4 {
    background-color: #2f2f2f; /* Black Gray */
    color: #fff;
  }
  .container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
  }
  .navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
    color: #1abc9c !important;
  }
  </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                      
      </button>
      <a class="navbar-brand" href="dashboard.php">Home</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="contact.php">Kontak</a></li>
      </ul>
    </div>
  </div>
</nav>
<center>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['nama'])){
        // removes backslashes
 $nama = stripslashes($_REQUEST['nama']);
        //escapes special characters in a string
 $nama = mysqli_real_escape_string($con,$nama);
 $kelas = stripslashes($_REQUEST['kelas']);
 $kelas = mysqli_real_escape_string($con,$kelas);
 $alasan = stripslashes($_REQUEST['alasan']);
 $alasan = mysqli_real_escape_string($con,$alasan); 
 $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `surat` (nama, kelas, alasan, trn_date)
VALUES ('$nama','$kelas', '$alasan', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h2>Buat Surat Berhasil!</h2>
</div>";
        }
    }else{
?>
<div class="form">
<h1>Buat Surat Izin</h1>
<form name="registration" action="" method="post">
<input type="text" name="nama" placeholder="Nama" required />
<input type="text" name="kelas" placeholder="Kelas" required />
<input type="text" name="alasan" placeholder="Alasan" required />
<input type="submit" name="submit" class="btn btn-primary" value="Buat" />
</form>
</div>
<?php } ?>
<img src="img/1.gif" class="img-rounded" height="300px"></center>
<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>Aplikasi Web dibuat oleh <a href="http://muhamadbagus.ga/">Muhamad Bagus Maulana</a></p>
</footer>
</body>
</html>