<?php
session_start();
ob_start(); 
if(isset($_SESSION['nama_siswa'])){
  header("location:siswa/siswa.php");
}
$active_index="active"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Link Font-Awesom -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- Link Margin  -->
    <link rel="stylesheet" href="css/margin.css">

    <!--google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet" />

    <!--My css-->
    <link rel="stylesheet" href="css/style.css" />

    <title>Powerlearn | Learn and Sky</title>
  </head>
  <body>

    <!-- nav -->
    <?php include "header.php"; ?>


    <!--hero-->
    <section class="hero">
      <div class="heroic">
        <div class="row tengah align-items-center ">
          <div class="col-12 col-sm-12 col-md-6 col-lg-6">
            <h1 class="heading">Belajar Mudah, Murah <span> Berkualitas</span></h1>

            <p class="paragraph mt-16">menyediakan dan memperluas akses terhadap pendidikan berkualitas <br> melalui  teknologi yang mampu menjangkau semua golongan , baik <br> golongan bawah atau atas, Anak – Anak Sampai Orang tua.</p>
            <a href="https://youtube.com"><button type="button" class="btn btn-primary mt-32">Belajar Sekarang</button></a>
          </div>
          <div class="col-6 col-sm-0 col-md-6 col-lg-6 d-none d-md-block offset">
            <a href="#"> <img src="./img/hero/Illustrasi_hero.png" alt="Illustrasi Hero "/></a>
          </div>
        </div>
      </div>
    </section>
    <!--akhir hero-->

    <!--kelas-->
    <section class="allsection">
      <div class="kelas">
        <div class="row text-left">
          <div class="col-12 col-sm-12"><h6 class="subheading">Pilihan <br> Kelas Yang Tersedia</h6></div>
        </div>
        <div class="row mt-32 text-center">
          <?php
          $no=1;
            $sql = mysqli_query($mysqli, "SELECT * FROM kelas");
            while($kelas = mysqli_fetch_array($sql)){
              if($no > 6){
                if($no > 13){
                  ?>
                  <div class="row text-center">
                    <div class="col-6 col-sm-6 col-md-3 col-lg-2 pt-4">
                      <a href=""> 

                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-text"><?php echo $kelas['kelas'];?></h5>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <?php
                }else{
                  ?>
                    <div class="row text-center">
                      <div class="col-6 col-sm-6 col-md-3 col-lg-2 pt-4">
                        <a href=""> 

                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-text"><?php echo $kelas['kelas'];?></h5>
                            </div>
                          </div>
                        </a>
                      </div>
                  </div>
                  <?php
                }
              }else{
                ?>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 pt-4">
                  <a href="login.php">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-text"><?php echo $kelas['kelas']; ?></h5>
                      </div>
                    </div>
                  </a>
                </div>
                <?php
              }
            }
          ?>
        </div>
        
    </section>
    <!--akhir kelas-->

    <!--benefit dan Keuntungan Section-->
    <section class="allsection">
      <div class="benefit">
        <div class="row">
          <div class="col-12 col-sm-12"><h3 class="subheading"> Benefit dan Keuntungan <br> Belajar di Powerlearn</h3></div>
        </div>
        <div class="row">
          <div class="col-md pt-5">
            <div class="card">
            <div class="card-body">
              <h5 class="card-title"><img src="./img/benefit/Icon.png" alt=""></h5>
              <h6 class="subtitle mb-2 text-dark">Bab Yang Terarah</h6>
              <p class="card-text paragraph">Belajar dengan bab dan materi yang pastinya terarah dipowerlearn</p>
            </div>
          </div>
        </div>
          <div class="col-md pt-5"><div class="card">
            <div class="card-body">
              <h5 class="card-title"><img src="./img/benefit/Icon.png" alt=""></h5>
              <h6 class="subtitle mb-2 text-dark">Latihan Bab</h6>
              <p class="card-text paragraph">Belajar dengan bab dan materi
                yang pastinya 
                terarah dipowerlearn.</p>
            </div>
          </div>
        </div>
          <div class="col-md pt-5"><div class="card">
            <div class="card-body">
              <h5 class="card-title"><img src="./img/benefit/Icon.png" alt=""></h5>
              <h6 class="subtitle mb-2 text-dark">Level Class</h6>
              <p class="card-text paragraph">Belajar dengan bab dan materi
                yang pastinya 
                terarah dipowerlearn.</p>
            </div>
          </div>
        </div>
          <div class="col-md pt-5"><div class="card">
            <div class="card-body">
              <h5 class="card-title"><img src="./img/benefit/Icon.png" alt=""></h5>
              <h6 class="subtitle mb-2 text-dark">Ofline Mode</h6>
              <p class="card-text paragraph">Belajar dengan bab dan materi
                yang pastinya 
                terarah dipowerlearn.</p>
            </div>
          </div>
        </div>

        </div>
        <div class="row ">
          <div class="col-md pt-5">
            <div class="card">
            <div class="card-body">
              <h5 class="card-title"><img src="./img/benefit/Icon.png" alt=""></h5>
              <h6 class="subtitle mb-2 text-dark">Konsultasi Gratis</h6>
              <p class="card-text paragraph">Belajar dengan bab dan materi yang pastinya terarah dipowerlearn</p>
            </div>
          </div>
        </div>
          <div class="col-md pt-5"><div class="card">
            <div class="card-body">
              <h5 class="card-title"><img src="./img/benefit/Icon.png" alt=""></h5>
              <h6 class="subtitle mb-2 text-dark">Bank Soal</h6>
              <p class="card-text paragraph">Belajar dengan bab dan materi
                yang pastinya 
                terarah dipowerlearn.</p>
            </div>
          </div>
        </div>
          <div class="col-md pt-5"><div class="card">
            <div class="card-body">
              <h5 class="card-title"><img src="./img/benefit/Icon.png" alt=""></h5>
              <h6 class="subtitle mb-2 text-dark">Level Class</h6>
              <p class="card-text paragraph">Belajar dengan bab dan materi
                yang pastinya 
                terarah dipowerlearn.</p>
            </div>
          </div>
        </div>
          <div class="col-md pt-5">
            <div class="card">
            <div class="card-body">
              <h5 class="card-title"><img src="./img/benefit/Icon.png" alt=""></h5>
              <h6 class="subtitle mb-2 text-dark">Quis</h6>
              <p class="card-text paragraph">Belajar dengan bab dan materi
                yang pastinya 
                terarah dipowerlearn.</p>
            </div>
          </div>
        </div>

        </div>
      </div>
    </section>
    <!--akhir benefit-->

    <!--carousel Section-->
    <section class="allsection">
      <div class="caraosel">
        <div class="row">
          <div class="col-6"><h3 class="subheading"> Promo <br> Terbaru di Powerlearn</h3></div>
        </div>
      </div>
   
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carausel">
          <div class="carousel-item active">
            <div class="row pt-5 ">
              <div class="col-6">
                <img src="./img/carousel/Slider1.png" alt="">
              </div>
              <div class="col-6">
                <img src="./img/carousel/Slider2.png" alt="" />
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="row pt-5 ">
              <div class="col-6">
                <img src="./img/carousel/Slider2.png" alt="">
              </div>
              <div class="col-6">
                <img src="./img/carousel/Slider1.png" alt="" />
              </div>
            </div>
          </div>
          <div class="carousel-item active">
            <div class="row pt-5 ">
              <div class="col-6">
                <img src="./img/carousel/Slider1.png" alt="">
              </div>
              <div class="col-6">
                <img src="./img/carousel/Slider2.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    </section>
    <!--akhir caraosel-->

    <!--cerita Section-->
    <section class="allsection">
      <div class="story">
        <div class="row">
          <div class="col-6"><h3 class="subheading"> Cerita <br> Siswa Powerlearn</h3></div>
        </div>
        <div class="row pt-5 text-center">
          <div class="col-md"> <div class="card">
            <div class="card-body">
              <h5 class="card-title"><img src="./img/testimonial_cerita/pija.png" alt=""></h5>
              <h6 class="subtitle mb-2 text-dark">Pija</h6>
              <p class="paragraph">Siswa Pemalas</p>
              <p class="card-text paragraph">Aku sudah aktif berlangganan Ruangguru sejak kelas 10. Ruangguru adalah teman paling setia yang selalu menemaniku untuk persiapan ukan apapun, mau itu ujian semester bahkan persiapan UTBK. Al hamdulillah, aku lolos SBMPTN 2021 di ITERA pilihan pertama. 
              </p>
            </div>
          </div></div>
          <div class="col-md"> <div class="card">
            <div class="card-body">
              <h5 class="card-title"><img src="./img/testimonial_cerita/Deltasus.png" alt=""></h5>
              <h6 class="subtitle mb-2 text-dark">Deltasus</h6>
              <p class="paragraph ">Siswa Teladan</p>
              <p class="card-text paragraph">Aku sudah aktif berlangganan Ruangguru sejak kelas 10. Ruangguru adalah teman paling setia yang selalu menemaniku untuk persiapan ukan apapun, mau itu ujian semester bahkan persiapan UTBK. Al hamdulillah, aku lolos SBMPTN 2021 di ITERA pilihan pertama. 
              </p>
            </div>
          </div></div>
        </div>
      </div>
    </section>
    <!--akhir cerita-->

    <!--Testimonial Section-->
    <section class="allsection">
      <div class="test">
        <div class="row">
          <div class="col-6"><h3 class="subheading">Testimonial <br> Siswa Powerlearn</h3></div>
        </div>
        <div class="row pt-5 text-center">
          <div class="col-md"> <div class="card">
            <div class="card-body">
              <h5 class="card-title"><img src="./img/testimonial_cerita/taul.png" alt=""></h5>
              <h6 class="subtitle mb-2 text-dark">Miftahul Huda</h6>
              <p class="paragraph">Siswa Pemalas</p>
              <p class="card-text paragraph">Aku sudah aktif berlangganan Ruangguru sejak kelas 10. Ruangguru adalah teman paling setia yang selalu menemaniku untuk persiapan ukan apapun, mau itu ujian semester bahkan persiapan UTBK. Al hamdulillah, aku lolos SBMPTN 2021 di ITERA pilihan pertama. 
              </p>
            </div>
          </div></div>
          <div class="col-md"> <div class="card">
            <div class="card-body">
              <h5 class="card-title"><img src="./img/testimonial_cerita/Ardi.png" alt=""></h5>
              <h6 class="subtitle mb-2 text-dark">Ardiawan</h6>
              <p class="paragraph ">Siswa Teladan</p>
              <p class="card-text paragraph">Aku sudah aktif berlangganan Ruangguru sejak kelas 10. Ruangguru adalah teman paling setia yang selalu menemaniku untuk persiapan ukan apapun, mau itu ujian semester bahkan persiapan UTBK. Al hamdulillah, aku lolos SBMPTN 2021 di ITERA pilihan pertama. 
              </p>
            </div>
          </div></div>
        </div>
      </div>
    </section>
    <!--AkhirTestimonial-->

    <!--info-->
    <!-- <section class="allsection">
      <div class="info flex-column">
        <div class="row">
          <div class="col-4"><h3 class="subheading">Info <br> Terbaru Powerlearn</h3></div>
        </div>
        <div class="row pt-5">
          <div class="col-12 col-md-6 col-sm-12">
            <div class="card-body1">
            <img src="./img/info/2.png" class="d-block" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <p>Aku sudah aktif berlangganan Ruangguru sejak kelas 10. Ruangguru adalah teman paling setia yang selalu menemaniku </p>
            </div>
          </div>
        </div>
          <div class="col-12 col-md-3 col-sm-12"> 
            <div class="card-body2">
            <img src="./img/info/1.png" class="d-block h-100 w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <p>Aku sudah aktif berlangganan Ruangguru sejak kelas 10. Ruangguru </p>
            </div>
          </div>
        </div>
          <div class="col-12 col-md-3 col-sm-12">
            <div class="card-body2">
              <img src="./img/info/3.png" class="d-block h-100 w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <p>Aku sudah aktif berlangganan Ruangguru sejak kelas 10. Ruangguru </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!--akhir info-->

    
    <!-- Remake Footer -->
  <?php include "footer.php"; ?>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    
<!-- 
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/all.js"></script> -->
  </body>
</html>
