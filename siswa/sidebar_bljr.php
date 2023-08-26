<?php
  session_start();
  ob_start();
  unset($_SESSION['mulai']);
  include "../admin/koneksi.php";
  if(empty($_SESSION['status'])){
    header("location:index.php");
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

    <!--font awesome-->
    <link rel="stylesheet" href="css_siswa/all.css" />

    <!--google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet" />

    <!--font awesome-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!--my css-->
    <link rel="stylesheet" href="css_siswa/style.css" />

    <title>Ruang Belajar</title>
  </head>
  <body>
    <input type="checkbox" id="check" />
    <label for="check">
      <i class="fas fa-times" id="cancel" style="color: #303B57;"></i>
    </label>

    <aside class="sidebar navbar-expand-lg navbar-light position-fixed flex-column" id="navbarNav">
      <div class="nav-brand pt-3 text-center">
      <?php
          if($_SESSION['foto'] == ''){
            ?>
            <img src="../admin/foto_siswa/default.png" width="80px" height="80px" style="border-radius:50px;"/>
            <?php
          }else{
            ?>
            <img src="../admin/foto_siswa/<?php echo $_SESSION['foto']?>"  width="80px" height="80px" style="border-radius:50px;"/>
            <?php
          }
        ?>
        <h5 class="subtitle text-center pt-3"><?php echo $_SESSION['nama_siswa']?></h5>
        <?php
          $sql = mysqli_query($mysqli, "SELECT * FROM kelas WHERE id_kelas = '$_SESSION[kelas]'");
          $data = mysqli_fetch_array($sql);
        ?>
        <p class="paragraph">KELAS <?php echo $data['kelas'];?></p>

          <a href="../paketharga/hargapaket.php"><button class="btn btn-primary-dt">Langganan sekarang</button></a>

        <div class=" mt-5" style="height: 420px; overflow-y: auto; overflow-x: hidden; border-radius: 0px 0px 20px 20px;">
            
        <div class="row pt-3 pb-5 pelajaran-side">
    
            <?php
              $no = 0;
              $p1 = mysqli_query($mysqli, "SELECT * FROM video WHERE id_materi = '$_GET[materi_id]'");
              while($pi = mysqli_fetch_array($p1)){
                $no++;
                ?>
                <a <?php if($no == 1){ echo "id='wam'"; }?> href="Ruangbelajar.php?mapel_id=<?php echo $_GET['mapel_id']?>&materi_id=<?php echo $_GET['materi_id']?>&video_id=<?php echo $pi['id_video']?>">
                  <div class="col-12 mt-5">
                      <button style="width: 90%; height: auto;"  class="btn <?php if(isset($active_video) && $active_video == 'active' && $_GET['video_id'] == $pi['id_video'] ){echo 'btn-sukses';}else{echo 'btn-putih';} ?> mx-3"> <span class="body-text-card text-dark">Video</span> <br> <?php echo $pi['judul']?></button>
                  </div>
                </a>
                <?php
              }
            ?>
            <?php
              $p2 = mysqli_query($mysqli, "SELECT * FROM isi_materi WHERE id_materi = '$_GET[materi_id]'");
              while($pi = mysqli_fetch_array($p2)){
                ?>
                <a href="ruangbelajarpenjelasan.php?mapel_id=<?php echo $_GET['mapel_id']?>&materi_id=<?php echo $_GET['materi_id']?>&video_id=<?php echo $_GET['video_id'];?>&penjelasan_id=<?php echo $pi['id_isi_materi']?>">
                    <div class="col-12 mt-5 " >
                        <button style="width: 90%; height: auto;" class="btn <?php if(isset($active_pen) && $active_pen == 'active' && $_GET['penjelasan_id'] == $pi['id_isi_materi'] ){echo 'btn-sukses';}else{echo 'btn-putih';} ?> mx-3"> <span class="body-text-card" style="color: #646464;">Penjelasan</span> <br> <?php echo $pi['judul']?></button>
                    </div>
                </a>
                <?php
              }
            ?>
            
            <?php
              $p3 = mysqli_query($mysqli, "SELECT * FROM kuis WHERE id_materi = '$_GET[materi_id]'");
              while($pi = mysqli_fetch_array($p3)){
                ?>
                <a href="quiz.php?mapel_id=<?php echo $_GET['mapel_id']?>&materi_id=<?php echo $_GET['materi_id']?>&video_id=<?php echo $_GET['video_id']?>&kuis_id=<?php echo $pi['id_kuis']?>&random=<?php echo $pi['random']?>&limit=<?php echo $pi['tampil'] ?>">
                    <div class="col-12 mt-5" >
                        <button style="width: 90%; height: auto;" class="btn btn-putih mx-3"> <span class="body-text-card" style="color: #646464;">Quiz</span> <br> <?php echo $pi['judul']?></button>
                    </div>
                </a>
                <?php
              }
              $cek1 = mysqli_num_rows($p1);
              $cek2 = mysqli_num_rows($p2);
              $cek3 = mysqli_num_rows($p3);
              if($cek1 == 0 && $cek2 == 0 && $cek3 == 0){
                ?>
                <i class="text-white"><b>Belum Ada Materi</b></i>
                <?php
              }
            ?>
        
        </div>
        </div>

      </div>
    </aside>

    <section class="nav">
      <div class="row no-gutters">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
          <input type="checkbox" id="check" />
          <label for="check" style="width: 30px;">
            <i id="btn">           
         
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

            <div class="col-lg-2 offset-lg-1 col-12 col-sm-12 col-md-2"><button class="btn btn-gold"><svg class="icon line" width="24" height="24" id="money-dollar-coin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title style="stroke-width: 2; stroke: rgb(255, 255, 255);">money dollar coin</title><path id="primary" d="M12,9V8m0,8V15m-2,0h2.5A1.5,1.5,0,0,0,14,13.5h0A1.5,1.5,0,0,0,12.5,12h-1A1.5,1.5,0,0,1,10,10.5h0A1.5,1.5,0,0,1,11.5,9H14M12,3a9,9,0,1,0,9,9A9,9,0,0,0,12,3Z" style="fill: none; stroke: rgb(245, 245, 245); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path></svg> Gold</button></div>

            <div class="col-lg-2 col-12 col-md-2 col-sm-12 mt-1 btn-block "><button class="btn btn-sukses"><svg class="icon line" width="24" height="24" id="money-dollar-coin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title style="stroke-width: 2; stroke: rgb(255, 255, 255);">money dollar coin</title><path id="primary" d="M12,9V8m0,8V15m-2,0h2.5A1.5,1.5,0,0,0,14,13.5h0A1.5,1.5,0,0,0,12.5,12h-1A1.5,1.5,0,0,1,10,10.5h0A1.5,1.5,0,0,1,11.5,9H14M12,3a9,9,0,1,0,9,9A9,9,0,0,0,12,3Z" style="fill: none; stroke: rgb(245, 245, 245); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path></svg> Exp</button></div>

            <div class="col-lg-6 col-12 col-sm-12 col-md-6 mt-1"><button class="btn btn-sukses btn-lg-block btn-lg-md">Level 2</button></div>
          
        </nav>
      </div>
    </section>