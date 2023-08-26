<?php $active_guru = 'active'; include "sidebar.php"; ?>

    <section class="home">
      <div class="row no-gutters">
        <div class="card">
          <div class="card-body">
            <label for="check">

              <a href="<?php
                        if(empty($_GET['judul']) && empty($_GET['bab_id'])){
                          ?>
                          editsemuapenjelasan.php?materi_id=<?php echo $_GET['materi_id']?>
                          <?php
                        }else{
                          ?>
                          tambah_materi.php?judul=<?php echo $_GET['judul']?>&bab_id=<?php echo $_GET['bab_id'] ?>
                          <?php
                        }
                      ?>"><i class="fas fa-arrow-left"></i></a>
            </label>

            <?php 
                if(empty($_GET['materi_id'])){
                  header("location:tambahmateri.php");
                }
                if(isset($_POST['save'])){
                    $materi = $_GET['materi_id'];
                    $judul = $_POST['judul'];
                    $penjelasan = $_POST['penjelasan'];

                    $namafile = $_FILES['text']['name'];
                    $tipe_file = $_FILES['text']['type'];
                    $tmp = $_FILES['text']['tmp_name'];
                    $folder = "file_materi/".$namafile;
                  
                    if($tipe_file != "application/msword" && $tipe_file != "application/pdf"){
                      ?>
                      <div class="alert alert-warning">Mohon Masukkan File pdf/word ...</div>
                      <?php
                    }else{
                      move_uploaded_file($tmp, $folder);

                      $sql = mysqli_query($mysqli, "INSERT INTO isi_materi (id_materi, judul, isi_materi, penjelasan) VALUES ('$materi', '$judul', '$namafile', '$penjelasan')");
                      if($sql){
                          ?>
                          <div class="alert alert-success">Tambah Penjelasan Berhasil</div>
                          <?php
                      }else{
                          ?>
                          <div class="alert alert-danger">Gagal Menambah Data</div>
                          <?php
                      }
                    }
                }
              ?>

            
            <!-- muncul jika sudah submit -->

            <div class="card-title">
              <h1 class="subtitle">Tambah Penjelasan</h1>
            </div>
            <div class="row">
              <div class="col">
                <form action="" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Judul</label>
                    <input type="text" required name="judul" required placeholder="Judul Penjelasan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
                  </div>
                  <div class="form-group">
                    <label >Upload Materi PDF/WORD</label><br>
                    <input type="file" name="text" placeholder="File" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Penjelasan</label>
                    <textarea class="form-control" name="penjelasan" id="exampleFormControlTextarea1" rows="3" required></textarea>
                  </div>
                  <button type="submit" name="save" class="btn btn-primary-dt">Submit</button>
                  <a href="<?php
                        if(empty($_GET['judul']) && empty($_GET['bab_id'])){
                          ?>
                          editsemuapenjelasan.php?materi_id=<?php echo $_GET['materi_id']?>
                          <?php
                        }else{
                          ?>
                          tambah_materi.php?judul=<?php echo $_GET['judul']?>&bab_id=<?php echo $_GET['bab_id'] ?>
                          <?php
                        }
                      ?>"><button type="button" class="btn btn-sukses ml-1">Kembali</button> </a> 
                  <!-- btn sukses muncul jika sudah submit -->
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script>
      if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
