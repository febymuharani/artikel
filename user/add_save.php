<?php
include '../koneksi.php';
$nama_user = $_POST['nama_user'];
$email = $_POST['email'];
$password = $_POST['password'];
$isadmin = $_POST['is_admin'];
$sql = mysqli_query($koneksi, "insert into users(nama_users,email,password,is_admin) values ('$nama_user','$email','$password','$isadmin')");
header("location:index.php");
?>