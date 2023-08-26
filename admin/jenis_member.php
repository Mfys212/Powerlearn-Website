<?php 
  include 'funfiction.php';
  echo '<script src="ajax/jenis_member.js"></script>';
  echo '<div class="content-wrapper">';
  echo header_content("Jenis Member", "halaman_admin.php?m=6");
  $label = array("Jenis Member", "Action");
  echo content("#tambah", "Tambah Jenis Member", $label);
  echo '</div>';

  //Tambah Data Pop Up
  echo modal_tambah_body("tambah", "Tambah Jenis Member", "jenismembertambah");
  echo form("Jenis Member", "text", "jenis_member", "jenis_member", "Jenis Member", "", "form-control", "", "required");
  echo modal_tambah_footer("tambah()");
  //End Tambah Data

  //Pop Up Edit Data
  echo modal_edit("edit", "Edit Jenis Member", "form", "jenismemberedit");
  //End Edit Data
  echo js_table();
?>
