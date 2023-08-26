<?php $active_siswa = 'active'; include 'sidebar.php'; ?>

    <section class="home">
      <div class="row no-gutters">
        <div class="card">
          <div class="card-body">

            <label for="check">
                <a href="siswa.php"><i class="fas fa-arrow-left"></i></a>
              </label>
            
            <div class="row pt-3">  
              <div class="col-12 col-md-3 col-sm-12">
                <h4 class="subtitle">Hi <?php echo $_SESSION['nama_siswa']?></h4>
                <p>Mau belajar apa hari ini ?</p>
              </div>
              <div class="col"><input style="border-radius: 20px;" class="form-control mr-sm-2" type="search" placeholder="Cari Pelajaran" aria-label="Search" /></div>
            </div>
            <div class="row pb-1 mt-3">
              <div class="col-12"><button class="btn btn-primary-dt btn-block btn-md">bank soal</button></div>
            </div>
            <?php
              $sql = mysqli_query($mysqli, "SELECT * FROM bab WHERE id_mapel = '$_GET[mapel_id]' AND id_kelas = '$_SESSION[kelas]'");
              while($array = mysqli_fetch_array($sql)){
                ?>
                  <div>
              <h1 class="subtitle mt-5"><?php echo $array['nama_bab']?></h1>

              <div class="row">
                  <?php
                  $no = 0;
                    $ssql = mysqli_query($mysqli, "SELECT * FROM materi WHERE id_bab = '$array[id_bab]'");
                    while($aray = mysqli_fetch_array($ssql)){
                      $no++;
                      ?>
                        <div class="col-md-3 col-lg-2 col-sm-12 col-12 pt-3">
                          <div class="card-2">
                            <div class="card-body">
                              <img src="img/iconmateri/icon_materi (1).png" class="img-fluid" alt="..." />
                              <?php
                                if($no >= 2 && $_SESSION['status_member'] == 'Mati'){
                                  ?>
                                  <a href="#" data-toggle="modal" data-target="#staticBackdrop" class="text-decoration-none">
                                    <p class="card-text"><?php echo $aray['judul'] ?></p>
                                  </a>
                                  <button class="btn btn-danger btn-sm btn-block mt-1" data-toggle="modal" data-target="#staticBackdrop">Locked</button>
                                  <?php
                                }else{
                                  ?>
                                  <a href="Ruangbelajar.php?mapel_id=<?php echo $_GET['mapel_id'] ?>&materi_id=<?php echo $aray['id_materi']?>" class="text-decoration-none">
                                    <p class="card-text"><?php echo $aray['judul'] ?></p>
                                  </a>
                                  <?php
                                }
                              ?>                       
                              <div class="row pt-3">
                                <div class="col-6 pt-0">
                                  <?php 
                                    $select = mysqli_query($mysqli, "SELECT * FROM kuis WHERE id_materi = '$aray[id_materi]'");
                                    $row = mysqli_num_rows($select);
                                  ?>
                                  <span class="body-text-card"><?php echo $row; ?> Quiz</span>
                                </div>
                                  <?php 
                                    $s = mysqli_query($mysqli, "SELECT * FROM video WHERE id_materi = '$aray[id_materi]'");
                                    $ro = mysqli_num_rows($s);
                                  ?>
                                <div class="col-6 pt-0">
                                  <span class="body-text-card"><?php echo $ro; ?> Video</span>
                                </div>
                                  <?php 
                                    $sr = mysqli_query($mysqli, "SELECT * FROM isi_materi WHERE id_materi = '$aray[id_materi]'");
                                    $ror = mysqli_num_rows($sr);
                                  ?>
                                <div class="col-12 pt-2">
                                  <span class="body-text-card"><?php echo $ror; ?> Penjelasan</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      <?php
                    }
                  ?>
                   
              </div>
            </div>
                <?php
              }
              $cek = mysqli_num_rows($sql);
              if($cek == 0){
                echo "<div class='alert alert-warning text-center mt-4'><i>Belum Ada Materi</i></div>";
              }
            ?>
            

            
            

          </div>
        </div>
      </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title text-danger" id="staticBackdropLabel">Terkunci</h5>
                              <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <div class="container-fluid">
                                <div class="row">
                                  <div class="col-lg-12 text-center">
                                    <img src="img/iconmateri/img-bayar.png" alt="">
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div><hr></div>
                            <div class="text-center pb-4 pt-3">
                              <a href="../paketharga/hargapaket.php">
                            <button class="btn btn-primary-dt">Langganan Sekarang</button></a>
                            </div>
                          </div>
                        </div>
                      </div>
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
