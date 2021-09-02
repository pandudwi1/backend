<?php
session_start();

if (!isset($_SESSION["username"])) {
	echo "Anda harus login dulu <br><a href='login.php'>Klik disini</a>";
	exit;
}

$id_user=$_SESSION["id_user"];
$username=$_SESSION["username"];
$nama=$_SESSION["nama"];
$p=$_SESSION["password"];



?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">

</head>
<body>
<div class="jumbotron text-center">
  <h1>Selamat Datang di Halaman User</h1>
  <h4>Halaman ini hanya dapat diakses setelah login</h4>
    <p>Nama : <?php echo $nama; ?></p>
    <p>Username : <?php echo $username; ?></p>
    <p>Password : <?php echo $p; ?></p>
    <a href="logout.php" class="btn" role="button">LOGOUT</a>
</div>

</body>
</html> 