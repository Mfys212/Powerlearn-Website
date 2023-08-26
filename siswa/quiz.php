<?php $grt; include "header_quiz.php"; ?>

    <!-- Soal Quiz -->
    <form action="cek.php" method="POST">
   <?php
   $no = 0;
      if($_GET['random'] == 'Ya'){
        if($_GET['limit'] == 1){
          $sl = mysqli_query($mysqli, "SELECT * FROM detail_kuis WHERE id_kuis = '$_GET[kuis_id]' ORDER BY RAND() LIMIT 1");
        }elseif($_GET['limit'] == 2){
          $sl = mysqli_query($mysqli, "SELECT * FROM detail_kuis WHERE id_kuis = '$_GET[kuis_id]' ORDER BY RAND() LIMIT 2");
        }elseif($_GET['limit'] == 3){
          $sl = mysqli_query($mysqli, "SELECT * FROM detail_kuis WHERE id_kuis = '$_GET[kuis_id]' ORDER BY RAND() LIMIT 3");
        }elseif($_GET['limit'] == 4){
          $sl = mysqli_query($mysqli, "SELECT * FROM detail_kuis WHERE id_kuis = '$_GET[kuis_id]' ORDER BY RAND() LIMIT 4");
        }elseif($_GET['limit'] == 5){
          $sl = mysqli_query($mysqli, "SELECT * FROM detail_kuis WHERE id_kuis = '$_GET[kuis_id]' ORDER BY RAND() LIMIT 5");
        }
      }else{
        if($_GET['limit'] == 1){
          $sl = mysqli_query($mysqli, "SELECT * FROM detail_kuis WHERE id_kuis = '$_GET[kuis_id]' LIMIT 1");
        }elseif($_GET['limit'] == 2){
          $sl = mysqli_query($mysqli, "SELECT * FROM detail_kuis WHERE id_kuis = '$_GET[kuis_id]' LIMIT 2");
        }elseif($_GET['limit'] == 3){
          $sl = mysqli_query($mysqli, "SELECT * FROM detail_kuis WHERE id_kuis = '$_GET[kuis_id]' LIMIT 3");
        }elseif($_GET['limit'] == 4){
          $sl = mysqli_query($mysqli, "SELECT * FROM detail_kuis WHERE id_kuis = '$_GET[kuis_id]' LIMIT 4");
        }elseif($_GET['limit'] == 5){
          $sl = mysqli_query($mysqli, "SELECT * FROM detail_kuis WHERE id_kuis = '$_GET[kuis_id]' LIMIT 5");
        }
      }
      while($ls = mysqli_fetch_array($sl)){
        $no++
        ?>
         <div class="container-fluid py-3" id="<?php if($no == 1){echo 'soal1';}elseif($no == 2){echo 'soal2';}elseif($no == 3){echo 'soal3';}elseif($no == 4){echo 'soal4';}elseif($no == 5){echo 'soal5';} ?>">
      <div class="row nap bg-white d-flex mt-3 mx-3 p-3 " style="border-radius: 20px;">
        <div class="col-lg-12 col-12">
          <div class="angkasoal py-3 d-flex">
            
            <div class="me-2 py-3">
              <a href="#soal1" class="text-decoration-none">
                <?php 
                  if($no == 1){
                    ?>
                    <span class="bg-primary px-3 py-2 me-2 rounded-pill text-white">1</span>
                    <?php
                  }else{
                    ?>
                    <span style="background-color:#e2f8ff;" class="px-3 py-2 pb-lg-2 pb-sm-2 mt-5 me-lg-2 rounded-pill text-dark">1</span>
                    <?php
                  }
                ?>
              </a>
            </div>

            <div class="me-2 py-3">
              <a href="#soal2" class="text-decoration-none">
              <?php 
                  if($no == 2){
                    ?>
                    <span class="bg-primary px-3 py-2 me-2 rounded-pill text-white">2</span>
                    <?php
                  }else{
                    ?>
                    <span style="background-color:#e2f8ff;" class="px-3 py-2 pb-lg-2 pb-sm-2 mt-5 me-lg-2 rounded-pill text-dark">2</span>
                    <?php
                  }
                ?>
                
              </a>
            </div>

            <div class="me-2 py-3">
              <a href="#soal3" class="text-decoration-none">
              <?php 
                  if($no == 3){
                    ?>
                    <span class="bg-primary px-3 py-2 me-2 rounded-pill text-white">3</span>
                    <?php
                  }else{
                    ?>
                    <span style="background-color:#e2f8ff;" class="px-3 py-2 pb-lg-2 pb-sm-2 mt-5 me-lg-2 rounded-pill text-dark">3</span>
                    <?php
                  }
                ?>
              </a>
            </div>

            <div class="me-2 py-3">
              <a href="#soal4" class="text-decoration-none">
              <?php 
                  if($no == 4){
                    ?>
                    <span class="bg-primary px-3 py-2 me-2 rounded-pill text-white">4</span>
                    <?php
                  }else{
                    ?>
                    <span style="background-color:#e2f8ff;" class="px-3 py-2 pb-lg-2 pb-sm-2 mt-5 me-lg-2 rounded-pill text-dark">4</span>
                    <?php
                  }
                ?>
              </a>
            </div>

            <div class="me-2 py-3">
              <a href="#soal5" class="text-decoration-none">
              <?php 
                  if($no == 5){
                    ?>
                    <span class="bg-primary px-3 py-2 me-2 rounded-pill text-white">5</span>
                    <?php
                  }else{
                    ?>
                    <span style="background-color:#e2f8ff;" class="px-3 py-2 pb-lg-2 pb-sm-2 mt-5 me-lg-2 rounded-pill text-dark">5</span>
                    <?php
                  }
                ?>
              </a>
            </div>

          </div>
        </div>
        
        <div class="col-lg-6">
          <div class="soal pt-3 pb-3">
            <span class="sub-title">
              <?php echo $ls['pertanyaan'];?>
            </span>
          </div>
          
              <div class="form-check py-3">
                <input class="form-check-input" value="<?php echo $ls['pil_a']?>" type="radio" name="<?php if($no == 1){echo 'jwb1';}elseif($no == 2){echo 'jwb2';}elseif($no == 3){echo 'jwb3';}elseif($no == 4){echo 'jwb4';}elseif($no == 5){echo 'jwb5';}?>" id="<?php if($no == 1){echo 'soall1';}elseif($no == 2){echo 'soall2';}elseif($no == 3){echo 'soall3';}elseif($no == 4){echo 'soall4';}elseif($no == 5){echo 'soall5';} ?>">
                <label class="form-check-label" for="<?php if($no == 1){echo 'soall1';}elseif($no == 2){echo 'soall2';}elseif($no == 3){echo 'soall3';}elseif($no == 4){echo 'soall4';}elseif($no == 5){echo 'soall5';} ?>">
                  <span style="background-color:#e2f8ff;" class="px-3 py-2 me-2 rounded-pill text-dark">A</span>
                  <span class="paragraph"><?php echo $ls['pil_a']?></span>
                </label>
              </div>
              <div class="form-check py-3">
                <input class="form-check-input" value="<?php echo $ls['pil_b']?>" type="radio" name="<?php if($no == 1){echo 'jwb1';}elseif($no == 2){echo 'jwb2';}elseif($no == 3){echo 'jwb3';}elseif($no == 4){echo 'jwb4';}elseif($no == 5){echo 'jwb5';}?>" id="<?php if($no == 1){echo 'soalll1';}elseif($no == 2){echo 'soalll2';}elseif($no == 3){echo 'soalll3';}elseif($no == 4){echo 'soalll4';}elseif($no == 5){echo 'soalll5';} ?>" >
                <label class="form-check-label" for="<?php if($no == 1){echo 'soalll1';}elseif($no == 2){echo 'soalll2';}elseif($no == 3){echo 'soalll3';}elseif($no == 4){echo 'soalll4';}elseif($no == 5){echo 'soalll5';} ?>">
                  <span style="background-color:#e2f8ff;" class="px-3 py-2 me-2 rounded-pill text-dark">B</span>
                  <span class="paragraph"><?php echo $ls['pil_b']?></span>
                </label>
              </div>
              <div class="form-check py-3">
                <input class="form-check-input" value="<?php echo $ls['pil_c']?>" type="radio" name="<?php if($no == 1){echo 'jwb1';}elseif($no == 2){echo 'jwb2';}elseif($no == 3){echo 'jwb3';}elseif($no == 4){echo 'jwb4';}elseif($no == 5){echo 'jwb5';}?>" id="<?php if($no == 1){echo 'soallll1';}elseif($no == 2){echo 'soallll2';}elseif($no == 3){echo 'soallll3';}elseif($no == 4){echo 'soallll4';}elseif($no == 5){echo 'soallll5';} ?>">
                <label class="form-check-label" for="<?php if($no == 1){echo 'soallll1';}elseif($no == 2){echo 'soallll2';}elseif($no == 3){echo 'soallll3';}elseif($no == 4){echo 'soallll4';}elseif($no == 5){echo 'soallll5';} ?>">
                  <span style="background-color:#e2f8ff;" class="px-3 py-2 me-2 rounded-pill text-dark">C</span>
                  <span class="paragraph"><?php echo $ls['pil_c']?></span>
                </label>
              </div>
              <div class="form-check py-3">
                <input class="form-check-input" value="<?php echo $ls['pil_d']?>" type="radio" name="<?php if($no == 1){echo 'jwb1';}elseif($no == 2){echo 'jwb2';}elseif($no == 3){echo 'jwb3';}elseif($no == 4){echo 'jwb4';}elseif($no == 5){echo 'jwb5';}?>" id="<?php if($no == 1){echo 'soalllll1';}elseif($no == 2){echo 'soalllll2';}elseif($no == 3){echo 'soalllll3';}elseif($no == 4){echo 'soalllll4';}elseif($no == 5){echo 'soalllll5';} ?>" >
                <label class="form-check-label" for="<?php if($no == 1){echo 'soalllll1';}elseif($no == 2){echo 'soalllll2';}elseif($no == 3){echo 'soalllll3';}elseif($no == 4){echo 'soalllll4';}elseif($no == 5){echo 'soalllll5';} ?>">
                  <span style="background-color:#e2f8ff;" class="px-3 py-2 me-2 rounded-pill text-dark">D</span>
                  <span class="paragraph"><?php echo $ls['pil_d']?></span>
                </label>
              </div>
              <div class="form-check py-3">
                <input class="form-check-input" value="<?php echo $ls['pil_e']?>" type="radio" name="<?php if($no == 1){echo 'jwb1';}elseif($no == 2){echo 'jwb2';}elseif($no == 3){echo 'jwb3';}elseif($no == 4){echo 'jwb4';}elseif($no == 5){echo 'jwb5';}?>" id="<?php if($no == 1){echo 'soallllll1';}elseif($no == 2){echo 'soallllll2';}elseif($no == 3){echo 'soallllll3';}elseif($no == 4){echo 'soallllll4';}elseif($no == 5){echo 'soallllll5';} ?>" >
                <label class="form-check-label" for="<?php if($no == 1){echo 'soallllll1';}elseif($no == 2){echo 'soallllll2';}elseif($no == 3){echo 'soallllll3';}elseif($no == 4){echo 'soallllll4';}elseif($no == 5){echo 'soallllll5';} ?>">
                  <span style="background-color:#e2f8ff;" class="px-3 py-2 me-2 rounded-pill text-dark">E</span>
                  <span class="paragraph"><?php echo $ls['pil_e']?></span>
                </label>
              </div>
            </div>
            
            <div class="col-lg-12 py-3">
              <div style="border-bottom: 2px solid #3127bd1a;"></div>
            </div>   
            <input type="hidden" value="<?php echo $ls['id_detail_kuis']?>" name="<?php if($no == 1){echo 'p1';}elseif($no == 2){echo 'p2';}elseif($no == 3){echo 'p3';}elseif($no == 4){echo 'p4';}elseif($no == 5){echo 'p5';}?>">
            <input type="hidden" value="<?php echo $_GET['mapel_id']?>" name="mapel_id">
            <input type="hidden" value="<?php echo $_GET['materi_id']?>" name="materi_id">
            <input type="hidden" value="<?php echo $_GET['video_id']?>" name="video_id">
            <input type="hidden" value="<?php echo $_GET['kuis_id']?>" name="kuis_id">
            <!-- <div class="col-lg-2 col-md-2 col-12 col-sm-12 py-4">
          <button class="btn btn-o-primary-dt">Sebelumnya</button>
        </div>
        
        <div class="col-lg-2 col-md-2 col-12 col-sm-12 offset-lg-8 offset-md-6 py-4">
          <button class="btn btn-primary-dt" style="border: none;">Selanjutnya</button>
        </div> -->
        <?php
          if($no == 5){
            ?>
            <div class="ml-4 col-lg-6 col-md-6 col-12 col-sm-12 py-4">
              
                <button type="submit" id="klik" class="btn btn-primary-dt" style="border: none;">Selesai Mengerjakan</button>
           
            </div>

            <?php
          }else{
            echo "";
          }
        ?>
        
      </div>        
    </div>
        <?php
      }
   ?>
    </form>
    <!-- End Quiz -->
    <!-- Button trigger modal -->
<!-- Button trigger modal -->

    <!-- Soal Quiz 2 -->
    <!-- <div class="container-fluid py-3">
      <div class="row nap bg-white d-flex mt-3 mx-3 p-3 " style="border-radius: 20px;">
        <div class="col-lg-12 col-12">
          <div class="angkasoal py-3 d-flex"">
            
            
            <div class="me-2 py-3">
              <a href="#" class="text-decoration-none">
                <span style="background-color:#e2f8ff;" class="px-3 py-2 pb-lg-2 pb-sm-2 mt-5 me-lg-2 rounded-pill text-dark">1</span>
              </a>
            </div>

            <div class="me-2 py-3">
              <a href="#" class="text-decoration-none">
                <span class="bg-primary px-3 py-2 me-2 rounded-pill text-white">2</span>
              </a>
            </div>

            <div class="me-2 py-3">
              <a href="#" class="text-decoration-none">
                <span style="background-color:#e2f8ff;" class="px-3 py-2 pb-lg-2 pb-sm-2 mt-5 me-lg-2 rounded-pill text-dark">3</span>
              </a>
            </div>

            <div class="me-2 py-3">
              <a href="#" class="text-decoration-none">
                <span style="background-color:#e2f8ff;" class="px-3 py-2 pb-lg-2 pb-sm-2 mt-5 me-lg-2 rounded-pill text-dark">4</span>
              </a>
            </div>

            <div class="me-2 py-3">
              <a href="#" class="text-decoration-none">
                <span style="background-color:#e2f8ff;" class="px-3 py-2 pb-lg-2 pb-sm-2 mt-5 me-lg-2 rounded-pill text-dark">5</span>
              </a>
            </div>

          </div>
        </div>
        <div class="col-lg-6">
          <div class="soal pt-3 pb-3">
            <span class="sub-title">
              Apakah yang dimaksud Bentuk bumi ..........
            </span>
          </div>
          <div class="jawab py-3">
            <a href="#" class="text-decoration-none">
              <span style="background-color:#e2f8ff;" class="px-3 py-2 me-2 rounded-pill text-dark">A</span>
              <span class="paragraph">Kotak</span>
            </a>
          </div>
          <div class="jawab py-3">
            <a href="#" class="text-decoration-none">
              <span style="background-color:#e2f8ff;" class="px-3 py-2 me-2 rounded-pill text-dark">B</span>
              <span class="paragraph">Bulat</span>
            </a>
          </div>
          <div class="jawab py-3">
            <a href="#" class="text-decoration-none">
              <span style="background-color:#e2f8ff;" class="px-3 py-2 me-2 rounded-pill text-dark">C</span>
              <span class="paragraph">Persegi Panjang</span>
            </a>
          </div>
        </div>
        
        <div class="col-lg-12 py-3">
          <div style="border-bottom: 2px solid #3127bd1a;"></div>
        </div>

        

      </div>        
    </div> -->
    <!-- End Quiz -->

    <!-- Soal Quiz 3 -->
    <!-- <div class="container-fluid py-3">
      <div class="row nap bg-white d-flex mt-3 mx-3 p-3 " style="border-radius: 20px;">
        <div class="col-lg-12 col-12">
          <div class="angkasoal py-3 d-flex"">
            
            <div class="me-2 py-3">
              <a href="#" class="text-decoration-none">
                <span style="background-color:#e2f8ff;" class="px-3 py-2 pb-lg-2 pb-sm-2 mt-5 me-lg-2 rounded-pill text-dark">1</span>
              </a>
            </div>

            <div class="me-2 py-3">
              <a href="#" class="text-decoration-none">
                <span style="background-color:#e2f8ff;" class="px-3 py-2 pb-lg-2 pb-sm-2 mt-5 me-lg-2 rounded-pill text-dark">2</span>
              </a>
            </div>

            <div class="me-2 py-3">
              <a href="#" class="text-decoration-none">
                <span class="bg-primary px-3 py-2 me-2 rounded-pill text-white">3</span>
              </a>
            </div>

            <div class="me-2 py-3">
              <a href="#" class="text-decoration-none">
                <span style="background-color:#e2f8ff;" class="px-3 py-2 pb-lg-2 pb-sm-2 mt-5 me-lg-2 rounded-pill text-dark">4</span>
              </a>
            </div>

            <div class="me-2 py-3">
              <a href="#" class="text-decoration-none">
                <span style="background-color:#e2f8ff;" class="px-3 py-2 pb-lg-2 pb-sm-2 mt-5 me-lg-2 rounded-pill text-dark">5</span>
              </a>
            </div>

          </div>
        </div>
        <div class="col-lg-6">
          <div class="soal pt-3 pb-3">
            <span class="sub-title">
              Apakah yang dimaksud Bentuk bumi ..........
            </span>
          </div>
          <div class="jawab py-3">
            <a href="#" class="text-decoration-none">
              <span style="background-color:#e2f8ff;" class="px-3 py-2 me-2 rounded-pill text-dark">A</span>
              <span class="paragraph">Kotak</span>
            </a>
          </div>
          <div class="jawab py-3">
            <a href="#" class="text-decoration-none">
              <span style="background-color:#e2f8ff;" class="px-3 py-2 me-2 rounded-pill text-dark">B</span>
              <span class="paragraph">Bulat</span>
            </a>
          </div>
          <div class="jawab py-3">
            <a href="#" class="text-decoration-none">
              <span style="background-color:#e2f8ff;" class="px-3 py-2 me-2 rounded-pill text-dark">C</span>
              <span class="paragraph">Persegi Panjang</span>
            </a>
          </div>
        </div>
        
        <div class="col-lg-12 py-3">
          <div style="border-bottom: 2px solid #3127bd1a;"></div>
        </div>

        
      </div>        
    </div> -->
    <!-- End Quiz -->


    <!-- Soal Quiz 4 -->
    <!-- <div class="container-fluid py-3">
      <div class="row nap bg-white d-flex mt-3 mx-3 p-3 " style="border-radius: 20px;">
        <div class="col-lg-12 col-12">
          <div class="angkasoal py-3 d-flex"">
            
            <div class="me-2 py-3">
              <a href="#" class="text-decoration-none">
                <span style="background-color:#e2f8ff;" class="px-3 py-2 pb-lg-2 pb-sm-2 mt-5 me-lg-2 rounded-pill text-dark">1</span>
              </a>
            </div>

            <div class="me-2 py-3">
              <a href="#" class="text-decoration-none">
                <span style="background-color:#e2f8ff;" class="px-3 py-2 pb-lg-2 pb-sm-2 mt-5 me-lg-2 rounded-pill text-dark">2</span>
              </a>
            </div>

            <div class="me-2 py-3">
              <a href="#" class="text-decoration-none">
                <span style="background-color:#e2f8ff;" class="px-3 py-2 pb-lg-2 pb-sm-2 mt-5 me-lg-2 rounded-pill text-dark">3</span>
              </a>
            </div>

            <div class="me-2 py-3">
              <a href="#" class="text-decoration-none">
                <span class="bg-primary px-3 py-2 me-2 rounded-pill text-white">4</span>
              </a>
            </div>

            <div class="me-2 py-3">
              <a href="#" class="text-decoration-none">
                <span style="background-color:#e2f8ff;" class="px-3 py-2 pb-lg-2 pb-sm-2 mt-5 me-lg-2 rounded-pill text-dark">5</span>
              </a>
            </div>

          </div>
        </div>
        <div class="col-lg-6">
          <div class="soal pt-3 pb-3">
            <span class="sub-title">
              Apakah yang dimaksud Bentuk bumi ..........
            </span>
          </div>
          <div class="jawab py-3">
            <a href="#" class="text-decoration-none">
              <span style="background-color:#e2f8ff;" class="px-3 py-2 me-2 rounded-pill text-dark">A</span>
              <span class="paragraph">Kotak</span>
            </a>
          </div>
          <div class="jawab py-3">
            <a href="#" class="text-decoration-none">
              <span style="background-color:#e2f8ff;" class="px-3 py-2 me-2 rounded-pill text-dark">B</span>
              <span class="paragraph">Bulat</span>
            </a>
          </div>
          <div class="jawab py-3">
            <a href="#" class="text-decoration-none">
              <span style="background-color:#e2f8ff;" class="px-3 py-2 me-2 rounded-pill text-dark">C</span>
              <span class="paragraph">Persegi Panjang</span>
            </a>
          </div>
        </div>
        
        <div class="col-lg-12 py-3">
          <div style="border-bottom: 2px solid #3127bd1a;"></div>
        </div>

       
      </div>        
    </div> -->
    <!-- End Quiz -->

    <!-- Soal Quiz -->
    <!-- <div class="container-fluid py-3 pb-5">
      <div class="row nap bg-white d-flex mt-3 mx-3 p-3 " style="border-radius: 20px;">
        <div class="col-lg-12 col-12">
          <div class="angkasoal py-3 d-flex"">
            
            <div class="me-2 py-3">
              <a href="#" class="text-decoration-none">
                <span style="background-color:#e2f8ff;" class="px-3 py-2 pb-lg-2 pb-sm-2 mt-5 me-lg-2 rounded-pill text-dark">1</span>
              </a>
            </div>

            <div class="me-2 py-3">
              <a href="#" class="text-decoration-none">
                <span style="background-color:#e2f8ff;" class="px-3 py-2 pb-lg-2 pb-sm-2 mt-5 me-lg-2 rounded-pill text-dark">2</span>
              </a>
            </div>

            <div class="me-2 py-3">
              <a href="#" class="text-decoration-none">
                <span style="background-color:#e2f8ff;" class="px-3 py-2 pb-lg-2 pb-sm-2 mt-5 me-lg-2 rounded-pill text-dark">3</span>
              </a>
            </div>

            <div class="me-2 py-3">
              <a href="#" class="text-decoration-none">
                <span style="background-color:#e2f8ff;" class="px-3 py-2 pb-lg-2 pb-sm-2 mt-5 me-lg-2 rounded-pill text-dark">4</span>
              </a>
            </div>

            <div class="me-2 py-3">
              <a href="#" class="text-decoration-none">
                <span class="bg-primary px-3 py-2 me-2 rounded-pill text-white">5</span>
              </a>
            </div>

          </div>
        </div>
        <div class="col-lg-6">
          <div class="soal pt-3 pb-3">
            <span class="sub-title">
              Apakah yang dimaksud Bentuk bumi ..........
            </span>
          </div>
          <div class="jawab py-3">
            <a href="#" class="text-decoration-none">
              <span style="background-color:#e2f8ff;" class="px-3 py-2 me-2 rounded-pill text-dark">A</span>
              <span class="paragraph">Kotak</span>
            </a>
          </div>
          <div class="jawab py-3">
            <a href="#" class="text-decoration-none">
              <span style="background-color:#e2f8ff;" class="px-3 py-2 me-2 rounded-pill text-dark">B</span>
              <span class="paragraph">Bulat</span>
            </a>
          </div>
          <div class="jawab py-3">
            <a href="#" class="text-decoration-none">
              <span style="background-color:#e2f8ff;" class="px-3 py-2 me-2 rounded-pill text-dark">C</span>
              <span class="paragraph">Persegi Panjang</span>
            </a>
          </div>
        </div>
        
        <div class="col-lg-12 py-3">
          <div style="border-bottom: 2px solid #3127bd1a;"></div>
        </div>

        <div class="col-lg-6 col-md-6 col-12 col-sm-12 py-4">
          <a href="detailnilailatihan.html">
            <button class="btn btn-primary-dt" style="border: none;">Selesai Mengerjakan</button>
          </a>
        </div>

      </div>        
    </div> -->
    <!-- End Quiz -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    
    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
  
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-mecW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
