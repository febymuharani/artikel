<?php
include '../koneksi.php';
$idartikel           = $_POST['id_artikel'];
$judul_artikel      = $_POST['judul_artikel'];
$tanggal_terbit   = $_POST['tanggal_terbit'];
$id_kategori    = $_POST['kategori_artikel'];
$isiartikel     = $_POST['isi_artikel'];
$user_id           = $_POST['user_id'];
//$cover            = $_POST['cover'];
$status_aktif       = $_POST['status_aktif'];

$target_dir = "../cover_artikel/";
$nameFile = $_FILES["cover"]["name"];
$target_file = $target_dir . basename($nameFile);
$namaSementara = $_FILES['cover']['tmp_name'];
$terupload = move_uploaded_file($namaSementara, $target_file);


$sql = mysqli_query($koneksi, "update artikel set id_artikel='$idartikel',judul_artikel='$judul_artikel',tanggal_publish='$tanggal_terbit',kategori_id='$id_kategori',isi_artikel='$isiartikel',user_id='$user_id',status_aktif='$status_aktif',cover='$nameFile' where id_artikel='$idartikel'");
header("location:index.php");

?>