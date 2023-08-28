<?php
include 'koneksi.php';
//simpan data ke variable
$id_berita          = $_POST['id_berita'];
$judul_berita       = $_POST['judul_berita'];
$deskripsi_berita   = $_POST['deskripsi_berita'];
$img                = $_POST['img'];

//query sql untuk insert data ke db
$query = "UPDATE berita_acara SET judul_berita='$judul_berita',deskripsi_berita='$deskripsi_berita',img='$img' WHERE id_berita='$id_berita'";
mysqli_query($koneksi, $query);
//pindah ke halaman administrator.php
header("location:administrator.php");
?>