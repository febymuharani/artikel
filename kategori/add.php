<title>TAMBAH KATEGORI</title>

<?php
include '../header.php';
include '../koneksi.php';
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

<div class="container mt-5">
    <h2 class="text-center mb-4">Form Tambah Kategori</h2>
    <form action="add_save.php" method="POST">
        <!-- <div class="mb-3">
            <label for="IdKategori" class="form-label">ID Kategori</label>
            <input type="text" name="id_kategori" class="form-control" id="IdKategori" placeholder="Masukkan ID Kategori" required>
        </div> -->
        <div class="mb-3">
            <label for="namaKategori" class="form-label">Nama Kategori</label>
            <input type="text" name="nama_kategori" class="form-control" id="namaKategori" placeholder="Masukkan Nama Kategori" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Kategori</button>
        <a href="kategori.php" class="btn btn-secondary ms-2">Kembali</a>
    </form>
</div>



