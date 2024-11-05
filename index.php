<?php
include 'navbar.php';
include 'koneksi.php';

// Tangkap parameter kategori jika ada
$kategori_id = isset($_GET['kategori']) ? $_GET['kategori'] : null;

// Query artikel berdasarkan kategori jika dipilih, atau semua artikel jika tidak ada kategori yang dipilih
if ($kategori_id) {
    $query = "SELECT a.*, k.nama_kategori, u.nama_users
              FROM artikel AS a
              JOIN kategori AS k ON a.kategori_id = k.id_kategori
              JOIN users AS u ON a.user_id = u.id_users
              WHERE a.kategori_id = '$kategori_id'";
} else {
    $query = "SELECT a.*, k.nama_kategori, u.nama_users
              FROM artikel AS a
              JOIN kategori AS k ON a.kategori_id = k.id_kategori
              JOIN users AS u ON a.user_id = u.id_users";
}

$artikel = mysqli_query($koneksi, $query);
?>


<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <?php while ($row = mysqli_fetch_array($artikel)) { ?>
                <!-- coding untuk postingan -->
                <div class="post-preview">
                    <a href="post.php?id_artikel=<?php echo $row['id_artikel']; ?>">
                        <h2 class="post-title"><?php echo $row['judul_artikel']; ?></h2>
                        <h3 class="post-subtitle"><?php echo substr($row['isi_artikel'], 0, 200); ?></h3>
                    </a>
                    <p class="post-meta">
                        Di Posting Oleh:
                        <a href="#!"><?php echo $row['nama_users']; ?></a>,
                        <?php echo $row['tanggal_publish']; ?> |
                        Kategori: <?php echo $row['nama_kategori']; ?>
                    </p>
                </div>

                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">"><?php echo $row['judul_artikel']; ?></h5>
                        <p class="card-text"><?php echo substr($row['isi_artikel'], 0, 200); ?></p>
                        <a href="post.php" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
               
                <hr class="my-4" />
            <?php } ?>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>
