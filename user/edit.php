<title>EDIT USER</title>

<?php
include '../header.php';
include '../koneksi.php';
$id = $_GET['id_users'];
$sql = mysqli_query($koneksi,"select * from users where id_users='$id'");
$users = mysqli_fetch_array($sql);
?>


<div class="container mt-5">
    <h2 class="text-center mb-4">Form Tambah Users</h2>
    <form action="edit_save.php" method="POST">
        <div class="mb-3">
            <label for="IdKategori" class="form-label">ID Kategori</label>
            <input type="text" name="user_id" value="<?php echo $users['id_users']?>" class="form-control" id="IdKategori" placeholder="Masukkan ID Kategori" required>
        </div>
        <div class="mb-3">
            <label for="namaKategori" class="form-label">Nama Users</label>
            <input type="text" name="nama_user" value="<?php echo $users['nama_users']?>" class="form-control" id="namaKategori" placeholder="Masukkan Nama Users" required>
        </div>
        <div class="mb-3">
            <label for="namaKategori" class="form-label">Email</label>
            <input type="email" name="email" value="<?php echo $users['email']?>" class="form-control" id="namaKategori" placeholder="Masukkan Email" required>
        </div>
        <div class="mb-3">
            <label for="namaKategori" class="form-label">Password</label>
            <input type="password" name="password" value="<?php echo $users['password']?>" class="form-control" id="namaKategori" placeholder="Masukkan Password" required>
        </div>
        <div class="mb-3">
            <label for="namaKategori" class="form-label">Is_admin</label>
            <input type="number" name="is_admin" value="<?php echo $users['is_admin']?>" class="form-control" id="namaKategori" placeholder="Masukkan Is_admin" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Users</button>
        <a href="index.php" class="btn btn-secondary ms-2">Kembali</a>
    </form>
</div>



