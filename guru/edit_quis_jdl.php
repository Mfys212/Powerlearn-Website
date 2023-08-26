<?php $active_guru = 'active'; include 'sidebar.php'; ?>
    <section class="home">
      <div class="row no-gutters">
        <div class="card">
          <div class="card-body">

            <label for="check">
              <a href="editsemuaquiz.php?materi_id=<?php echo $_GET['materi_id']?>"><i class="fas fa-arrow-left"></i></a>
            </label>

            <?php
              if(isset($_POST['save'])){
                $judul = $_POST['judul'];
                $waktu = $_POST['waktu'];
                $random = $_POST['rn'];
                $tampil = $_POST['tampil'];
                $sql = mysqli_query($mysqli, "UPDATE kuis SET judul = '$judul', waktu = '$waktu', random = '$random', tampil = '$tampil' WHERE id_kuis = '$_GET[kuis_id]'");
                if($sql){
                  ?>
                  <div class="alert alert-success">Sukses Edit Quiz</div>
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
                $sql = mysqli_query($mysqli, "SELECT * FROM kuis WHERE id_kuis = '$_GET[kuis_id]'");
                $data = mysqli_fetch_array($sql);
              ?>
            <div class="card-title">
              <h1 class="subtitle">Edit Quiz</h1>
            </div>
            <div class="row">
              <div class="col">
                <form action="" method="POST">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Judul Quiz</label>
                    <input type="text" name="judul" required class="form-control" value="<?php echo $data['judul']?>" id="exampleInputEmail1" aria-describedby="emailHelp" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Waktu (Menit)</label>
                    <input type="number" name="waktu" required class="form-control" value="<?php echo $data['waktu']?>" id="exampleInputEmail1" aria-describedby="emailHelp" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kuis di Tampilkan</label>
                    <select name="tampil" id="tampil" class="form-control">
                      <?php
                        if($data['tampil'] == 0 or $data['tampil'] == ''){
                          $d = 1;
                          ?>
                          <option value="<?php echo $d; ?>"selected>1</option>
                          <?php
                        }else{
                          ?>
                          <option value="<?php echo $data['tampil']?>"><?php echo $data['tampil']?></option>
                          <?php
                        }
                        if($data['tampil'] == 0 or $data['tampil'] == ''){
                          for($i=2; $i<6; $i++){
                            ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php
                          }
                        }elseif($data['tampil'] == 1){
                          for($i=2; $i<6; $i++){
                            ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php
                          }
                        }elseif($data['tampil'] == 2){
                          $f = 1;
                          ?>
                          <option value="<?php echo $f;?>"><?php echo $f; ?></option>
                          <?php
                          for($i=3; $i<6; $i++){
                            ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php
                          }
                        }elseif($data['tampil'] == 3){
                          $f = 1;
                          $hy = 2;
                          ?>
                           <option value="<?php echo $f; ?>"><?php echo $f; ?></option>
                           <option value="<?php echo $hy; ?>"><?php echo $hy; ?></option>
                          <?php
                          for($i=4; $i<6; $i++){
                            ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php
                          }
                        }elseif($data['tampil'] == 4){
                          for($i=1; $i<4; $i++){
                            ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php
                          }
                          $f = 5;
                          ?>
                           <option value="<?php echo $f; ?>"><?php echo $f; ?></option>
                          <?php
                        }elseif($data['tampil'] == 5){
                          for($i=1; $i<5; $i++){
                            ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php
                          }
                        }
                      ?>
                    </select>
                  </div>
                  <label for="">Random</label>
                      <div class="form-group">
                        <input type="radio" <?php if($data['random'] == 'Ya' ){echo 'checked';} ?> name="rn" placeholder="" class="" id="waktu" value="Ya" aria-describedby="emailHelp" required/>
                        <label for="judul">Ya</label>
                      </div>
                      <div class="form-group">          
                        <input type="radio" <?php if($data['random'] == 'Tidak' ){echo 'checked';} ?> name="rn" placeholder="" class="" id="waktu" value="Tidak" aria-describedby="emailHelp" required/>
                        <label for="judul">Tidak</label>
                    </div>

                  <button type="submit" name="save" class="btn btn-primary-dt">Submit</button>
                  <a href="edit_quis.php?materi_id=<?php echo $_GET['materi_id']?>&kuis_id=<?php echo $_GET['kuis_id']?>"><button type="button" class="btn btn-sukses ml-1">Edit Quiz</button>  </a>
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
