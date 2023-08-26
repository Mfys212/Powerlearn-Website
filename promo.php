<?php $active_promo="active"; ?>
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


    <!--carousel Section-->
    <section class="allsection mt-160">
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
