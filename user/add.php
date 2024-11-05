<title>TAMBAH USER</title>

<?php
include '../header.php';
include '../koneksi.php';
?>


<div class="container mt-5">
    <h2 class="text-center mb-4">Form Tambah Users</h2>
    <form action="add_save.php" method="POST">
        <!-- <div class="mb-3">
            <label for="IdKategori" class="form-label">ID Kategori</label>
            <input type="text" name="id_kategori" class="form-control" id="IdKategori" placeholder="Masukkan ID Kategori" required>
        </div> -->
        <div class="mb-3">
            <label for="namaKategori" class="form-label">Nama Users</label>
            <input type="text" name="nama_user" class="form-control" id="namaKategori" placeholder="Masukkan Nama Users" required>
        </div>
        <div class="mb-3">
            <label for="namaKategori" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="namaKategori" placeholder="Masukkan Email" required>
        </div>
        <div class="mb-3">
            <label for="namaKategori" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="namaKategori" placeholder="Masukkan Password" required>
        </div>
        <div class="mb-3">
            <label for="namaKategori" class="form-label">Is_admin</label>
            <input type="number" name="is_admin" class="form-control" id="namaKategori" placeholder="Masukkan Is_admin" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Users</button>
        <a href="index.php" class="btn btn-secondary ms-2">Kembali</a>
    </form>
</div>



