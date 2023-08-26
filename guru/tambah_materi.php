<?php $active_guru = 'active'; include 'sidebar.php'; ?>

    <section class="home">
      <div class="row  no-gutters">
        <div class="card">
          <div class="card-body">

            <label for="check">
              <a href="guru.php"><i class="fas fa-arrow-left"></i></a>
            </label>
            <?php 
                if(isset($_POST['save'])){
                    $bab = $_POST['bab'];
                    $judul = $_POST['judul'];
                    
                    $sqli = mysqli_query($mysqli, "SELECT * FROM materi WHERE id_bab = '$bab' AND judul = '$judul'");
                    $ray = mysqli_fetch_array($sqli);

                    if($ray > 0){
                      ?>
                      <div class="alert alert-warning">Judul Ini Sudah Ada Pada Materi !</div>
                      <?php
                    }else{
                      $sql = mysqli_query($mysqli, "INSERT INTO materi (id_bab, judul) VALUES ('$bab', '$judul')");
                      if($sql){
                          header("location:tambah_materi.php?judul=".$judul."&bab_id=".$bab);
                      }else{
                          ?>
                          <div class="alert alert-danger">Gagal Menambah Data</div>
                          <?php
                      }
                    }

                    
                }
                if(isset($_GET['judul']) && isset($_GET['bab_id'])){
                  ?>
                  <div class="alert alert-success">Sukses Menambah Materi (Silahkan Isi Materi dibawah)</div>
                  <?php
                }
            ?>
            

            <div class="card-title">
              <h1 class="subtitle">Tambah Materi</h1>
            </div>
            <div class="row no-gutters">
              <div class="col">
                <form action="" method="POST">
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Pilih Bab</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="bab">
                      <option value="" selected disabled>Pilih</option>
                      <?php
                        $sql =mysqli_query($mysqli, "SELECT * FROM bab WHERE id_mapel = '$_SESSION[id_mapel]'");
                        while($array = mysqli_fetch_array($sql)){
                          ?>
                          <option value="<?php echo $array['id_bab']?>"><?php echo $array['nama_bab']; ?></option>
                          <?php
                        }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Judul Materi</label>
                    <input type="text" name="judul" placeholder="Judul Materi" class="form-control" id="exampleInputPassword1" />
                  </div>
                  <button type="submit" name="save" class="btn btn-primary-dt">Submit</button>
                  <!-- <button type="submit" class="btn btn-sukses ml-1">Isi Materi</button>   -->
                  <!-- btn sukses muncul jika sudah submit -->

                </form>
              </div>
            </div>
          </div>
        </div>
        <?php
          if(isset($_GET['judul']) && isset($_GET['bab_id'])){
            ?>
            <?php
              $sol = mysqli_query($mysqli, "SELECT * FROM materi WHERE id_bab = '$_GET[bab_id]' AND judul = '$_GET[judul]' ");
              $rei = mysqli_fetch_array($sol);
            ?>
            <div class="card mt-3">
              <div class="body-card">
                <div class="row no-gutters pt-5 text-center">
                  <div class="col-12 col-sm-12 col-md-4 pt-2"><a href="tambah_vidio.php?materi_id=<?php echo $rei['id_materi']?>&bab_id=<?php echo $_GET['bab_id']?>&judul=<?php echo $_GET['judul'] ?>"><button class="btn btn-primary-tm">Tambah Video</button></a></div>
                  <div class="col-12 col-sm-12 col-md-4 pt-2"><a href="tambah_Penjelasan.php?materi_id=<?php echo $rei['id_materi']?>&bab_id=<?php echo $_GET['bab_id']?>&judul=<?php echo $_GET['judul'] ?>"><button class="btn btn-primary-tm">Tambah Penjelasan</button></a></div>
                  <div class="col-12 col-sm-12 col-md-4 pt-2"><a href="tambah_quis.php?materi_id=<?php echo $rei['id_materi']?>&bab_id=<?php echo $_GET['bab_id']?>&judul=<?php echo $_GET['judul'] ?>"><button class="btn btn-primary-tm">Tambah Quis</button></a></div>
                </div>
                <!-- <div class="row no-gutters pt-5 text-center">
                  <div class="col-12 col-sm-12 col-md-4 pt-2"><button type="button" class="btn btn-primary-o-tm">Lihat Semua Vidio</button></div>
                  <div class="col-12 col-sm-12 col-md-4 pt-2"><button type="button" class="btn btn-primary-o-tm">Lihat Semua Penjelasan</button></div>
                  <div class="col-12 col-sm-12 col-md-4 pt-2"><button type="button" class="btn btn-primary-o-tm">Lihat Semua Quiz</button></div>
                </div> -->
                <div class="row no-gutters pt-5 pb-5 text-center">
                  <div class="col">
                    <a href="guru.php"><button type="button" class="btn btn-primary-dt">Kembali</button></a>
                  </div>
                </div>
              </div>
            </div>  
            <?php
          }
        ?>
        
      </div>
    </section>

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
