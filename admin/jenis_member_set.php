<?php
ob_start();
include "koneksi.php";
include "funfiction.php";
    
if(isset($_POST['type']) && $_POST['type'] == 'view'){
    $query = mysqli_query($mysqli, "SELECT * FROM jenis_member");
    $no = 1;
    while ($row = mysqli_fetch_array($query)) {
        echo "<tr>
                <td>".$no."</td>
                <td>".$row['jenis_member']."</td>
                <td>
                    <a href='#' onclick='form_edit(".$row['id_jenis_member'].")' id='tzy' data-toggle='modal' data-target='#edit' class='btn btn-success btn-small'><i class='fas fa-edit'></i></a>
                    <a href='#' onclick='form_delete(".$row['id_jenis_member'].")' class='btn btn-danger btn-small'><i class='fas fa-trash'></i></a>
                </td>
            </tr>";
        $no++;
    }
}

if(isset($_GET['type']) && $_GET['type'] == 'tambah'){
    $jenis_member = $_POST['jenis_member'];
    $sql = mysqli_query($mysqli, "INSERT INTO jenis_member (jenis_member) VALUES ('$jenis_member')");
}

if(isset($_POST['jenis_member_id'])){
    $sql = mysqli_query($mysqli, "SELECT * FROM jenis_member WHERE id_jenis_member = '$_POST[jenis_member_id]'");
    $data = mysqli_fetch_array($sql);
    echo form("Jenis Member", "text", "jenis_member", "jenis_member", "Jenis Member", $data['jenis_member'], "form-control", '', "");
    echo hidden_form("id", "id", $data['id_jenis_member']);
}

if(isset($_GET['type']) && $_GET['type'] == 'edit'){
    $id = $_POST['id'];
    $jenis_member = $_POST['jenis_member'];
    $sql = mysqli_query($mysqli, "UPDATE jenis_member SET jenis_member = '$jenis_member' WHERE id_jenis_member = '$id'");
}

if(isset($_GET['hapus'])){
    $query = mysqli_query($mysqli, "DELETE FROM member WHERE id_jenis_member = '$_GET[hapus]'");
    $sql = mysqli_query($mysqli, "DELETE FROM jenis_member WHERE id_jenis_member = '$_GET[hapus]'");
}

?>
                  
            