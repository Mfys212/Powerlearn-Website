<?php
session_start();
ob_start();
include "koneksi.php";
include "funfiction.php";
    
if(isset($_POST['type']) && $_POST['type'] == 'view'){
    $query = mysqli_query($mysqli, "SELECT * FROM guru");
    $no = 1;
    while ($row = mysqli_fetch_array($query)) {
        $admin = mysqli_query($mysqli, "SELECT * FROM admin WHERE id_admin = '$row[id_admin]'");
        $ad = mysqli_fetch_array($admin);
        $cek = mysqli_num_rows($admin);
        $mapeld = mysqli_query($mysqli, "SELECT * FROM mapel WHERE id_mapel = '$row[id_mapel]'");
        $am = mysqli_fetch_array($mapeld);
        $chek = mysqli_num_rows($mapeld);
        echo "<tr>
                <td>".$no."</td>";
                if($row['foto'] == ''){
                    echo "<td><i>Tidak Ada Foto</i></td>";
                }else{
                    echo "<td><img src = 'foto_guru/".$row['foto']."' width='70px' height='70px'/></td>";
                }
        echo   "<td>".$row['nama_guru']."</td>
                <td>".$row['email']."</td>
                <td>".$row['no_hp']."</td>";
                if($chek < 1){
                    echo "<td>Error!</td>";
                }else{
                    echo "<td>".$am['nama_mapel']."</td>";
                }
        echo   "<td>".$row['password']."</td>
                <td>".$row['alamat']."</td>     
                <td>".$row['pendidikan_terakhir']."</td>";
                if($cek < 1){
                    echo "<td>Error!</td>";
                }else{
                    echo "<td>".$ad['nama_lengkap']."</td>";
                }
        echo   "<td>
                    <a href='#' onclick='form_edit(".$row['id_guru'].")' id='tzy' data-toggle='modal' data-target='#edit' class='btn btn-success btn-small'><i class='fas fa-edit'></i></a>
                    <a href='#' onclick='form_delete(".$row['id_guru'].")' class='btn btn-danger btn-small'><i class='fas fa-trash'></i></a>
                </td>
            </tr>";
        $no++;
    }
}

if(isset($_GET['type']) && $_GET['type'] == 'tambah'){
    $nama = $_POST['nama'];
    $admin = $_SESSION['id_admin'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];         
    $password = $_POST['password'];
    $mapel = $_POST['mapel'];
    $gelar = $_POST['gelar'];
    $nama_file     = $_FILES['foto']['name'];
    $ukuran_file   = $_FILES['foto']['size'];
    $tipe_file     = $_FILES['foto']['type'];
    $tmp_file      = $_FILES['foto']['tmp_name'];
    $path          = "foto_guru/".$nama_file;
    move_uploaded_file($tmp_file, $path);
    $sql = mysqli_query($mysqli, "INSERT INTO guru (nama_guru, id_admin, alamat, email, no_hp, foto, password, id_mapel, pendidikan_terakhir) VALUES ('$nama', '$admin', '$alamat', '$email', '$no_hp', '$nama_file', '$password', '$mapel', '$gelar')");
}

if(isset($_POST['guru_id'])){
    $sql = mysqli_query($mysqli, "SELECT * FROM guru a INNER JOIN mapel b ON a.id_mapel = b.id_mapel WHERE id_guru = '$_POST[guru_id]' ");
    $data = mysqli_fetch_array($sql);
    $select = mysqli_query($mysqli, "SELECT * FROM mapel");
        $no = 1;
        $dt[0] = $data['nama_mapel'];
        $vl[0] = $data['id_mapel'];
        while($r = mysqli_fetch_array($select)){
            if($data['id_mapel'] == $r['id_mapel']){
                echo "";
            }
          $dt[$no] = $r['nama_mapel'];
          $vl[$no] = $r['id_mapel'];
          $no++;
        }
    echo form("Nama Lengkap", "text", "nama", "nama", "Nama Lengkap", $data['nama_guru'], "form-control", "", "required");
    echo form("Email", "email", "email", "email", "Email", $data['email'], "form-control", "", "required");
    echo form("Nomor Telepon", "text", "no_hp", "no_hp", "Nomor Telepon", $data['no_hp'], "form-control", "", "required");
    echo form("Password", "password", "password", "password", "Password", "", "form-control", "", "required");
    echo form("Alamat", "text", "alamat", "alamat", "Alamat", $data['alamat'], "form-control", "", "required");
    echo form_file_edit("Upload Foto", "foto_guru/", $data['foto'], "70px", "70px", "file", 'foto', 'foto', "Foto", "image/*");
    echo form_select("Mapel", "form-control", "mapel", "mapel", $dt, $vl);
    echo form("Gelar", "text", "gelar", "gelar", "Gelar", $data['pendidikan_terakhir'], "form-control", "", "required");
    echo hidden_form("id", "id", $data['id_guru']);
}

if(isset($_GET['type']) && $_GET['type'] == 'edit'){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];          
    $password = $_POST['password'];
    $mapel = $_POST['mapel'];
    $gelar = $_POST['gelar'];
    $nama_file     = $_FILES['foto']['name'];
    $ukuran_file   = $_FILES['foto']['size'];
    $tipe_file     = $_FILES['foto']['type'];
    $tmp_file      = $_FILES['foto']['tmp_name'];
    $path          = "foto_guru/".$nama_file;                    

    if($password == ''){
        if($nama_file == ''){
            $sql = mysqli_query($mysqli, "UPDATE guru SET nama_guru = '$nama', alamat = '$alamat', email = '$email', no_hp = '$no_hp', id_mapel = '$mapel', pendidikan_terakhir = '$gelar' WHERE id_guru = '$id'");
        }else{
            move_uploaded_file($tmp_file, $path);
            $sql = mysqli_query($mysqli, "UPDATE guru SET nama_guru = '$nama', alamat = '$alamat', email = '$email', no_hp = '$no_hp', foto = '$nama_file', id_mapel = '$mapel', pendidikan_terakhir = '$gelar' WHERE id_guru = '$id'");
        }
    }else{
        if($nama_file == ''){
          $sql = mysqli_query($mysqli, "UPDATE guru SET nama_guru = '$nama', alamat = '$alamat', email = '$email', no_hp = '$no_hp', password = '$password', id_mapel = '$mapel', pendidikan_terakhir = '$gelar' WHERE id_guru = '$id'");
        }else{
          move_uploaded_file($tmp_file, $path);
          $sql = mysqli_query($mysqli, "UPDATE guru SET nama_guru = '$nama', alamat = '$alamat', email = '$email', no_hp = '$no_hp', foto = '$nama_file', password = '$password', id_mapel = '$mapel', pendidikan_terakhir = '$gelar' WHERE id_guru = '$id'");
        }
    }
}

if(isset($_GET['hapus'])){
    $sql = mysqli_query($mysqli, "DELETE FROM guru WHERE id_guru = '$_GET[hapus]'");
}

?>
                  
            