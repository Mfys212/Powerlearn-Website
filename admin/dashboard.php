<?php 
include 'koneksi.php';
include 'funfiction.php';
echo '<div class="content-wrapper">';
echo header_content("Dashboard", "halaman_admin.php"); 
echo '<section class="content">
    <div class="container-fluid">
      <div class="row">';        
function box($row, $judul, $icon, $bg, $link){
  echo '<div class="col-lg-3 col-6">
          <div class="small-box '.$bg.'">
            <div class="inner">
              <h3>'.$row.'<sup style="font-size: 20px"></sup></h3>
              <p>'.$judul.'</p>
            </div>
          <div class="icon">
            <i class="'.$icon.'"></i>
          </div>
            <a href="'.$link.'" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>';
}
$sql = mysqli_query($mysqli, "SELECT * FROM guru");
$row = mysqli_num_rows($sql);
echo box($row, "Guru", "fas fa-chalkboard-teacher", "bg-success", "halaman_admin.php?m=2");
$sql = mysqli_query($mysqli, "SELECT * FROM siswa");
$row = mysqli_num_rows($sql);
echo box($row, "Siswa", "fas fa-user", "bg-warning", "halaman_admin.php?m=3");
$sql = mysqli_query($mysqli, "SELECT * FROM kelas");
$row = mysqli_num_rows($sql);
echo box($row, "Kelas", "fas fa-university", "bg-info", "halaman_admin.php?m=4");
$sql = mysqli_query($mysqli, "SELECT * FROM mapel");
$row = mysqli_num_rows($sql);
echo box($row, "Mapel", "fas fa-book", "bg-danger", "halaman_admin.php?m=5");      
echo '</div>
      </div></section>
      </div>';
?>  


  