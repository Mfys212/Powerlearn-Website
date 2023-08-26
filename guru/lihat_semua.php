<?php $active_guru = 'active'; include 'sidebar.php'; ?>

    <section class="home">
      <div class="row no-gutters">
        <div class="card">
          <div class="card-body">

            <label for="check">
              <a href="guru.php"><i class="fas fa-arrow-left"></i></a>
            </label>

            <div class="row pt-3">
              <div class="col"><input class="form-control mr-sm-2" type="search" placeholder="Cari Pelajaran" aria-label="Search" /></div>
            </div>

            <div class="row pb-5 pt-5">
              <div class="col-12"><button class="btn btn-primary-dt btn-md btn-block">bank soal</button></div>
            </div>

            <!-- oi -->
            <?php
              $sql = mysqli_query($mysqli, "SELECT * FROM bab WHERE id_mapel = '$_SESSION[id_mapel]'");
              while($array = mysqli_fetch_array($sql)){
                ?>
                  <div>
                    <h1 class="subtitle te"><?php echo $array['nama_bab']?></h1>
                    <div class="row pb-5">
        
                      <?php
                        $sqli = mysqli_query($mysqli, "SELECT * FROM materi WHERE id_bab = '$array[id_bab]'");
                        while($arrayi =mysqli_fetch_array($sqli)){
                          ?>
                          <div class="col-lg-2 col-md-3 col-sm-6 pt-5">
                            <div class="card-2">
                              <div class="card-body">
                                <img src="img/iconmateri/icon_materi (1).png" />
                                <a href="edit_materi.php?materi_id=<?php echo $arrayi['id_materi']?>"><p class="card-text text-white"><?php echo $arrayi['judul']?></p></a>
                                
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
            ?>
            
            <!-- io -->

             <!-- oi -->
             <!-- <div>
              <h1 class="subtitle te">Bab 1 Matematika Dasar</h1>
              <div class="row pb-5">
  
                <div class="col-lg-2 col-md-3 col-sm-6 pt-5">
                  <div class="card-2">
                    <div class="card-body">
                      <img src="img/iconmateri/icon_materi (1).png" />
                      <a href="edit_materi.html"><p class="card-text text-white">Bilangan Prima</p></a>
                    </div>
                  </div>
                </div>
              
  
                <div class="col-lg-2 col-md-3 col-sm-6 col-12 pt-5">
                  <div class="card-2">
                    <div class="card-body">
                      <img src="img/iconmateri/icon_materi (1).png" />
                      <a href="edit_materi.html"><p class="card-text text-white">Bilangan Prima</p></a>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
            <!-- io -->


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
