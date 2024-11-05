<?php
session_start();
if(empty($_SESSION['nama'])){
  header("location:../login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <title></title>
</head>
<body>
    <!-- Header -->
    <header class="bg-primary text-white p-3">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand text-white" href="#">ADMIN ARTIKEL</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="../artikel/index.php">DATA ARTIKEL</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="../kategori/index.php">DATA KATEGORI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="../user/index.php">DATA USERS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="../logout.php">LOGOUT</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

   
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>
