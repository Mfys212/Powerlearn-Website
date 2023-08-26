<?php
session_start();
ob_start();
include "koneksi.php";
include "funfiction.php";
    
if(isset($_POST['type']) && $_POST['type'] == 'view'){
    $query = mysqli_query($mysqli, "SELECT * FROM siswa");
    $no = 1;
    while ($row = mysqli_fetch_array($query)) {
        $e = mysqli_query($mysqli, "SELECT * FROM kelas WHERE id_kelas = '$row[id_kelas]'");
        $r = mysqli_fetch_array($e);
        $h = mysqli_query($mysqli, "SELECT * FROM member WHERE id_member = '$row[id_member]'");
        $j = mysqli_fetch_array($h);
        $chek = mysqli_num_rows($h);
        echo "<tr>
                <td>".$no."</td>";
                if($row['foto'] == ''){
                    echo "<td><i>Tidak Ada Foto</i></td>";
                }else{
                    echo "<td><img src = 'foto_siswa/".$row['foto']."' width='70px' height='70px'/></td>";
                }
        echo   "<td>".$row['nama_siswa']."</td>
                <td>".$row['email']."</td>
                <td>".$row['no_hp']."</td>
                <td>".$r['kelas']."</td>
                <td>".$row['password']."</td>
                <td>".$row['alamat']."</td>";
                if($chek < 1){
                    echo "<td><i>Tidak Member</i></td>";
                }else{
                    echo "<td>".$j['member']."</td>";
                }
                if($row['status'] == 'Aktif'){
                    echo "<td><div class='text-success'>".$row['status']."</div></td>";
                }elseif($row['status'] == 'Mati'){
                    echo "<td><div class='text-danger'>".$row['status']."</div></td>";
                }else{
                    echo "<td><i>Tidak Member</i></td>";
                }
        echo   '<td><button class="btn-small btn-success" title="Lihat" data-toggle="modal" data-target="#myModal'.$no.'"><i class="fas fa-search"></i></button></td>';          
        echo   "<td>
                    <a href='#' onclick='form_edit(".$row['id_siswa'].")' id='tzy' data-toggle='modal' data-target='#edit' class='btn btn-success btn-small'><i class='fas fa-edit'></i></a>
                    <a href='#' onclick='form_delete(".$row['id_siswa'].")' class='btn btn-danger btn-small'><i class='fas fa-trash'></i></a>
                </td>
            </tr>";
        $no++;
    }
}

if(isset($_POST['siswa_id'])){
    $sql = mysqli_query($mysqli, "SELECT * FROM siswa a INNER JOIN kelas b ON a.id_kelas = b.id_kelas WHERE id_siswa = '$_POST[siswa_id]' ");
    $data = mysqli_fetch_array($sql);
    $select = mysqli_query($mysqli, "SELECT * FROM kelas");
    $no = 1;
    $dt[0] = $data['kelas'];
    $vl[0] = $data['id_kelas'];
    while($r = mysqli_fetch_array($select)){
        $dt[$no] = $r['kelas'];
        $vl[$no] = $r['id_kelas'];
        $no++; 
    }
    $slc = mysqli_query($mysqli, "SELECT * FROM member WHERE id_member = '$data[id_member]'");
    $rei = mysqli_fetch_array($slc);
    $dtt[0] = $rei['member'];
    $vll[0] = $rei['id_member'];
    $on = 1;
    $lqs = mysqli_query($mysqli, "SELECT * FROM member");
    while($ray = mysqli_fetch_array($lqs)){
        $dtt[$on] = $ray['member'];
        $vll[$on] = $ray['id_member'];
        $on++;
    }
    if($data['status'] == "Tidak Member"){
        $dttt = array("Tidak Member", "Aktif", "Mati");
        $vlll = array("Tidak Member", "Aktif", "Mati");
    }elseif($data['status'] == "Aktif"){
        $dttt = array("Aktif", "Mati");
        $vlll = array("Aktif", "Mati");
    }elseif($data['status'] == "Mati"){
        $dttt = array("Mati", "Aktif");
        $vlll = array("Mati", "Aktif");
    }
    echo form("Nama Lengkap", "text", "nama", "nama", "Nama Lengkap", $data['nama_siswa'], "form-control", "", "required");
    echo form("Email", "email", "email", "email", "Email", $data['email'], "form-control", "", "required");
    echo form("Nomor Telepon", "text", "no_hp", "no_hp", "Nomor Telepon", $data['no_hp'], "form-control", "", "required");
    echo form_select("Kelas", "form-control", "kelas", "kelas", $dt, $vl);
    echo form("Password", "password", "password", "password", "Password", "", "form-control", "", "required");
    echo form("Alamat", "text", "alamat", "alamat", "Alamat", $data['alamat'], "form-control", "", "required");
    echo form_file_edit("Upload Foto", "foto_siswa/", $data['foto'], "70px", "70px", "file", 'foto', 'foto', "Foto", "image/*");
    echo form_select("Member", "form-control", "member", "member", $dtt, $vll);
    echo form_select("Status Member", "form-control", "status", "status", $dttt, $vlll);
    echo hidden_form("id", "id", $data['id_siswa']);
}

if(isset($_GET['type']) && $_GET['type'] == 'edit'){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $kelas = $_POST['kelas'];
    $password = $_POST['password'];
    $alamat = $_POST['alamat'];
    $member = $_POST['member'];
    $status = $_POST['status'];
    $nama_file     = $_FILES['foto']['name'];
    $ukuran_file   = $_FILES['foto']['size'];
    $tipe_file     = $_FILES['foto']['type'];
    $tmp_file      = $_FILES['foto']['tmp_name'];
    $path          = "foto_siswa/".$nama_file;
    if(empty($password)){
        if(empty($nama_file)){
            $sql = mysqli_query($mysqli, "UPDATE siswa SET nama_siswa = '$nama', email = '$email', no_hp = '$no_hp', id_kelas = '$kelas', alamat = '$alamat', id_member = '$member', status = '$status' WHERE id_siswa = '$id'");
        }else{
            move_uploaded_file($tmp_file, $path);
            $sql = mysqli_query($mysqli, "UPDATE siswa SET nama_siswa = '$nama', foto = '$nama_file', email = '$email', no_hp = '$no_hp', id_kelas = '$kelas', alamat = '$alamat', id_member = '$member', status = '$status' WHERE id_siswa = '$id'");
        }
    }else{
        if(empty($nama_file)){
            $sql = mysqli_query($mysqli, "UPDATE siswa SET nama_siswa = '$nama', password = '$password', email = '$email', no_hp = '$no_hp', id_kelas = '$kelas', alamat = '$alamat', id_member = '$member', status = '$status' WHERE id_siswa = '$id'");
        }else{
            move_uploaded_file($tmp_file, $path);
            $sql = mysqli_query($mysqli, "UPDATE siswa SET nama_siswa = '$nama', email = '$email', password = '$password', foto = '$nama_file', no_hp = '$no_hp', id_kelas = '$kelas', alamat = '$alamat', id_member = '$member', status = '$status' WHERE id_siswa = '$id'");
        }
    }
}

if(isset($_GET['hapus'])){
    $sql = mysqli_query($mysqli, "DELETE FROM guru WHERE id_guru = '$_GET[hapus]'");
}

?>
                  
            