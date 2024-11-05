<title>DATA USER</title>

<?php 
include '../header.php';
include '../koneksi.php';
?>

<div class="container mt-5">
    <h2 class="text-center mb-4">Daftar User</h2>
    <div class="mb-3">
        <a href="add.php" class="w-100">
            <button class="btn btn-primary w-100">Tambah User</button>
        </a>
    </div>
    <table class="table table-hover table-bordered">
        <thead class="table-info">
            <tr>
                <th scope="col">ID User</th>
                <th scope="col">Nama User</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Is_admin</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $user = mysqli_query($koneksi,"select * from users");
            $nomor = 1;
            while($row=mysqli_fetch_array($user)){
            ?>
            <tr>
                <td><?php echo $nomor;?></td>
                <td><?php echo $row['nama_users']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['password']?></td>
                <td><?php echo $row['is_admin']?></td>
                <td>    
                    <div class="d-flex gap-2">
                    <a href="edit.php?id_users=<?php echo $row['id_users']?>" class="btn btn-primary btn-sm">
                            <button class="btn btn-primary btn-sm">Edit</button>
                        </a>
                        <a href="delete.php?id_users=<?php echo $row['id_users'] ?>" 
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
            
