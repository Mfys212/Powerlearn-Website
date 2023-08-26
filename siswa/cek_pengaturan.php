<?php
session_start();
include "../admin/koneksi.php";
$sql = mysqli_query($mysqli, "SELECT * FROM siswa WHERE id_siswa = '$_SESSION[id_siswa]'");
$data = mysqli_fetch_array($sql);

session_destroy();
session_start();

$_SESSION['id_siswa'] = $data['id_siswa'];
$_SESSION['nama_siswa'] = $data['nama_siswa'];
$_SESSION['id_admin'] = $data['id_admin'];
$_SESSION['email'] = $data['email'];
$_SESSION['no_hp'] = $data['no_hp'];
$_SESSION['alamat'] = $data['alamat'];
$_SESSION['foto'] = $data['foto'];
$_SESSION['kelas'] = $data['id_kelas'];
$_SESSION['member'] = $data['id_member'];
$_SESSION['status_member'] =  $data['status'];
$_SESSION['bukti'] = $data['bukti_pembayaran'];
$_SESSION['status'] = 'login';
header("location:pengaturan.php");