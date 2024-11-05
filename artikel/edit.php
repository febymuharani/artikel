<title>EDIT ARTIKEL</title>

<?php 
include '../header.php';
include '../koneksi.php';

$id = $_GET['id_artikel'];
$sql = mysqli_query($koneksi, "select * from artikel where id_artikel='$id'");
$artikel = mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA ARTIKEL ADMIN</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    
    <script src="../js/bootstrap.bundle.min.js"></script>   
</head>
<body>
    
</body>
</html>

<?php 
include '../koneksi.php';
?>


<div class="container mt-5">
    <h2 class="text-center mb-4">Form Tambah Artikel</h2>
    <form action="edit_save.php" enctype="multipart/form-data" method="POST">
        <div class="mb-3">
            <label for="isbn" class="form-label">Id Artikel</label>
            <input type="text" name="id_artikel" value="<?php echo $artikel['id_artikel']?>" class="form-control" id="isbn" placeholder="Masukkan ID Arikel" required>
        </div>
        <div class="mb-3">
            <label for="judul" class="form-label">Judul Artikel</label>
            <input type="text" name="judul_artikel" value="<?php echo $artikel['judul_artikel']?>" class="form-control" id="judul" placeholder="Masukkan Judul Artikel" required>
        </div>
        <div class="mb-3">
            <label for="judul" class="form-label">Tanggal Terbit</label>
            <input type="date" name="tanggal_terbit" value="<?php echo $artikel['tanggal_publish']?>" class="form-control" id="judul" placeholder="Masukkan Tanggal Terbit" required>
        </div>
        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori Artikel</label>
            <select name="kategori_artikel" class="form-control">
            <?php
            $kategori = mysqli_query($koneksi,"select * from kategori");
            while($k=mysqli_fetch_array($kategori)){
                echo "<option value='".$k['id_kategori']."'>".$k['nama_kategori']."</option>";
            }
            ?>
            </select>
            <!-- <input type="text" name="nama_kategori" class="form-control" id="kategori" placeholder="Masukkan Kategori" required> -->
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Isi Artikel</label>
            <input type="text" name="isi_artikel" value="<?php echo $artikel['isi_artikel']?>" class="form-control" id="harga" placeholder="Masukkan Isi Artikel" required>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Cover</label>
            <input type="file" name="cover" value="<?php echo $artikel['cover']?>" class="form-control" id="harga" placeholder="Masukkan Cover" required>
        </div>
        <div class="mb-3">
            <label for="user" class="form-label">Users ID</label>
            <select name="user_id" class="form-control">
            <?php
            $user = mysqli_query($koneksi,"select * from users");
            while($u=mysqli_fetch_array($user)){
                echo "<option value='".$u['id_users']."'>".$u['nama_users']."</option>";
            }
            ?>
            </select>
            <!-- <input type="text" name="nama_kategori" class="form-control" id="kategori" placeholder="Masukkan Kategori" required> -->
        </div>
        <div class="mb-3">
            <label for="user" class="form-label">Status Aktif</label>
            <select name="status_aktif" class="form-control">
            <?php
            $status = mysqli_query($koneksi,"select * from artikel");
            while($s=mysqli_fetch_array($status)){
                echo "<option value='".$s['status_aktif']."'>".$s['status_aktif']."</option>";
            }
            ?>
            </select>
            <!-- <input type="text" name="nama_kategori" class="form-control" id="kategori" placeholder="Masukkan Kategori" required> -->
        </div>
        <button type="submit" class="btn btn-primary">Simpan Artikel</button>
        <a href="index.php" class="btn btn-secondary ms-2">Kembali</a>
    </form>
</div>


