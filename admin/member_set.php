<?php
ob_start();
include "koneksi.php";
include "funfiction.php";
    
if(isset($_POST['type']) && $_POST['type'] == 'view'){
    $query = mysqli_query($mysqli, "SELECT * FROM member a INNER JOIN jenis_member b ON a.id_jenis_member = b.id_jenis_member INNER JOIN kelas c ON a.id_kelas = c.id_kelas");
    $no = 1;
    while ($row = mysqli_fetch_array($query)) {
        echo "<tr>
                <td>".$no."</td>
                <td>".$row['jenis_member']."</td>
                <td>".$row['member']."</td>
                <td>".$row['kelas']."</td>
                <td>Rp. ".number_format($row['harga'])." ,-</td>
                <td>
                    <a href='#' onclick='form_edit(".$row['id_member'].")' id='tzy' data-toggle='modal' data-target='#edit' class='btn btn-success btn-small'><i class='fas fa-edit'></i></a>
                    <a href='#' onclick='form_delete(".$row['id_member'].")' class='btn btn-danger btn-small'><i class='fas fa-trash'></i></a>
                </td>
            </tr>";
        $no++;
    }
}

if(isset($_GET['type']) && $_GET['type'] == 'tambah'){
    $jenis_member = $_POST['jenis_member'];
    $member = $_POST['member'];
    $kelas = $_POST['kelas'];
    $harga = $_POST['harga'];
    $sql = mysqli_query($mysqli, "INSERT INTO member (id_jenis_member, member, id_kelas, harga) VALUES ('$jenis_member', '$member', '$kelas', '$harga')");
}

if(isset($_POST['member_id'])){
    $sql = mysqli_query($mysqli, "SELECT * FROM member a INNER JOIN jenis_member b ON a.id_jenis_member = b.id_jenis_member INNER JOIN kelas c ON a.id_kelas = c.id_kelas WHERE id_member = '$_POST[member_id]'");
    $data = mysqli_fetch_array($sql);
    $q = mysqli_query($mysqli, "SELECT * FROM jenis_member");
    $no = 1;
    $dt[0] = $data['jenis_member'];
    $vl[0] = $data['id_jenis_member'];
    while($daa = mysqli_fetch_array($q)){
        $dt[$no] = $daa['jenis_member'];
        $vl[$no] = $daa['id_jenis_member'];
        $no++;
    }
    $l = mysqli_query($mysqli, "SELECT * FROM kelas");
    $n = 1;
    $dtt[0] = $data['kelas'];
    $vll[0] = $data['id_kelas'];
    while($d = mysqli_fetch_array($l)){
        $dtt[$n] = $d['kelas'];
        $vll[$n] = $d['id_kelas'];
        $n++;
    }
    echo form_select("Jenis Member", "form-control", "jenis_member", "jenis_member", $dt, $vl);
    echo form("Member", "text", "member", "member", "Member", $data['member'], "form-control", "", "required");
    echo form_select("Kelas", "form-control", "kelas", "kelas", $dtt, $vll);
    echo form("Harga", "text", "harga", "harga", "Masukkan Harga", $data['harga'], "form-control", "", "required");
    echo hidden_form("id", "id", $data['id_member']);
}

if(isset($_GET['type']) && $_GET['type'] == 'edit'){
    $id = $_POST['id'];
    $jenis_member = $_POST['jenis_member'];
    $member = $_POST['member'];
    $kelas = $_POST['kelas'];
    $harga = $_POST['harga'];
    $sql = mysqli_query($mysqli, "UPDATE member SET id_jenis_member = '$jenis_member', member = '$member', id_kelas = '$kelas', harga = '$harga' WHERE id_member = '$id'");
}

if(isset($_GET['hapus'])){
    $sql = mysqli_query($mysqli, "DELETE FROM member WHERE id_member = '$_GET[hapus]'");
}

?>
                  
            