<!DOCTYPE html>
<html>
<head>
	<title>CRUD PUISI</title>
</head>
<body>
 
	<h2>CRUD DATA PUISI</h2>
	<br/>
	<a href="edit_puisi_admin.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA PUISI</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from pembaca where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Penulis</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="penulis" value="<?php echo $d['penulis']; ?>">
					</td>
				</tr>
				<tr>
					<td>Judul</td>
					<td><input type="text" name="judul" value="<?php echo $d['judul']; ?>"></td>
				</tr>
				<tr>
					<td>Puisi</td>
					<td><textarea name="isi" rows="40" cols="150"></textarea><br><br></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>