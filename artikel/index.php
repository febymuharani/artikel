<title>DATA ARTIKEL ADMIN</title>

<?php 
include '../header.php';
include '../koneksi.php';
?>
<div class="container mt-5">
    <h2 class="text-center mb-4">Daftar Artikel</h2>
    <div class="mb-3">
        <a href="add.php" class="w-100">
            <button class="btn btn-primary w-100">Tambah Artikel</button>
        </a>
    </div>
    <table class="table table-hover table-bordered">
        <thead class="table-info">
            <tr>
                <th scope="col">Id Artikel</th>
                <th scope="col">Judul Artikel</th>
                <th scope="col">Tanggal Terbit</th>
                <th scope="col">Kategori</th>
                <th scope="col">Isi Artikel</th>
                <th scope="col">Cover</th>
                <th scope="col">User Id</th>
                <th scope="col">Status Aktif</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $artikel = mysqli_query($koneksi,"SELECT a.*,k.nama_kategori,u.nama_users
                                            FROM artikel as a JOIN kategori as k ON a.kategori_id=k.id_kategori
                                            JOIN users as u ON a.user_id=u.id_users
                                            ");
            while($row=mysqli_fetch_array($artikel)){
            ?>
            <tr>
                <td><?php echo $row['id_artikel'] ?></td>
                <td><?php echo $row['judul_artikel'] ?></td>
                <td><?php echo $row['tanggal_publish'] ?></td>
                <td><?php echo $row['nama_kategori'] ?></td>
                <td><?php echo substr($row['isi_artikel'],0,100) ?></td>
                <td><img src="../cover_artikel/<?php echo $row['cover'] ?>" width="100"></td>
                <td><?php echo $row['nama_users'] ?></td>
                <td><?php echo $row['status_aktif'] ?></td>
                <td>
                    <div class="d-flex gap-2">
                        <a href="edit.php?id_artikel=<?php echo $row['id_artikel']?>">
                            <button class="btn btn-primary btn-sm">Edit</button>
                        </a>
                        <a href="delete.php?id_artikel=<?php echo $row['id_artikel']?>" 
                        class="btn btn-danger" 
                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                    </div>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>


