<?php $active_guru = 'active'; include 'sidebar.php'; ?>
    <section class="home">
      <div class="row no-gutters">
        <div class="card">
          <div class="card-body">

            <label for="check">
              <a href="guru.php"><i class="fas fa-arrow-left"></i></a>
            </label>

            <?php
              if(isset($_POST['save'])){
                $judul = $_POST['judul'];
                $kelas = $_POST['kelas'];
                $sql = mysqli_query($mysqli, "INSERT INTO bab (id_mapel, id_kelas, nama_bab) VALUES ('$_SESSION[id_mapel]', '$kelas', '$judul')");
                if($sql){
                  ?>
                  <div class="alert alert-success">Sukses Menambah Data (Silahkan Kembali dan Isi Materi)</div>
                  <?php
                }else{
                  ?>
                  <div class="alert alert-danger">Gagal Menambah Data</div>
                  <?php
                }
              }
            ?>
            <!-- muncul jika sudah submit -->

            <div class="card-title">
              <h1 class="subtitle">Tambah Bab</h1>
            </div>
            <div class="row">
              <div class="col">
                <form action="" method="POST">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Judul Bab</label>
                    <input type="text" name="judul" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
                  </div>

                  <div class="form-group">
                    <label >Kelas</label>
                    <select name="kelas" id="kelas" class="form-control" required>
                      <option value="" disabled selected>Pilih</option>
                        <?php
                          $sql = mysqli_query($mysqli, "SELECT * FROM kelas");
                          while($array = mysqli_fetch_array($sql)){
                            ?>
                            <option value="<?php echo $array['id_kelas']?>"><?php echo $array['kelas']?></option>
                            <?php
                          }
                        ?>
                    </select>
                  </div>

                  <button type="submit" name="save" class="btn btn-primary-dt">Submit</button>
                  <a href="guru.php"><button type="button" class="btn btn-sukses ml-1">Kembali</button>  </a>
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
