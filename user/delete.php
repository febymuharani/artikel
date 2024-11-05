<?php
include '../koneksi.php';
$user_id = $_GET['id'];
$hapus = mysqli_query($koneksi,"delete users kategori where id_users='$user_id'");
header("location:index.php");
?>