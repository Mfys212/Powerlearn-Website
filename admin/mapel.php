<?php 
  include 'funfiction.php';
  echo '<script src="ajax/mapel.js"></script>';
  echo '<div class="content-wrapper">';
  echo header_content("Mata Pelajaran", "halaman_admin.php?m=5");
  $label = array("Mata Pelajaran", "Action");
  echo content("#tambah", "Tambah Mapel", $label);
  echo '</div>';

  //Tambah Data Pop Up
  echo modal_tambah_body("tambah", "Tambah Mata Pelajaran", "mapeltambah");
  echo form("Mapel", "text", "mapel", "mapel", "Mapel", "", "form-control", "", "required");
  echo modal_tambah_footer("tambah()");
  //End Tambah Data

  //Pop Up Edit Data
  echo modal_edit("edit", "Edit Mapel", "form", "mapeledit");
  //End Edit Data
  echo js_table();
?>