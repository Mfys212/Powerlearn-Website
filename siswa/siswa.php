<?php $active_siswa = 'active'; include "sidebar.php"; ?>

    <section class="home">
      <div class="row no-gutters">
        <div class="card">
          <div class="card-body">

            
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
            <div class="row">
              <?php 
                $sql = mysqli_query($mysqli, "SELECT * FROM mapel");
                while($data = mysqli_fetch_array($sql)){
                  ?>
                    <div class="col-md-3 col-lg-2 col-sm-12 col-12 pt-5">
                      <div class="card-2">
                        <div class="card-body">
                          <?php
                            if($data['nama_mapel'] == 'Matematika'){
                              ?>
                              <img src="img/card_pelajaran/mtk.svg" class="img-fluid" alt="..." />
                              <?php
                            }elseif($data['nama_mapel'] == 'Bahasa Indonesia'){
                              ?>
                              <img src="img/card_pelajaran/indo.svg" class="img-fluid" alt="..." />
                              <?php
                            }elseif($data['nama_mapel'] == 'Bahasa Inggris'){
                              ?>
                              <img src="img/card_pelajaran/inggris.svg" class="img-fluid" alt="..." />
                              <?php
                            }else{
                              ?>
                              <img src="img/card_pelajaran/ipa.svg" class="img-fluid" alt="..." />
                              <?php
                            }
                          ?>
                          <a href="materi_detail.php?mapel_id=<?php echo $data['id_mapel']?>" class="text-decoration-none">
                            <p class="card-text"><?php echo $data['nama_mapel']; ?></p>
                          </a>   
                          <?php
                            $drt = mysqli_query($mysqli, "SELECT * FROM bab WHERE id_mapel = '$data[id_mapel]' AND id_kelas = '$_SESSION[kelas]'");
                            $trd = mysqli_num_rows($drt);
                            $gh = mysqli_fetch_array($drt);
                          ?>              
                          <div class="row pt-2">
                            <div class="col-6 pt-0">
                              <span class="body-text-card"><?php echo $trd; ?> Bab</span>
                            </div>
                            
                            <div class="col-6 pt-0">
                              <span class="body-text-card">1 Materi</span>
                            </div>
                            <div class="col-12 pt-2">
                              <span class="body-text-card">200 Soal Latihan</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php
                }
              ?>
              

              <!-- <div class="col-md-3 col-lg-2 col-sm-12 col-12 pt-5">
                <div class="card-2">
                  <div class="card-body">
                    <img src="img/card_pelajaran/indo.svg" class="img-fluid" alt="..." />
                    <a href="materi_detail.html" class="text-decoration-none">
                      <p class="card-text">Bhs Indonesia</p>
                    </a>
                    <div class="row pt-2">
                      <div class="col-6 pt-0">
                        <span class="body-text-card">8 Bab</span>
                      </div>
                      <div class="col-6 pt-0">
                        <span class="body-text-card">9 Video</span>
                      </div>
                      <div class="col-12 pt-2">
                        <span class="body-text-card">200 Soal Latihan</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-3 col-lg-2 col-sm-12 col-12 pt-5">
                <div class="card-2">
                  <div class="card-body">
                    <img src="img/card_pelajaran/ipa.svg" class="img-fluid" alt="..." />
                    <a href="materi_detail.html" class="text-decoration-none">
                      <p class="card-text">IPA</p>
                    </a>           
                    <div class="row pt-2">
                      <div class="col-6 pt-0">
                        <span class="body-text-card">8 Bab</span>
                      </div>
                      <div class="col-6 pt-0">
                        <span class="body-text-card">9 Video</span>
                      </div>
                      <div class="col-12 pt-2">
                        <span class="body-text-card">200 Soal Latihan</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-3 col-lg-2 col-sm-12 col-12 pt-5">
                <div class="card-2">
                  <div class="card-body">
                    <img src="img/card_pelajaran/inggris.svg" class="img-fluid" alt="..." />
                    <a href="materi_detail.html" class="text-decoration-none">
                      <p class="card-text">Bahasa Inggris</p>
                    </a>
                    <div class="row pt-2">
                      <div class="col-6 pt-0">
                        <span class="body-text-card">8 Bab</span>
                      </div>
                      <div class="col-6 pt-0">
                        <span class="body-text-card">9 Video</span>
                      </div>
                      <div class="col-12 pt-2">
                        <span class="body-text-card">200 Soal Latihan</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-3 col-lg-2 col-sm-12 col-12 pt-5">
                <div class="card-2">
                  <div class="card-body">
                    <img src="img/card_pelajaran/penjas.svg" class="img-fluid" alt="..." />
                    <a href="materi_detail.html" class="text-decoration-none">
                      <p class="card-text">Penjaskes</p>
                    </a>                 
                    <div class="row pt-2">
                      <div class="col-6 pt-0">
                        <span class="body-text-card">8 Bab</span>
                      </div>
                      <div class="col-6 pt-0">
                        <span class="body-text-card">9 Video</span>
                      </div>
                      <div class="col-12 pt-2">
                        <span class="body-text-card">200 Soal Latihan</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-3 col-lg-2 col-sm-12 col-12 pt-5">
                <div class="card-2">
                  <div class="card-body">
                    <img src="img/card_pelajaran/mtk.svg" class="img-fluid" alt="..." />
                    <a href="materi_detail.html" class="text-decoration-none">
                      <p class="card-text">Matematika</p>
  
                    </a>                  
                    <div class="row pt-2">
                      <div class="col-6 pt-0">
                        <span class="body-text-card">8 Bab</span>
                      </div>
                      <div class="col-6 pt-0">
                        <span class="body-text-card">9 Video</span>
                      </div>
                      <div class="col-12 pt-2">
                        <span class="body-text-card">200 Soal Latihan</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
              

            
            </div>
          </div>
        </div>
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
