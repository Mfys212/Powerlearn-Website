<?php
session_start();
include "admin/koneksi.php";

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = mysqli_query($mysqli, "SELECT * FROM siswa WHERE email = '$email' AND password = '$password'");
    $row = mysqli_num_rows($sql);
    $data = mysqli_fetch_array($sql);

    if($row > 0){
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
        header("location:siswa/siswa.php");
    }else{
        ?>
        <script>
            alert("Gagal Login!");
            window.location.href = "login.php";
        </script>
        <?php
    }

?>