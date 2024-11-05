<?php
include '../koneksi.php';
$id = $_GET['id_artikel'];
$hapus = mysqli_query($koneksi,"delete from artikel where id_artikel='$id'");
header("location:index.php");
?>