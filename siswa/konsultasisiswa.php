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

    <title>Konsultasi Siswa</title>
  </head>
  <body>

    <!-- nav Konsultasi -->
    <div class="container-fluid sticky-top">
      <div class="container">
        <div class="row nap bg-white d-flex mt-4 p-3 d-flex align-items-center shadow-sm">
          <div class="col-lg-5 col-md-5 col-sm-12 col-12 d-flex align-items-center">
            <label for="check" class="mt-2">
              <a href="index.html"><i class="fas fa-arrow-left mr-3" style="color: #303B57;"></i></a>
            </label>
            <span class="subtitle">Konsultasi Siswa</span>
          </div>

          <div class="col-lg-3 offset-lg-4 col-md-2 col-sm-12 col-12  mt-lg-0 mt-sm-2 mt-2 d-flex align-items-center">
            <div class="dropdown">
              <button class="btn btn-sukses dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Pilih Mata Pelajaran
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Matematika</a>
                <a class="dropdown-item" href="#">Bahasa Irlandia</a>
                <a class="dropdown-item" href="#">Bahasa Inggris</a>
              </div>
            </div>
          </div>
        </div>  
      </div>      
    </div>
    <!-- End nav Konsultasi -->

    <!-- Konsultasi Siswa -->
    <div class="container-fluid pt-4">
      <div class="container bg-primary py-3" style="height: 700px; overflow-y: scroll; margin-bottom: 100px;">

        <!-- Kirim Pesan Guru -->
        <div class="row mt-3 mx-lg-3 mx-1 p-lg-4 p-1 bg-primary">
          <div class="col-lg-6 bg-white rounded-lg p-3">
            <div class="border border-primary p-2 rounded-lg ">
              <span class="sub-title ">HudaDes</span> <br>
              <span class="body-text">Guru Bahasa Jepang</span>
            </div>
            <p class="body-text mt-3" style="color: #6a7899;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, minus mollitia. Ab earum sit magni deserunt labore architecto recusandae neque. Fugit adipisci dignissimos culpa laudantium aspernatur perferendis enim, quia maxime.</p>
            <div class="float-right">            
              <span class="body-text mr-2">09:20</span>
              <i>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M22 11.0818V12.0018C21.9988 14.1582 21.3005 16.2565 20.0093 17.9836C18.7182 19.7108 16.9033 20.9743 14.8354 21.5857C12.7674 22.1971 10.5573 22.1237 8.53447 21.3764C6.51168 20.6291 4.78465 19.2479 3.61096 17.4389C2.43727 15.6299 1.87979 13.4899 2.02168 11.3381C2.16356 9.18638 2.99721 7.13814 4.39828 5.49889C5.79935 3.85964 7.69279 2.7172 9.79619 2.24196C11.8996 1.76673 14.1003 1.98415 16.07 2.86182" stroke="#2992F5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M22 4L12 14.01L9 11.01" stroke="#2992F5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
              </i>
            </div>
          </div>
        </div>  
        <!-- End Kirim Pesan Guru -->

        <!-- Kirim Pesan Siswa -->
        <div class="row mt-3 mx-lg-3 mx-1 p-lg-4 p-1 bg-primary">
          <div class="col-lg-6 offset-lg-6 rounded-lg p-3 " style="background-color:#aff1e9;">
            <p class="body-text" style="color: #6a7899;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, minus mollitia. Ab earum sit magni deserunt labore architecto recusandae neque. Fugit adipisci dignissimos culpa laudantium aspernatur perferendis enim, quia maxime.</p>
            <div class="float-right">            
              <span class="body-text mr-2">09:20</span>
              <i>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M22 11.0818V12.0018C21.9988 14.1582 21.3005 16.2565 20.0093 17.9836C18.7182 19.7108 16.9033 20.9743 14.8354 21.5857C12.7674 22.1971 10.5573 22.1237 8.53447 21.3764C6.51168 20.6291 4.78465 19.2479 3.61096 17.4389C2.43727 15.6299 1.87979 13.4899 2.02168 11.3381C2.16356 9.18638 2.99721 7.13814 4.39828 5.49889C5.79935 3.85964 7.69279 2.7172 9.79619 2.24196C11.8996 1.76673 14.1003 1.98415 16.07 2.86182" stroke="#2992F5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M22 4L12 14.01L9 11.01" stroke="#2992F5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
              </i>
            </div>
          </div>
        </div> 
        <!-- End Kirim Pesan Siswa -->

        <!-- Kirim Pesan Siswa -->
        <div class="row mt-3 mx-lg-3 mx-1 p-lg-4 p-1 bg-primary">
          <div class="col-lg-6 offset-lg-6  rounded-lg p-3" style="background-color:#aff1e9;">
            <p class="body-text" style="color: #6a7899;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, minus mollitia. Ab earum sit magni deserunt labore architecto recusandae neque. Fugit adipisci dignissimos culpa laudantium aspernatur perferendis enim, quia maxime.</p>
            <div class="float-right">            
              <span class="body-text mr-2">09:20</span>
              <i>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M22 11.0818V12.0018C21.9988 14.1582 21.3005 16.2565 20.0093 17.9836C18.7182 19.7108 16.9033 20.9743 14.8354 21.5857C12.7674 22.1971 10.5573 22.1237 8.53447 21.3764C6.51168 20.6291 4.78465 19.2479 3.61096 17.4389C2.43727 15.6299 1.87979 13.4899 2.02168 11.3381C2.16356 9.18638 2.99721 7.13814 4.39828 5.49889C5.79935 3.85964 7.69279 2.7172 9.79619 2.24196C11.8996 1.76673 14.1003 1.98415 16.07 2.86182" stroke="#2992F5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M22 4L12 14.01L9 11.01" stroke="#2992F5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
              </i>
            </div>
          </div>
        </div>
         <!--End Kirim Pesan Siswa  -->

        <!-- Kirim Pesan Siswa -->
        <div class="row mt-3 mx-lg-3 mx-1 p-lg-4 p-1">
          <div class="col-lg-6 offset-lg-6 rounded-lg p-3" style="background-color:#aff1e9;">
            <p class="body-text" style="color: #6a7899;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, minus mollitia. Ab earum sit magni deserunt labore architecto recusandae neque. Fugit adipisci dignissimos culpa laudantium aspernatur perferendis enim, quia maxime.</p>
            <div class="float-right">            
              <span class="body-text mr-2">09:20</span>
              <i>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M22 11.0818V12.0018C21.9988 14.1582 21.3005 16.2565 20.0093 17.9836C18.7182 19.7108 16.9033 20.9743 14.8354 21.5857C12.7674 22.1971 10.5573 22.1237 8.53447 21.3764C6.51168 20.6291 4.78465 19.2479 3.61096 17.4389C2.43727 15.6299 1.87979 13.4899 2.02168 11.3381C2.16356 9.18638 2.99721 7.13814 4.39828 5.49889C5.79935 3.85964 7.69279 2.7172 9.79619 2.24196C11.8996 1.76673 14.1003 1.98415 16.07 2.86182" stroke="#2992F5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M22 4L12 14.01L9 11.01" stroke="#2992F5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
              </i>
            </div>
          </div>
        </div> 
        <!-- End KIrim Pesan Siswa -->

        <!-- Kirim Pesan Guru -->
        <div class="row mt-3 mx-lg-3 mx-1 p-lg-4 p-1 bg-primary">
          <div class="col-lg-6 bg-white rounded-lg p-3">
            <div class="border border-primary p-2 rounded-lg ">
              <span class="sub-title ">HudaDes</span> <br>
              <span class="body-text">Guru Bahasa Jepang</span>
            </div>
            <p class="body-text mt-3" style="color: #6a7899;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, minus mollitia. Ab earum sit magni deserunt labore architecto recusandae neque. Fugit adipisci dignissimos culpa laudantium aspernatur perferendis enim, quia maxime.</p>
            <div class="float-right">            
              <span class="body-text mr-2">09:20</span>
              <i>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M22 11.0818V12.0018C21.9988 14.1582 21.3005 16.2565 20.0093 17.9836C18.7182 19.7108 16.9033 20.9743 14.8354 21.5857C12.7674 22.1971 10.5573 22.1237 8.53447 21.3764C6.51168 20.6291 4.78465 19.2479 3.61096 17.4389C2.43727 15.6299 1.87979 13.4899 2.02168 11.3381C2.16356 9.18638 2.99721 7.13814 4.39828 5.49889C5.79935 3.85964 7.69279 2.7172 9.79619 2.24196C11.8996 1.76673 14.1003 1.98415 16.07 2.86182" stroke="#2992F5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M22 4L12 14.01L9 11.01" stroke="#2992F5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
              </i>
            </div>
          </div>
        </div> 
        <!-- End Kirim Pesan Guru -->

      </div>      
    </div>
    <!-- End Konsultasi Siswa -->

    <!-- chatbox Konsultasi -->
    <div class="container-fluid fixed-bottom">
      <div class="container">
        <div class="row nap bg-white d-flex mt-4 p-lg-4 p-md-4 p-2 d-flex align-items-center shadow-sm">
          <div class="col-lg-9 col-md-5 col-sm-8 col-8 d-flex align-items-center">
            <input type="text" class="form-control imput paragraph rounded-lg-" style="background-color: #ffffff;" id="exampleInputPassword1" placeholder="Ketik Pesan" />
          </div>

          <div class="col-lg-3 col-md-2 col-sm-2 col-2 d-flex align-items-center">
            <button class="btn btn-sukses float-right d-flex"><span class="d-lg-block d-none">Kirim</span> <i class="ml-lg-2 ml-md-2 ml-0">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22 2L11 13" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M22 2L15 22L11 13L2 9L22 2Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>          
                 </i></button>
          </div>

        </div>  
      </div>      
    </div>
    <!-- End chatbox Konsultasi -->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
