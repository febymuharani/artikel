<?php
include '../koneksi.php';
$kategori_id = $_POST['id'];
$nama_kategori = $_POST['nama_kategori'];
$update = mysqli_query($koneksi,"update kategori set nama_kategori='$nama_kategori' 
where id_kategori='$kategori_id'");
header("location:index.php");
?>