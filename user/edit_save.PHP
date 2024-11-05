<?php
include '../koneksi.php';
$id      = $_POST['user_id'];
$nama_user = $_POST['nama_user'];
$email = $_POST['email'];
$password = $_POST['password'];
$isadmin = $_POST['is_admin'];
$sql = mysqli_query($koneksi, "update users set nama_users='$nama_user',email='$email',password='$password',is_admin='$isadmin' where id_users='$id'");
header("location:index.php");
?>