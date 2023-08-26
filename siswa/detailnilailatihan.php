<?php include "header_quiz.php"; ?>

    <!-- Konsultasi Siswa -->
    <div class="container-fluid mt-5">
      <div class="container bg-white py-3 rounded">

        <!-- nilai -->

        <div class="row p-3">
            <div class="col-lg-4 py-5 text-center">
                <span class="heading-nilai border border-success rounded-lg px-3">
                    <?php echo $_GET['ni']?>
                </span>
            </div>

            <div class="col-lg-4 bg-primary border border-white p-5 rounded-left">
                <div class="d-flex align-items-center">
                    <i class="mr-3"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="10" cy="10" r="10" fill="#32D77C"/>
                        <path d="M4.5 9.5L8.5 13.5L15 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        </i>
                     <div class="text-center">
                            <span class="body-text text-white">Benar</span>
                            <br>
                            <span class="heading text-white">
                                <?php echo $_GET['b']?>
                            </span>
                     </div>
                </div>
            </div>

            <div class="col-lg-4 bg-primary border border-white p-5 rounded-right">
                <div class="d-flex align-items-center">
                    <i class="mr-3"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="10" cy="10" r="10" fill="#FF3981"/>
                        <path d="M6 6L14 14" stroke="white" stroke-width="2" stroke-linecap="round"/>
                        <path d="M14 6L6 14" stroke="white" stroke-width="2" stroke-linecap="round"/>
                        </svg>                        
                        </i>
                     <div class="text-center">
                            <span class="body-text text-white">Salah</span>
                            <br>
                            <span class="heading text-white">
                            <?php echo $_GET['s']?>
                            </span>
                     </div>
                </div>
            </div>

            <div class="col-lg-4 p-5 text-center">
                <span class="subtitle">
                    <?php
                      if($_GET['ni'] == 100){
                        echo "Mantap Nilai Kamu Sempurna..!!";
                      }elseif($_GET['ni'] == 80){
                        echo "Mantap Tingkatkan Belajarmu..!";
                      }elseif($_GET['ni'] == 60){
                        echo "Tingkatkan Lagi Belajarmu..!";
                      }elseif($_GET['ni'] == 40){
                        echo "Wah Nilai Mu Masih Kurang Nih Ayo Semangat..!";
                      }elseif($_GET['ni'] == 20){
                        echo "Wah Nilai Mu Masih Kurang Nih Ayo Semangat..!";
                      }elseif($_GET['ni'] == 0){
                        echo "Waduh..";
                      }
                    ?>
                </span>
            </div>

            <div class="col-lg-4 bg-primary border border-white p-5 rounded-left">
                <div class="d-flex align-items-center">
                    <i class="mr-3"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="10" cy="10" r="10" fill="url(#paint0_linear)"/>
                        <defs>
                        <linearGradient id="paint0_linear" x1="10" y1="-1.91996e-07" x2="22.8846" y2="36.3462" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FBFF31"/>
                        <stop offset="1" stop-color="#CCAF78"/>
                        </linearGradient>
                        </defs>
                        </svg>                        
                        </i>
                     <div class="text-center">
                            <span class="body-text text-white">Predikat</span>
                            <br>
                            <span class="heading text-white">
                            <?php
                              if($_GET['ni'] == 100){
                                echo "A";
                              }elseif($_GET['ni'] == 80){
                                echo "B";
                              }elseif($_GET['ni'] == 60){
                                echo "C";
                              }elseif($_GET['ni'] == 40){
                                echo "D";
                              }elseif($_GET['ni'] == 20){
                                echo "D";
                              }elseif($_GET['ni'] == 0){
                                echo "E";
                              }
                            ?>
                            </span>
                     </div>
                </div>
            </div>

            <div class="col-lg-4 bg-primary border border-white p-5 rounded-right">
                <div class="d-flex align-items-center">
                    <i class="mr-3"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="10" cy="10" r="10" fill="#F6F8FD"/>
                        </svg>                                              
                        </i>
                     <div class="text-center">
                            <span class="body-text text-white">Waktu Pengerjaan</span>
                            <br>
                            <span class="heading text-white">
                            00:20:00
                            </span>
                     </div>
                </div>
            </div>

            <div class="col-lg-12 py-4">
                <div style="border-bottom: 2px solid #3127bd1a;"></div>
              </div>
      
              <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                <button type="button" class="btn btn-sukses float-end" data-toggle="modal" data-target="#exampleModal">
                  Lihat Status Level
                </button>
                <a href="lihatpembahasan.php?mapel_id=<?php echo $_GET['mapel_id']?>&materi_id=<?php echo $_GET['materi_id']?>&video_id=<?php echo $_GET['video_id']?>&kuis_id=<?php echo $_GET['kuis_id']?>&j1=<?php echo $_GET['j1']?>&j2=<?php echo $_GET['j2']?>&j3=<?php echo $_GET['j3']?>&j4=<?php echo $_GET['j4']?>&j5=<?php echo $_GET['j5']?>&s=<?php echo $_GET['s']?>">
                  <button class="btn btn-primary-dt float-end me-lg-3 me-0 mt-3 mt-lg-0" style="border: none;">Lihat Pembahasan</button>
                </a>
              </div>



              <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="subtitle" id="exampleModalLabel">Status level</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-lg-12 text-center">
                              <img src="img/iconmateri/img-bayar.png" alt="">
                            </div>
                          </div>
                          <div class="row py-4 text-center">
                            <div class="col-lg-4 mt-lg-0 mt-3"><button class="btn btn-gold"><svg class="icon line" width="24" height="24" id="money-dollar-coin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title style="stroke-width: 2; stroke: rgb(255, 255, 255);">money dollar coin</title><path id="primary" d="M12,9V8m0,8V15m-2,0h2.5A1.5,1.5,0,0,0,14,13.5h0A1.5,1.5,0,0,0,12.5,12h-1A1.5,1.5,0,0,1,10,10.5h0A1.5,1.5,0,0,1,11.5,9H14M12,3a9,9,0,1,0,9,9A9,9,0,0,0,12,3Z" style="fill: none; stroke: rgb(245, 245, 245); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path></svg> Gold</button></div>

                            <div class="col-lg-4 mt-lg-0 mt-3"><button class="btn btn-sukses"><svg class="icon line" width="24" height="24" id="money-dollar-coin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title style="stroke-width: 2; stroke: rgb(255, 255, 255);">money dollar coin</title><path id="primary" d="M12,9V8m0,8V15m-2,0h2.5A1.5,1.5,0,0,0,14,13.5h0A1.5,1.5,0,0,0,12.5,12h-1A1.5,1.5,0,0,1,10,10.5h0A1.5,1.5,0,0,1,11.5,9H14M12,3a9,9,0,1,0,9,9A9,9,0,0,0,12,3Z" style="fill: none; stroke: rgb(245, 245, 245); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path></svg> Exp</button></div>

                            <div class="col-lg-4 mt-lg-0 mt-3"><button class="btn btn-sukses">Level 2</button></div>
                          
                          </div>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <!-- ENd Modal -->

        </div>

        <!-- End Nilai -->


      </div>      
    </div>
    <!-- End Konsultasi Siswa -->



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
