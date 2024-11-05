<title>DATA KATEGORI</title>

<?php 
include '../header.php';
include '../koneksi.php';
?>
<div class="container mt-5">
    <h2 class="text-center mb-4">Daftar Kategori Artikel</h2>
    <div class="mb-3">
        <a href="add.php" class="w-100">
            <button class="btn btn-primary w-100">Tambah Kategori</button>
        </a>
    </div>
    <table class="table table-hover table-bordered">
        <thead class="table-info">
            <tr>
                <th scope="col">ID Kategori</th>
                <th scope="col">Nama Kategori</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $kategori = mysqli_query($koneksi,"select * from kategori");
            $nomor = 1;
            while($row=mysqli_fetch_array($kategori)){
            ?>
            <tr>
                <td><?php echo $nomor;?></td>
                <td><?php echo $row['nama_kategori']?></td>
                <td>
                    <div class="d-flex gap-2">
                    <a href="edit.php?id_kategori=<?php echo $row['id_kategori']?>" class="btn btn-primary btn-sm">
                            <button class="btn btn-primary btn-sm">Edit</button>
                        </a>
                        <a href="delete.php?id_kategori=<?php echo $row['id_kategori'] ?>" 
   class="btn btn-danger" 
   onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                    </div>
                </td>
            </tr>
            <?php 
            $nomor++;
            }
            ?>
        </tbody>
    </table>
</div>
            
