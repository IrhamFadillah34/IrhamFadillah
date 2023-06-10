<!DOCTYPE html>
<html>
<head>
	<title>Daftar Puisi</title>
</head>
<body>
 
	<center><h2>Daftar Puisi</h2></center>
	<br/>
	<a href="tambah.php">+ TAMBAH PUISI</a>
	<br/>
	<br/>
    <a href="menu_admin.html"> kembali</a>
    <br/>
    <br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Penulis</th>
			<th>Judul</th>
			<th>puisi</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from pembaca");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['penulis']; ?></td>
				<td><?php echo $d['judul']; ?></td>
				<td><textarea readonly name = "isi" rows="50" cols="130"><?php echo $d['isi']; ?></textarea></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>