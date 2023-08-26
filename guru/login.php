<?php
    session_start();
    ob_start();
    include "koneksi.php";
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = mysqli_query($mysqli, "SELECT * FROM guru WHERE email = '$email' AND password = '$password'");
    $array = mysqli_fetch_array($sql);
    $row = mysqli_num_rows($sql);

    if($row > 0){
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
        header("location:guru.php");
    }else{
        ?>
        <script>
            alert("Email/Password Salah!");
            window.location.href = "../login.php?login=guru";
        </script>
        <?php
    }

?>