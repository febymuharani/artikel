<?php
include 'koneksi.php';
session_start();
// cara membaca inputan dari form
$nama_user      = $_POST['nama_user'];
$password   = $_POST['password'];

// melakukan pengecekan ke tabel user
$sql = "select * from users where (nama_users='$nama_user' OR email='$nama_user')  and password='$password'";
// melakuakn konversi hasil menjadi array
$user = mysqli_fetch_array(mysqli_query($koneksi,$sql));

// cek apakah memiliki hasil dari query di atas
if($user){
    // echo "berhasil login";
    $_SESSION['nama'] = $user['nama_users'];

    if ($user['is_admin'])
    header("location:artikel/index.php");
}else{
    // echo "gagal login";
    header("location:formlogin.php");
}

exit;


// echo $email;
// echo "<br>";
// echo $password;

// cek apakah login sudah benar
// if($email=='email@gmail.com' && $password=='password'){
//     echo "Berhasil Login";
// }else{
//     echo "Gagal Login";
// }

?>