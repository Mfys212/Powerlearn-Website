<?php
ob_start();
session_start();

include "koneksi.php";
$login = $_POST['email'];
$password = $_POST['password'];

$sql = mysqli_query ($mysqli, "SELECT * FROM admin WHERE password_admin = '$password' AND email_admin = '$login' OR username = '$login' ");
$data = mysqli_fetch_array($sql);
$row = mysqli_num_rows($sql);

if ($row > 0){
    $_SESSION['id_admin'] = $data['id_admin'];
    $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['email'] = $data['email_admin'];
    $_SESSION['foto'] = $data['foto_admin'];
    $_SESSION['level'] = $data['level'];
    $_SESSION['status'] = 'login';
    header("location:halaman_admin.php");
	
}else{
    header("location:index.php?lg=gagal");
}

?>