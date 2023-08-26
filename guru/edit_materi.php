<?php $active_guru = 'active'; include "sidebar.php"; ?>

    <section class="home">
      <div class="row no-gutters">
        <div class="card">
          <div class="card-body">

            <label for="check">
              <a href="lihat_semua.php"><i class="fas fa-arrow-left"></i></a>
            </label>
            <?php 
              if(isset($_POST['save'])){
                $sqli = mysqli_query($mysqli, "UPDATE materi SET judul = '$_POST[judul]' WHERE id_materi = '$_GET[materi_id]'");
                if($sqli){
                  ?>
                    <div class="alert alert-success">Sukses Edit Materi</div>
                  <?php
                }else{
                  ?>
                    <div class="alert alert-danger">Gagal Edit Data</div>
                  <?php
                }
              }
            ?>
            
            <!-- muncul jika sudah submit -->
            <?php
                $sql = mysqli_query($mysqli, "SELECT * FROM materi WHERE id_materi = '$_GET[materi_id]'");
                $data = mysqli_fetch_array($sql);
            ?>
            <div class="card-title">
              <h1 class="subtitle">Edit Materi</h1>
            </div>
            <div class="row">
              <div class="col">
                <form action="" method="POST">
                  <div class="form-group">
                    <label for="judul">Judul Materi</label>
                    <input type="text" class="form-control" name="judul" id="judul" value="<?php echo $data['judul']?>" />
                  </div>
                  <button type="submit" name="save" class="btn btn-primary-dt">Perbarui</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="card mt-3">
          <div class="body-card"> 
            <div class="row no-gutters pt-5 text-center">
              <div class="col-12 col-sm-12 col-md-4 pt-2"><a href="Edit_video.php?materi_id=<?php echo $_GET['materi_id']?>"><button type="button" class="btn btn-primary-o-tm">Edit Video</button></a></div>
              <div class="col-12 col-sm-12 col-md-4 pt-2"><a href="editsemuapenjelasan.php?materi_id=<?php echo $_GET['materi_id']?>"><button type="button" class="btn btn-primary-o-tm">Edit Penjelasan</button></a></div>
              <div class="col-12 col-sm-12 col-md-4 pt-2"><a href="editsemuaquiz.php?materi_id=<?php echo $_GET['materi_id']?>"><button type="button" class="btn btn-primary-o-tm">Edit Quiz</button></a></div>
            </div>
            <div class="row no-gutters pt-5 pb-5 text-center">
              <div class="col">
                <a href="lihat_semua.php"><button type="submit" class="btn btn-primary-dt">Kembali</button></a>
                <!-- <button type="submit" class="btn btn-sukses ml-1">Isi Materi</button>   -->
                <!-- btn sukses muncul jika sudah submit -->
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
