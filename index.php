<!DOCTYPE html>
<html>
<head>
	<title>Daftar Puisi</title>
</head>
<head>
	<style>
		.tengah{
			text-align: center;
			font-size:17px;
		}
    	body {
			background-image: url('image/biru.jpg');
			background-repeat: no-repeat;
			background-size: cover;
    	}
		article {
        background-color: rgba(255, 255, 255, 0.5);
        backdrop-filter: blur(5px);
        padding: 1rem;
      }
</style>
</head>
<body>
	<article>
 
	<center><font color ="magenta"><h1><B><U>DAFTAR PUISI</U></B></h1></font></center>
	<hr size=3 color="magenta">
	<br/>
	<table border="0">
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from pembaca");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td>
					<center>
						<span style="color: white; font-size: 1.5em; font-family: arial;">
							<?php echo $no++; ?>
						<br>
						<br>
							<font color ="white" size="7">
								<b><u><?php echo $d['penulis']; ?></u></b>
							</font>
						<br>
							<font color ="white" size="4">
								<?php echo $d['judul']; ?>
							</font>
						<br>
						<br>
							<textarea readonly class="tengah" name= "isi" rows="50" cols="140"><?php echo $d['isi']; ?></textarea>
						</span>
					</center>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
	</article>
</body>
</html>