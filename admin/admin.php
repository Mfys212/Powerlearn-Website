<?php 
  include 'funfiction.php';
  echo '<script src="ajax/admin.js"></script>';
  echo '<div class="content-wrapper">';
  echo header_content("Admin", "halaman_admin.php?m=1");
  $label = array("Foto", "Nama", "Username", "Email", "Status", "Action");
  echo content("#tambah", "Tambah Admin", $label);
  echo '</div>';

  //Tambah Data Pop Up
  echo modal_tambah_body("tambah", "Tambah Admin", "admintambah");
  echo form("Nama Lengkap", "text", "nama", "nama", "Nama Lengkap", "", "form-control", "", "required");
  echo form("Username", "text", "username", "username", "Username", "", "form-control", "", "required");
  echo form("Email", "email", "email", "email", "Email", "", "form-control", "", "required");
  echo form("Password", "password", "password", "password", "Password", "", "form-control", "", "required");
  echo form("Upload Foto", "file", "foto", "foto", "Foto", "", "", "<br>", "required");
  $dt = array("Pilih", "Pimpinan", "Admin");
  $vl = array("", "Pimpinan", "Admin");
  echo form_select("Status", "form-control", "level", "level", $dt, $vl);
  echo modal_tambah_footer("tambah()");
  //End Tambah Data

  //Pop Up Edit Data
  echo modal_edit("edit", "Edit Admin", "form", "adminedit");
  //End Edit Data
  echo js_table();
?>



