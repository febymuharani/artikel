<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>POSTINGAN</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
 
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />

        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
      
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php">ARTIKEL IT</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.php">ARTIKEL</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle px-lg-3 py-3 py-lg-4" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Kategori
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Kecerdasan Buatan</a></li>
                                <li><a class="dropdown-item" href="#">Keamanan Siber</a></li>
                                <li><a class="dropdown-item" href="#">Pengembangan Perangkat Lunak</a></li>
                                <li><a class="dropdown-item" href="#">Transformasi Digital</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="formlogin.php">LOGIN</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <header class="masthead" style="background-image: url('assets/img/background.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>SELAMAT MEMBACA</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <?php
        include 'koneksi.php';

        // Mendapatkan ID artikel dari URL
        $id_artikel = $_GET['id_artikel'];

        // Mengambil artikel berdasarkan ID yang diterima
        $artikel = mysqli_query($koneksi, "SELECT a.*, k.nama_kategori, u.nama_users
                                           FROM artikel as a 
                                           JOIN kategori as k ON a.kategori_id = k.id_kategori
                                           JOIN users as u ON a.user_id = u.id_users
                                           WHERE a.id_artikel = '$id_artikel'");

        $row = mysqli_fetch_array($artikel);
        ?>

    
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7 w-100 auto">
                        <img src="cover_artikel/<?php echo $row['cover']; ?>" alt="Gambar Sampul" class="img-fluid mb-4">
                        <h2 class="section-heading"><?php echo $row['judul_artikel']; ?></h2>
                        <p><?php echo nl2br($row['isi_artikel']); ?></p>
                        <p class="post-meta">
                            Diposting Oleh: <a href="#!"><?php echo $row['nama_users']; ?></a>,
                            <?php echo $row['tanggal_publish']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </article>

        <div class="container px-4 px-lg-5">
            <h3>Komentar</h3>
            <div id="comments">
                <?php
                // Mengambil komentar untuk artikel ini
                $comments = mysqli_query($koneksi, "SELECT * FROM comments WHERE id_artikel = '$id_artikel' ORDER BY create_at DESC");
                while ($comment = mysqli_fetch_array($comments)) {
                    echo "<div class='mb-2'>";
                    echo "<strong>" . htmlspecialchars($comment['user_name']) . "</strong>";
                    echo "<p>" . nl2br(htmlspecialchars($comment['comments'])) . "</p>";
                    echo "<small>" . date('d M Y H:i', strtotime($comment['create_at'])) . "</small>";
                    echo "</div><hr>";
                }
                ?>
            </div>

            <h4>Tambahkan Komentar</h4>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="user_name" class="form-label">Nama Anda</label>
                    <input type="text" class="form-control" id="user_name" name="user_name" required>
                </div>
                <div class="mb-3">
                    <label for="comment" class="form-label">Komentar</label>
                    <textarea class="form-control" id="comment" name="comment" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>

            <?php
            // Menangani pengiriman komentar
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $user_name = mysqli_real_escape_string($koneksi, $_POST['user_name']);
                $comment = mysqli_real_escape_string($koneksi, $_POST['comment']);

                $sql = "INSERT INTO comments (id_artikel, user_name, comments) VALUES ('$id_artikel', '$user_name', '$comment')";
                if (mysqli_query($koneksi, $sql)) {
                    echo "<div class='alert alert-success'>Komentar berhasil ditambahkan!</div>";
                    // Opsional, refresh halaman untuk menampilkan komentar yang baru
                    echo "<meta http-equiv='refresh' content='0'>";
                } else {
                    echo "<div class='alert alert-danger'>Gagal menambahkan komentar.</div>";
                }
            }
            ?>
        </div>

    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
     
        <script src="js/scripts.js"></script>
    </body>
</html>
<?php
include 'footer.php';
?>
