<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>
	<h2>Halaman Admin</h2>
	
	<br/>
 
	<!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>
 
	<center>
		<h1>Selamat Datang, 
		<?php echo $_SESSION['username']; ?>! Anda Telah Login.</h1>
	</center>
 
	<br/>
	<br/>
 
	<a href="menuju_halaman_admin.php">HALAMAN ADMIN</a>
	<br>
	<br>
	<a href="logout.php">LOGOUT</a>
 
 
</body>
</html>