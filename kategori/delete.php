<?php
include '../koneksi.php';
$kategori_id = $_GET['id_kategori'];
$hapus = mysqli_query($koneksi,"delete from kategori where id_kategori='$kategori_id'");
header("location:index.php");
?>