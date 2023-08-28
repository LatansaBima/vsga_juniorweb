<?php
include 'koneksi.php';
//menyimpan id ke variable
$id_berita = $_GET['id_berita'];
//query sql untuk delete data
$query = "DELETE from berita_acara WHERE id_berita='$id_berita'";
mysqli_query($koneksi, $query);
//pindah ke halaman administrator.php
header("location:administrator.php");
?>