<?php
session_start();
include "koneksi.php";
$sql = mysqli_query($mysqli, "SELECT * FROM guru WHERE id_guru = '$_SESSION[id_guru]'");
$array = mysqli_fetch_array($sql);

session_destroy();
session_start();

$_SESSION['id_guru'] = $array['id_guru'];
$_SESSION['nama_guru'] = $array['nama_guru'];
$_SESSION['id_admin'] = $array['id_admin'];
$_SESSION['alamat'] = $array['alamat'];
$_SESSION['email'] = $array['email'];
$_SESSION['no_hp'] = $array['no_hp'];
$_SESSION['foto'] = $array['foto'];
$_SESSION['id_mapel'] = $array['id_mapel'];
$_SESSION['gelar'] = $array['pendidikan_terakhir'];
$_SESSION['status'] = 'login';
header("location:pengaturan.php");