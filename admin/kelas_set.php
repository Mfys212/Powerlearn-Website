<?php
ob_start();
include "koneksi.php";
include "funfiction.php";
    
if(isset($_POST['type']) && $_POST['type'] == 'view'){
    $query = mysqli_query($mysqli, "SELECT * FROM kelas");
    $no = 1;
    while ($row = mysqli_fetch_array($query)) {
        echo "<tr>
                <td>".$no."</td>
                <td>".$row['kelas']."</td>
                <td>
                    <a href='#' onclick='form_edit(".$row['id_kelas'].")' id='tzy' data-toggle='modal' data-target='#edit' class='btn btn-success btn-small'><i class='fas fa-edit'></i></a>
                    <a href='#' onclick='form_delete(".$row['id_kelas'].")' class='btn btn-danger btn-small'><i class='fas fa-trash'></i></a>
                </td>
            </tr>";
        $no++;
    }
}

if(isset($_GET['type']) && $_GET['type'] == 'tambah'){
    $kelas = $_POST['kelas'];
    $sql = mysqli_query($mysqli, "INSERT INTO kelas (kelas) VALUES ('$kelas')");
}

if(isset($_POST['kelas_id'])){
    $sql = mysqli_query($mysqli, "SELECT * FROM kelas WHERE id_kelas = '$_POST[kelas_id]'");
    $data = mysqli_fetch_array($sql);
    echo form("Kelas", "text", "kelas", "kelas", "Kelas", $data['kelas'], "form-control", '', "");
    echo hidden_form("id", "id", $data['id_kelas']);
}

if(isset($_GET['type']) && $_GET['type'] == 'edit'){
    $id = $_POST['id'];
    $kelas = $_POST['kelas'];
    $sql = mysqli_query($mysqli, "UPDATE kelas SET kelas = '$kelas' WHERE id_kelas = '$id'");
}

if(isset($_GET['hapus'])){
    $sql = mysqli_query($mysqli, "DELETE FROM kelas WHERE id_kelas = '$_GET[hapus]'");
}

?>
                  
            