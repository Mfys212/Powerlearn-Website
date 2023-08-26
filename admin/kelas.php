<?php 
  include 'funfiction.php';
  echo '<script src="ajax/kelas.js"></script>';
  echo '<div class="content-wrapper">';
  echo header_content("Kelas", "halaman_admin.php?m=4");
  $label = array("Kelas", "Action");
  echo content("#tambah", "Tambah Kelas", $label);
  echo '</div>';

  //Tambah Data Pop Up
  echo modal_tambah_body("tambah", "Tambah Kelas", "kelastambah");
  echo form("Kelas", "text", "kelas", "kelas", "Kelas", "", "form-control", "", "required");
  echo modal_tambah_footer("tambah()");
  //End Tambah Data

  //Pop Up Edit Data
  echo modal_edit("edit", "Edit Kelas", "form", "kelasedit");
  //End Edit Data
  echo js_table();
?>