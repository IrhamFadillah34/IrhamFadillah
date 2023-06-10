<html>
    <a href="edit_puisi_admin.php">KEMBALI</a>
</html>
<br>
<br>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mengambil data dari form
    $penulis = $_POST['penulis'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];

    // Menyimpan data ke database
    include 'koneksi.php';

    $query = "INSERT INTO pembaca (penulis, judul, isi) VALUES ('$penulis','$judul','$isi')";

    if (mysqli_query($koneksi, $query)) {
        echo "Puisi berhasil disimpan.";
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($koneksi);
    }

    // Menutup koneksi database
    mysqli_close($koneksi);
}

?>