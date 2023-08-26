<?php
  include 'koneksi.php';
  include 'funfiction.php';
  echo '<script src="ajax/guru.js"></script>';
  echo '<div class="content-wrapper">';
  echo header_content("Guru", "halaman_admin.php?m=2");
  $label = array("Foto", "Nama", "Email", "Nomor Telepon", "Mata Pelajaran", "Password", "Alamat", "Gelar", "Diverifikasi Oleh", "Action");
  echo content("#tambah", "Tambah Guru", $label);
  echo '</div>';

  //Tambah Data Pop Up
  echo modal_tambah_body("tambah", "Tambah Guru", "gurutambah");
  echo form("Nama Lengkap", "text", "nama", "nama", "Nama Lengkap", "", "form-control", "", "required");
  echo form("Email", "email", "email", "email", "Email", "", "form-control", "", "required");
  echo form("Nomor Telepon", "text", "no_hp", "no_hp", "Nomor Telepon", "", "form-control", "", "required");
  echo form("Password", "password", "password", "password", "Password", "", "form-control", "", "required");
  echo form("Alamat", "text", "alamat", "alamat", "Alamat", "", "form-control", "", "required");
  echo form("Upload Foto", "file", "foto", "foto", "Foto", "", "", "<br>", "required");
  $select = mysqli_query($mysqli, "SELECT * FROM mapel");
  $no = 1;
  $dt[0] = "Pilih";
  $vl[0] = "";
  while($r = mysqli_fetch_array($select)){
    $dt[$no] = $r['nama_mapel'];
    $vl[$no] = $r['id_mapel'];
    $no++;
  }
  echo form_select("Mapel", "form-control", "mapel", "mapel", $dt, $vl);
  echo form("Gelar", "text", "gelar", "gelar", "Gelar", "", "form-control", "", "required");
  echo modal_tambah_footer("tambah()");
  //End Tambah Data

  //Pop Up Edit Data
  echo modal_edit("edit", "Edit Guru", "form", "guruedit");
  //End Edit Data
  echo js_table();
?>



