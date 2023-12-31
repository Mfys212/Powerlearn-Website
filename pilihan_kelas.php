<?php $active_kelas = "active"; ?>
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

    <!--kelas-->
    <section class="allsection mt-160">
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
      </div>
    </section>
    <!--akhir kelas-->

    
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
