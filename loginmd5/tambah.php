<!DOCTYPE html>
<html>
<head>
    <title>Tambah Puisi</title>
</head>
<body>
    <center><h1>Tambah Puisi</h1></center>

    <form action="tambah_aksi.php" method="POST">
        <label>Judul:</label><br>
        <input type="text" name="judul"><br><br>

        <label>Penulis:</label><br>
        <input type="text" name="penulis"><br><br>

        <label>Isi:</label><br>
        <textarea name="isi" rows="40" cols="150"></textarea><br><br>

        <input type="submit" value="Simpan">
		<br>
		<br>
		<br>
        <A href="edit_puisi_admin.php">kembali</a>
    </form>
    
</body>
</html>