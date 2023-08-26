<?php $active_guru = 'active'; include "sidebar.php"; ?>

    <section class="home">
        <div class="card no-gutters">
          <div class="card-body">

            <label for="check">
              <a href="edit_materi.php?materi_id=<?php echo $_GET['materi_id']?>"><i class="fas fa-arrow-left"></i></a>
            </label>


            <div class="row pt-3">
              <div class="col"><input class="form-control mr-sm-2" type="search" placeholder="Cari Pelajaran" aria-label="Search" /></div>
            </div>

            <h1 class="subtitle te mt-5">Quizs</h1>
            <div class="row pb-5">

              <div class="col-12 mt-3">
                <a href="tambah_quis.php?materi_id=<?php echo $_GET['materi_id']?>">
                  <button class="btn btn-primary-dt">Tambah Quiz</button>
                </a>
              </div>

              <?php
                $sql = mysqli_query($mysqli, "SELECT * FROM kuis WHERE id_materi = '$_GET[materi_id]'");
                $row = mysqli_num_rows($sql);
                if($row < 1){
                  echo "<h5 class='mt-5 ml-3'><i>Belum Ada Quiz</i></h5>";
                }
                while($data = mysqli_fetch_array($sql)){
                  ?>
                  <div class="col-md pt-4">
                    <div class="card-2">
                      <div class="card-body">
                        <div class="card-text text-center pb-3"><?php echo $data['judul']?></div>
                        <div class="row text-center">
                          <div class="col boxicons2 semuakonten">
                            <a href="javascript:confirmDelete('editsemuaquiz.php?materi_id=<?php echo $_GET['materi_id']?>&id=<?php echo $data['id_kuis']?>&aksi=hapus')"><i class="fas fa-trash-alt putih"></i></a>
                          </div>
                          <div class="col boxicons semuakonten">
                            <a href="edit_quis_jdl.php?kuis_id=<?php echo $data['id_kuis']?>&materi_id=<?php echo $_GET['materi_id']?>"><i class="fas fa-edit putih"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php
                }
              ?>

              <!-- <div class="col-md pt-4">
                <div class="card-2">
                  <div class="card-body">
                    <div class="card-text text-center pb-3">Judul Quiz</div>
                    <div class="row text-center">
                      <div class="col boxicons2 semuakonten">
                        <i class="fas fa-trash-alt putih"></i>
                      </div>
                      <div class="col boxicons semuakonten">
                        <a href="edit _quis.html"><i class="fas fa-edit putih"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md pt-4">
                <div class="card-2">
                  <div class="card-body">
                    <div class="card-text text-center pb-3">Judul Quiz</div>
                    <div class="row text-center">
                      <div class="col boxicons2 semuakonten">
                        <i class="fas fa-trash-alt putih"></i>
                      </div>
                      <div class="col boxicons semuakonten">
                        <a href="edit _quis.html"><i class="fas fa-edit putih"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md pt-4">
                <div class="card-2">
                  <div class="card-body">
                    <div class="card-text text-center pb-3">Judul Quiz</div>
                    <div class="row text-center">
                      <div class="col boxicons2 semuakonten">
                        <i class="fas fa-trash-alt putih"></i>
                      </div>
                      <div class="col boxicons semuakonten">
                        <a href="edit _quis.html"><i class="fas fa-edit putih"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md pt-4">
                <div class="card-2">
                  <div class="card-body">
                    <div class="card-text text-center pb-3">Judul Quiz</div>
                    <div class="row text-center">
                      <div class="col boxicons2 semuakonten">
                        <i class="fas fa-trash-alt putih"></i>
                      </div>
                      <div class="col boxicons semuakonten">
                        <a href="edit _quis.html"><i class="fas fa-edit putih"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md pt-4">
                <div class="card-2">
                  <div class="card-body">
                    <div class="card-text text-center pb-3">Judul Quiz</div>
                    <div class="row text-center">
                      <div class="col boxicons2 semuakonten">
                        <i class="fas fa-trash-alt putih"></i>
                      </div>
                      <div class="col boxicons semuakonten">
                        <a href="edit _quis.html"><i class="fas fa-edit putih"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md pt-4">
                <div class="card-2">
                  <div class="card-body">
                    <div class="card-text text-center pb-3">Judul Quiz</div>
                    <div class="row text-center">
                      <div class="col boxicons2 semuakonten">
                        <i class="fas fa-trash-alt putih"></i>
                      </div>
                      <div class="col boxicons semuakonten">
                        <a href="edit _quis.html"><i class="fas fa-edit putih"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->





            </div>
          </div>
        </div>
      </div>
      <script>
        function confirmDelete(delurl){
          if(confirm("Yakin Akan Hapus Quiz ?")){
            window.location.href = delurl;
          }
        }
      </script>
      <?php 
        if(isset($_GET['aksi']) && $_GET['aksi'] == 'hapus'){
          $del = mysqli_query($mysqli, "DELETE FROM detail_kuis WHERE id_kuis = '$_GET[id]'");
          $sql = mysqli_query($mysqli, "DELETE FROM kuis WHERE id_kuis = '$_GET[id]'");
          if($sql){
            header("location:editsemuaquiz.php?materi_id=".$_GET['materi_id']);
          }else{
            ?>
            <script>
              alert("Gagal Hapus Data");
              window.location.href = "editsemuaquiz.php?materi_id=<?php echo $_GET['materi_id']?>";
            </script>
            <?php
          }
        }
      ?>
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
