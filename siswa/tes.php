<?php
    include "../admin/koneksi.php";
    $sql = mysqli_query($mysqli, "SELECT * FROM siswa");
    $data = mysqli_fetch_array($sql);
    echo $data['email'];
?>