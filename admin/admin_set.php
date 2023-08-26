<?php
ob_start();
include "koneksi.php";
include "funfiction.php";
    
if(isset($_POST['type']) && $_POST['type'] == 'view'){
    $query = mysqli_query($mysqli, "SELECT * FROM admin");
    $no = 1;
    while ($row = mysqli_fetch_array($query)) {
        echo "<tr>
                <td>".$no."</td>";
                if($row['foto_admin'] == ''){
                    echo "<td><i>Tidak Ada Foto</i></td>";
                }else{
                    echo "<td><img src = 'foto_admin/".$row['foto_admin']."' width='70px' height='70px'/></td>";
                }
        echo    "<td>".$row['nama_lengkap']."</td>
                <td>".$row['username']."</td>
                <td>".$row['email_admin']."</td>
                <td>".$row['level']."</td>
                <td>
                    <a href='#' onclick='form_edit(".$row['id_admin'].")' id='tzy' data-toggle='modal' data-target='#edit' class='btn btn-success btn-small'><i class='fas fa-edit'></i></a>
                    <a href='#' onclick='form_delete(".$row['id_admin'].")' class='btn btn-danger btn-small'><i class='fas fa-trash'></i></a>
                </td>
            </tr>";
        $no++;
    }
}

if(isset($_GET['type']) && $_GET['type'] == 'tambah'){
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $level = $_POST['level'];
    $nama_file = $_FILES['foto']['name'];
    $ukuran_file = $_FILES['foto']['size'];
    $tipe_file = $_FILES['foto']['type'];
    $tmp_file = $_FILES['foto']['tmp_name'];
    $path = "foto_admin/".$nama_file;
    move_uploaded_file($tmp_file, $path);
    $sql = mysqli_query($mysqli, "INSERT INTO admin (nama_lengkap, username, email_admin, password_admin, foto_admin, level) VALUES ('$nama', '$username', '$email', '$password', '$nama_file', '$level')");
}

if(isset($_POST['admin_id'])){
    $sql = mysqli_query($mysqli, "SELECT * FROM admin WHERE id_admin = '$_POST[admin_id]'");
    $data = mysqli_fetch_array($sql);
    if($data['level'] == 'Admin'){
        $dt = array($data['level'], "Pimpinan");
        $vl = array($data['level'], "Pimpinan");
    }elseif($data['level'] == 'Pimpinan'){
        $dt = array($data['level'], "Admin");
        $vl = array($data['level'], "Admin");
    }
    echo form("Nama Lengkap", "text", "nama", "nama", "Nama Lengkap", $data['nama_lengkap'], "form-control", '', "");
    echo form("Username", "text", "username", "username", "Username", $data['username'], "form-control", '', "");
    echo form("Email", "text", "email", "email", "Email", $data['email_admin'], "form-control", '', "");
    echo form("Password", "password", "password", "password", "Password", '', 'form-control', '', "");
    echo form_file_edit("Upload Foto", "foto_admin/", $data['foto_admin'], "70px", "70px", "file", 'foto', 'foto', "Foto", "image/*");
    echo form_select("Status", "form-control", "level", "level", $dt, $vl);
    echo hidden_form("id", "id", $data['id_admin']);
}

if(isset($_GET['type']) && $_GET['type'] == 'edit'){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $level = $_POST['level'];
    $nama_file     = $_FILES['foto']['name'];
    $ukuran_file   = $_FILES['foto']['size'];
    $tipe_file     = $_FILES['foto']['type'];
    $tmp_file      = $_FILES['foto']['tmp_name'];
    $path          = "foto_admin/".$nama_file;
        
    if($password == ''){
        if($nama_file == ''){
            $sql = mysqli_query($mysqli, "UPDATE admin SET nama_lengkap = '$nama', username = '$username', email_admin = '$email', level = '$level' WHERE id_admin = '$id'");
        }else{
            move_uploaded_file($tmp_file, $path);
            $sql = mysqli_query($mysqli, "UPDATE admin SET nama_lengkap = '$nama', username = '$username', email_admin = '$email', foto_admin = '$nama_file', level = '$level' WHERE id_admin = '$id'");
        }
    }else{
        if($nama_file == ''){
            $sql = mysqli_query($mysqli, "UPDATE admin SET nama_lengkap = '$nama', username = '$username', email_admin = '$email', password_admin = '$password', level = '$level' WHERE id_admin = '$id'");
        }else{
            move_uploaded_file($tmp_file, $path);
            $sql = mysqli_query($mysqli, "UPDATE admin SET nama_lengkap = '$nama', username = '$username', email_admin = '$email', password_admin = '$password', foto_admin = '$nama_file', level = '$level' WHERE id_admin = '$id'");
        }
    }
}

if(isset($_GET['hapus'])){
    $sql = mysqli_query($mysqli, "DELETE FROM admin WHERE id_admin = '$_GET[hapus]'");
}

?>
                  
            