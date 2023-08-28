<?php
include 'koneksi.php';
//simpan data form ke variable
$judul = $_POST["judul_berita"];
$deskripsi = $_POST["deskripsi_berita"];
$img = $_POST["img"];

//tambah data ke db dengan query sql
$query = "INSERT INTO berita_acara (judul_berita,deskripsi_berita,img) VALUES ('$judul','$deskripsi','$img') ";
mysqli_query($koneksi, $query);

//pindah ke halaman administrator.php
header("location:administrator.php");
?>