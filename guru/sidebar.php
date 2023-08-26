<?php
    session_start();
    ob_start();
    include "koneksi.php";
    if(empty($_SESSION['status'])){
        header("location:../login.php?login=guru");
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="css_guru/all.css">

    <!--google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet" />

    <!--font awesome--> 
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!--my css-->
    <link rel="stylesheet" href="css_guru/style.css" />

    <title>Halaman Guru</title>
  </head>
  <body>

    <input type="checkbox" id="check"/>
    <label for="check" class="">
      <i class="fas fa-times" style="color: #303B57;" id="cancel">
      </i>
    </label>

    <aside class="sidebar navbar-expand-lg navbar-light position-fixed flex-column" id="navbarNav">
      <div class="nav-brand pt-5 text-center">
        
        <img style="border-radius:60px;" src="../admin/foto_guru/<?php echo $_SESSION['foto']; ?>" width="80px" height="80px"  />  
        <h5 class="subtitle text-center pt-3"><?php echo $_SESSION['nama_guru'].", ".$_SESSION['gelar']; ?></h5>
        <?php
            $sql = mysqli_query($mysqli, "SELECT * FROM mapel WHERE id_mapel = '$_SESSION[id_mapel]'");
            $mapel = mysqli_fetch_array($sql);
        ?>
        <p class="paragraph">Guru <?php echo $mapel['nama_mapel']; ?></p>
        <div>
          <button class="btn btn-primary-dt"><?php echo $_SESSION['email']; ?></button>
        </div>
        <ul class="navbar-nav flex-column pt-5">
          <li class="nav-item active <?php if(isset($active_guru) && $active_guru == 'active'){echo "aktipoi"; } ?>">
            <a class="nav-link" href="guru.php">
              <p class="paragraph">Tambah Bab dan Materi</p>
            </a>
          </li>
          <li class="nav-item <?php if(isset($active_konsul) && $active_konsul == 'active'){echo "aktipoi"; } ?>">
            <a class="nav-link" href="chat_konsultasi.php"> <p class="paragraph">Konsultasi Murid</p></a>
          </li>
          <li class="nav-item <?php if(isset($active_pgt) && $active_pgt == 'active'){echo "aktipoi"; } ?>">
            <a class="nav-link" href="pengaturan.php">
              <p class="paragraph">Pengaturan</p>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="logout.php"> <p class="paragraph">Keluar</p></a>
          </li>
        </ul>
      </div>
    </aside>

    <!-- Nav Overview -->
    <section class="nav">
      <div class="row no-gutters">
        <nav class="navbar navbar-expand-lg navbar-light bg-white ">
          <input type="checkbox" id="check" />
          <label for="check" style="width: 30px;">
            <i id="btn">          
             <?//xml version="1.0" encoding="utf-8"?>
              <!-- Generator: Adobe Illustrator 23.0.5, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 543.8 543.8" style="enable-background:new 0 0 543.8 543.8;" xml:space="preserve">
              <style type="text/css">
                .st0{fill:#FFFFFF;stroke:#303B57;stroke-width:50;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:50;}
              </style>
              <g>
                <line class="st0" x1="108.9" y1="148.9" x2="434.9" y2="148.9"/>
                <line class="st0" x1="108.9" y1="394.9" x2="434.9" y2="394.9"/>
                <line class="st0" x1="108.9" y1="271.9" x2="296.5" y2="271.9"/>
              </g>
              </svg></i>
          </label>
        </nav>
      </div>
    </section>
