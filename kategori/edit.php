<title>EDIT KATEGORI</title>

<?php 
include '../header.php';
include '../koneksi.php';

$id = $_GET['id_kategori'];
$sql = mysqli_query($koneksi,"select * from kategori where id_kategori='$id'");
$kategori = mysqli_fetch_array($sql);
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
    <h2 class="text-center mb-4">Form Edit kategori</h2>
    <form action="edit_save.php"  method="POST">
    <div class="mb-3">
            <label for="idkategori" class="form-label">kategori ID</label>
            <input name="id" value="<?php echo $kategori['id_kategori']?>" type="text" class="form-control" readonly>
        </div>
        <div class="mb-3">
            <label for="namakategori" class="form-label">Nama kategori</label>
            <input name="nama_kategori" value="<?php echo $kategori['nama_kategori']?>" type="text" class="form-control" id="namakategori" placeholder="Masukkan Nama kategori" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan kategori</button>
        <a href="index.php" class="btn btn-secondary ms-2">Kembali</a>
    </form>
</div>


