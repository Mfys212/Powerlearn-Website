<?php
ob_start();
include "koneksi.php";
include "funfiction.php";
    
if(isset($_POST['type']) && $_POST['type'] == 'view'){
    $query = mysqli_query($mysqli, "SELECT * FROM mapel");
    $no = 1;
    while ($row = mysqli_fetch_array($query)) {
        echo "<tr>
                <td>".$no."</td>
                <td>".$row['nama_mapel']."</td>
                <td>
                    <a href='#' onclick='form_edit(".$row['id_mapel'].")' id='tzy' data-toggle='modal' data-target='#edit' class='btn btn-success btn-small'><i class='fas fa-edit'></i></a>
                    <a href='#' onclick='form_delete(".$row['id_mapel'].")' class='btn btn-danger btn-small'><i class='fas fa-trash'></i></a>
                </td>
            </tr>";
        $no++;
    }
}

if(isset($_GET['type']) && $_GET['type'] == 'tambah'){
    $mapel = $_POST['mapel'];
    $sql = mysqli_query($mysqli, "INSERT INTO mapel (nama_mapel) VALUES ('$mapel')");
}

if(isset($_POST['mapel_id'])){
    $sql = mysqli_query($mysqli, "SELECT * FROM mapel WHERE id_mapel = '$_POST[mapel_id]'");
    $data = mysqli_fetch_array($sql);
    echo form("Mapel", "text", "mapel", "mapel", "Mapel", $data['nama_mapel'], "form-control", '', "");
    echo hidden_form("id", "id", $data['id_mapel']);
}

if(isset($_GET['type']) && $_GET['type'] == 'edit'){
    $id = $_POST['id'];
    $mapel = $_POST['mapel'];
    $sql = mysqli_query($mysqli, "UPDATE mapel SET nama_mapel = '$mapel' WHERE id_mapel = '$id'");
}

if(isset($_GET['hapus'])){
    $sql = mysqli_query($mysqli, "DELETE FROM mapel WHERE id_mapel = '$_GET[hapus]'");
}

?>
                  
            