<?php
  include 'koneksi.php';
  include 'funfiction.php';
  echo '<script src="ajax/siswa.js"></script>';
  echo '<div class="content-wrapper">';
  echo header_content("Siswa", "halaman_admin.php?m=3");
  $label = array("Foto", "Nama", "Email", "Nomor Telepon", "Kelas", "Password", "Alamat", "Member", "Status Member", "Bukti Pembayaran", "Action");
  echo content("", "", $label);
  echo '</div>';

  //Tambah Data Pop Up
  //End Tambah Data

  //Pop Up Edit Data
  echo modal_edit("edit", "Edit Siswa", "form", "siswaedit");
  //End Edit Data
  echo js_table();
  $no = 1;
  $sql = mysqli_query($mysqli, "SELECT * FROM siswa");
  while($row = mysqli_fetch_array($sql)){
?>
<div class="modal fade" id="myModal<?php echo $no; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Bukti Pembayaran</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" ><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <center>	
        <?php
          if($row['bukti_pembayaran'] == ''){
            echo "<i>Tidak Ada Gambar</i>";
          }else{
        ?>
          <img src="bukti_bayar/<?php echo $row['bukti_pembayaran']?>" alt="" width="455px" height="500px" class="img-responsive">
        <?php
          }
        ?>
        </center>
      </div>
      <div class="modal-footer">
      <?php
        if($row['bukti_pembayaran'] != ''){
      ?>
        <a href="bukti_bayar/<?php echo $row['bukti_pembayaran']?>" download><button type="button" class="btn btn-success" ><i class="fas fa-download"></i></button></a>
      <?php
        }
      ?>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>	
      </div>
    </div>
  </div>
</div>
<?php
  $no++;
  }
?>  