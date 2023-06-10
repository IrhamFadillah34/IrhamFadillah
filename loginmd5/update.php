<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$penulis = $_POST['penulis'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];
 
// update data ke database
mysqli_query($koneksi,"update pembaca set penulis='$penulis', judul='$judul', isi='$isi' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:edit_puisi_admin.php");
 
?>