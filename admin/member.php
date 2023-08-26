<?php 
  include 'koneksi.php';
  include 'funfiction.php';
  echo '<script src="ajax/member.js"></script>';
  echo '<div class="content-wrapper">';
  echo header_content("Member", "halaman_admin.php?m=7");
  $label = array("Jenis Member", "Member", "Kelas", "Harga", "Action");
  echo content("#tambah", "Tambah Member", $label);
  echo '</div>';

  //Tambah Data Pop Up
  echo modal_tambah_body("tambah", "Tambah Member", "membertambah");
  $sql = mysqli_query($mysqli, "SELECT * FROM jenis_member");
  $no = 1;
  $dt[0] = "Pilih";
  $vl[0] = "";
  while($data = mysqli_fetch_array($sql)){
    $dt[$no] = $data['jenis_member'];
    $vl[$no] = $data['id_jenis_member'];
    $no++;
  }
  echo form_select("Jenis Member", "form-control", "jenis_member", "jenis_member", $dt, $vl);
  echo form("Member", "text", "member", "member", "Member", "", "form-control", "", "required");
  $sql = mysqli_query($mysqli, "SELECT * FROM kelas");
  $n = 1;
  $dtt[0] = "Pilih";
  $vll[0] = "";
  while($data = mysqli_fetch_array($sql)){
    $dtt[$n] = $data['kelas'];
    $vll[$n] = $data['id_kelas'];
    $n++;
  }
  echo form_select("Kelas", "form-control", "kelas", "kelas", $dtt, $vll);
  echo form("Harga", "text", "harga", "harga", "Masukkan Harga", "", "form-control", "", "required");
  echo modal_tambah_footer("tambah()");
  //End Tambah Data

  //Pop Up Edit Data
  echo modal_edit("edit", "Edit Member", "form", "memberedit");
  //End Edit Data
  echo js_table();
?>
