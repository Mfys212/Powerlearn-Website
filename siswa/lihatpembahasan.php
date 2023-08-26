<?php include "header_quiz.php"; ?>
    <!-- Wnd Wuiz -->
    
    <!-- Soal Quiz -->
    <?php
      $id = array($_GET['j1'], $_GET['j2'], $_GET['j3'], $_GET['j4'], $_GET['j5']);
      $di = 0;
      $no = 0;
      $sql = mysqli_query($mysqli, "SELECT * FROM detail_kuis WHERE id_kuis = '$_GET[kuis_id]'" );
      while($data = mysqli_fetch_array($sql)){
        $no++;
        ?>
        <div class="container-fluid py-3">
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
          <div class="soal pt-5 pb-3">
            <span class="sub-title">
             <?php echo $data['pertanyaan']; ?>
            </span>
          </div>
          <div class="jawab py-3">
            <a href="#" class="text-decoration-none">
              <span style="background-color:#e2f8ff;" class="px-3 py-2 mr-2 rounded-pill text-dark">A</span>
              <span class="paragraph"><?php echo $data['pil_a']?></span>
            </a>
          </div>
          <div class="jawab py-3">
            <a href="#" class="text-decoration-none">
              <span style="background-color:#e2f8ff;" class="px-3 py-2 mr-2 rounded-pill text-dark">B</span>
              <span class="paragraph"><?php echo $data['pil_b']?></span>
            </a>
          </div>
          <div class="jawab py-3">
            <a href="#" class="text-decoration-none">
              <span style="background-color:#e2f8ff;" class="px-3 py-2 mr-2 rounded-pill text-dark">C</span>
              <span class="paragraph"><?php echo $data['pil_c']?></span>
            </a>
          </div>
          <div class="jawab py-3">
            <a href="#" class="text-decoration-none">
              <span style="background-color:#e2f8ff;" class="px-3 py-2 mr-2 rounded-pill text-dark">D</span>
              <span class="paragraph"><?php echo $data['pil_d']?></span>
            </a>
          </div>
          <div class="jawab py-3">
            <a href="#" class="text-decoration-none">
              <span style="background-color:#e2f8ff;" class="px-3 py-2 mr-2 rounded-pill text-dark">E</span>
              <span class="paragraph"><?php echo $data['pil_e']?></span>
            </a>
          </div>
        </div>   
        <div class="col-lg-4 offset-lg-1 bg-primary mt-lg-0 mt-3 p-5" style="border-radius: 20px;">
             <?php
                if($id[$di] == $data['pil_a']){
                  $jwb = "A";
                }elseif($id[$di] == $data['pil_b']){
                  $jwb = "B";
                }elseif($id[$di] == $data['pil_c']){
                  $jwb = "C";
                }elseif($id[$di] == $data['pil_d']){
                  $jwb = "D";
                }elseif($id[$di] == $data['pil_e']){
                  $jwb = "E";
                }elseif($id[$di] == ''){
                  $jwb = "(Kamu Tidak Menjawab)";
                }
             ?>     
            <div class="p-2"><b>
                <span class="text-white body-text ">Jawaban Kamu : <?php echo $jwb; ?></span></b>
            </div>

            <div class="p-2">
                <span class="text-white subtitle ">Pembahasan Soal :</span>
            </div>

            <div class="p-2">
                <span class="text-white body-text" style="opacity: 90%;"><?php echo $data['penjelasan_q']?></span>
            </div>
              <?php
                if($data['jwb_bnr'] == $data['pil_a']){
                  $jwbb = "A";
                }elseif($data['jwb_bnr'] == $data['pil_b']){
                  $jwbb = "B";
                }elseif($data['jwb_bnr'] == $data['pil_c']){
                  $jwbb = "C";
                }elseif($data['jwb_bnr'] == $data['pil_d']){
                  $jwbb = "D";
                }elseif($data['jwb_bnr'] == $data['pil_e']){
                  $jwbb = "E";
                }
              ?>
            <div class="p-2"><b>
                <span class="text-white body-text ">Jawaban Benar : <?php echo $jwbb; ?></span></b>
            </div>

        </div>
        
        <div class="col-lg-12 pt-5">
          <div style="border-bottom: 2px solid #3127bd1a;"></div>
        </div>

        <!-- <div class="col-lg-2 col-md-2 col-12 col-sm-12 py-4">
          <button class="btn btn-o-primary-dt">Sebelumnya</button>
        </div> -->

        <!-- <div class="col-lg-2 col-md-2 col-12 col-sm-12 offset-lg-8 offset-md-6 py-4">
          <button class="btn btn-primary-dt" style="border: none;">Selanjutnya</button>
        </div> -->

      </div>        
    </div>
        <?php
        $di++;
      }
    ?>
    <!-- End Quiz -->

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
