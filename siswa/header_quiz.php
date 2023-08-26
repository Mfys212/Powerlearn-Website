<?php
  session_start();
  ob_start();
  include "../admin/koneksi.php";
  if(empty($_SESSION['status'])){
    header("location:index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php
    if(empty($_GET['s'])){
          //untuk memulai session
          include "../admin/koneksi.php";
          //set session dulu dengan nama $_SESSION["mulai"]
          if (isset($_SESSION["mulai"])) { 
              //jika session sudah ada
              $telah_berlalu = time() - $_SESSION["mulai"];
          } else { 
              //jika session belum ada
              $_SESSION["mulai"]  = time();
              $telah_berlalu      = 0;
          } 
      
          $sql    = mysqli_query($mysqli, "SELECT * FROM kuis WHERE id_kuis = '$_GET[kuis_id]'");   
          $data   = mysqli_fetch_array($sql);
      
          $temp_waktu = ($data['waktu']*60) - $telah_berlalu; //dijadikan detik dan dikurangi waktu yang berlalu
          $temp_menit = (int)($temp_waktu/60);                //dijadikan menit lagi
          $temp_detik = $temp_waktu%60;                       //sisa bagi untuk detik
          
          if ($temp_menit < 60) { 
              /* Apabila $temp_menit yang kurang dari 60 meni */
              $jam    = 0; 
              $menit  = $temp_menit; 
              $detik  = $temp_detik; 
          } else { 
              /* Apabila $temp_menit lebih dari 60 menit */           
              $jam    = (int)($temp_menit/60);    //$temp_menit dijadikan jam dengan dibagi 60 dan dibulatkan menjadi integer 
              $menit  = $temp_menit%60;           //$temp_menit diambil sisa bagi ($temp_menit%60) untuk menjadi menit
              $detik  = $temp_detik;
          }   
    }
  ?>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!--font awesome-->
        <link rel="stylesheet" href="css_siswa/all.css" />
        
        <!--google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet" />
        <script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
        <!--font awesome-->
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {
              /** Membuat Waktu Mulai Hitung Mundur Dengan 
                * var detik = 0,
                * var menit = 1,
                * var jam = 1
              */
            var detik   = <?php echo $detik; ?>;
            var menit   = <?php echo $menit; ?>;
            var jam     = <?php echo $jam; ?>;
              
             /**
               * Membuat function hitung() sebagai Penghitungan Waktu
             */
            function hitung() {
                /** setTimout(hitung, 1000) digunakan untuk 
                    * mengulang atau merefresh halaman selama 1000 (1 detik) 
                */
                setTimeout(hitung,1000);
  
               /** Jika waktu kurang dari 10 menit maka Timer akan berubah menjadi warna merah */
               if(menit < 10 && jam == 0){
                     var peringatan = 'style="color:red"';
               };
 
               /** Menampilkan Waktu Timer pada Tag #Timer di HTML yang tersedia */
                if(jam < 10){
                  document.getElementById("habis").innerHTML = "Siswa Waktu &nbsp;" + "0" + jam + " : " + menit + " : " + detik;
                }
                if(menit < 10){
                  document.getElementById("habis").innerHTML = "Siswa Waktu &nbsp;" + jam + " : " + "0" + menit + " : " + detik;
                }
                if(detik < 10){
                  document.getElementById("habis").innerHTML = "Siswa Waktu &nbsp;" + jam + " : " + menit + " : " + "0" + detik;
                }
                if(jam < 10 && menit < 10 && detik < 10){
                  document.getElementById("habis").innerHTML = "Siswa Waktu &nbsp;" + "0" + jam + " : " + "0" + menit + " : " + "0" + detik;
                }
                if(jam < 10 && menit < 10 ){
                  document.getElementById("habis").innerHTML = "Siswa Waktu &nbsp;" + "0" + jam + " : " + "0" + menit + " : " + detik;
                }
                if(jam < 10 && detik < 10){
                  document.getElementById("habis").innerHTML = "Siswa Waktu &nbsp;" + "0" + jam + " : " + menit + " : " + "0" + detik;
                }
                if(menit < 10 && detik < 10){
                  document.getElementById("habis").innerHTML = "Siswa Waktu &nbsp;" + jam + " : " + "0" + menit + " : " + "0" + detik;
                }
                if(jam > 9 && menit > 9 && detik > 9){
                  document.getElementById("habis").innerHTML = "Siswa Waktu &nbsp;" + jam + " : " + menit + " : " + detik;
                }
                /** Melakukan Hitung Mundur dengan Mengurangi variabel detik - 1 */
                detik --;
 
                /** Jika var detik < 0
                    * var detik akan dikembalikan ke 59
                    * Menit akan Berkurang 1
                */
                if(detik < 0) {
                    detik = 59;
                    menit --;
 
                    /** Jika menit < 0
                        * Maka menit akan dikembali ke 59
                        * Jam akan Berkurang 1
                    */
                    if(menit < 0) {
                        menit = 59;
                        jam --;
 
                        /** Jika var jam < 0
                            * clearInterval() Memberhentikan Interval dan submit secara otomatis
                        */
                        if(jam < 0) {                                                                 
                            clearInterval();  
                            var button=document.getElementById("klik");
                            setInterval(function(){ 
                              button.click();
                            }, 1000);    
                            
                        } 
                    } 
                } 
                
            }           
            /** Menjalankan Function Hitung Waktu Mundur */
            hitung();
      }); 
      // ]]>
    </script>
        <!--my css-->
        <link rel="stylesheet" href="css_siswa/style.css" />
    
          <script>
            if (distance < 0) {
              
          </script>
    <title>Hello, world!</title>
  </head>
  <body <?php
          if(empty($_GET['s'])){
            ?>
            onload="countDown();"
            <?php
          }else {
            echo "";
          }
        ?>
       >
    
    <!-- Nav Qwuiz -->
    <div class="container-fluid sticky-top">
      <div class="row nap bg-white d-flex mt-4 mx-3 p-3 d-flex align-items-center" style="border-radius: 20px;">
          <div class="col-lg-4 col-md-5 col-sm-12 col-12 d-flex align-items-center">
            <label for="check" class="mt-2">
              <a href="Ruangbelajar.php?mapel_id=<?php echo $_GET['mapel_id']?>&materi_id=<?php echo $_GET['materi_id']?>&video_id=<?php echo $_GET['video_id']?>"><i class="fas fa-arrow-left me-3" style="color: #303B57;"></i></a>
            </label>
            <?php 
              $r = mysqli_query($mysqli, "SELECT * FROM kuis WHERE id_kuis = '$_GET[kuis_id]'");
              $t = mysqli_fetch_array($r);
            ?>
            <span class="subtitle"><?php echo $t['judul']?></span>
            
          </div>
          <div class="col-lg-4 col-sm-12 col-12 col-md-3 mt-lg-0 mt-sm-2 mt-2 d-flex align-items-center">
            
          </div>
          <?php
            if(empty($_GET['s'])){
              ?>
              <div class="col-lg-4 col-md-2 col-sm-12 col-12  mt-lg-0 mt-sm-2 mt-2">
                <button id="habis" class="btn btn-primary-dt float-end"></button>
              </div>
              <?php
            }
          ?>
        </div>        
    </div>
    <!-- Wnd Wuiz -->