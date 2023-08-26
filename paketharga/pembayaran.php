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
    <link rel="stylesheet" href="css_harga/style.css" />

    <title>Ruang Belajar</title>
  </head>
  <body>
    <?php
      
      if(isset($_POST['gas'])){
        $nama = $_FILES['gambar']['name'];
        $type = $_FILES['gambar']['type'];
        $tmp = $_FILES['gambar']['tmp_name'];
        $path = "../admin/bukti_bayar/".$nama;
        move_uploaded_file($tmp, $path);
        $sql = mysqli_query($mysqli, "UPDATE siswa SET id_member = '$_GET[member_id]', bukti_pembayaran = '$nama' WHERE id_siswa = '$_SESSION[id_siswa]'");
        if($sql){
          header("location:../siswa/udahbayar.php");
        }else{
          ?>
          <script>
            alert("Gagal, Coba Lagi Nanti ..");
            window.location.href = "pembayaran.php";
          </script>
          <?php
        }
      }
    ?>
    <div class="container">
          <div class="row mx-3 py-3">
            <div class="col-lg-4 offset-lg-4 col-12  bg-primary py-2 rounded text-center">
              <p class="body-text text-white">BCA SYARIAH</p>
              <img src="img/atm/bcasyariah.png" class="bg-white p-3 img-fluid rounded" alt="">
              <p class="subtitle text-white mt-3">8r329084908</p>
            </div>
          </div>
          <form action="" method="POST" enctype="multipart/form-data">
          <div class="row mx-3">
            <div class="col-lg-4 offset-lg-4 col-12  py-2">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"  id="inputGroupFileAddon01">Upload Bukti</span>
                </div>
                <div class="custom-file">
                  <input type="file" accept="image/*" name="gambar" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                  <label class="custom-file-label"  for="inputGroupFile01">Choose file</label>
                </div>
              </div>
              <button type="submit" name="gas" class="btn btn-primary btn-block btn-lg">Gas Bayar</button>
          </div>
          </form>
    </div>

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