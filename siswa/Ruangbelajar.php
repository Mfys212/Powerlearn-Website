<?php error_reporting(0); $active_video = 'active'; include 'sidebar_bljr.php'; ?>

    <section class="home">
      <div class="row no-gutters pb-5">
        <div class="card">
          <div class="card-body">

            <label for="check">
                <a href="materi_detail.php?mapel_id=<?php echo $_GET['mapel_id']; ?>"><i class="fas fa-arrow-left"></i></a>
              </label>
            <?php 
              $s = mysqli_query($mysqli, "SELECT * FROM video WHERE id_video = '$_GET[video_id]'");
              while($f = mysqli_fetch_array($s)){
                ?>
                
                <h1 class="subtitle mt-5"><?php echo $f['judul']?></h1>
                <iframe class="mt-2" style="border-radius: 20px;" src="<?php echo $f['link']?>" width="100%" height="500px" frameborder="0" allowfullscreen ></iframe>
                <?php
              }
            ?>
           

            <div class="row py-3">

                <div class="col-12">
                    
                <h4 class="paragpraph mt-2">Achivement</h4>
                
                </div>
              
                <div class="col-lg-2 col-12 col-sm-12 col-md-4 mt-3 mt-lg-0"><button class="btn btn-gold"><svg class="icon line" width="24" height="24" id="money-dollar-coin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title style="stroke-width: 2; stroke: rgb(255, 255, 255);">money dollar coin</title><path id="primary" d="M12,9V8m0,8V15m-2,0h2.5A1.5,1.5,0,0,0,14,13.5h0A1.5,1.5,0,0,0,12.5,12h-1A1.5,1.5,0,0,1,10,10.5h0A1.5,1.5,0,0,1,11.5,9H14M12,3a9,9,0,1,0,9,9A9,9,0,0,0,12,3Z" style="fill: none; stroke: rgb(245, 245, 245); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path></svg> 120 Gold</button></div>

                <div class="col-lg-2 col-12 col-md-4 col-sm-6 mt-3 mt-lg-0 "><button class="btn btn-sukses"><svg class="icon line" width="24" height="24" id="money-dollar-coin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title style="stroke-width: 2; stroke: rgb(255, 255, 255);">money dollar coin</title><path id="primary" d="M12,9V8m0,8V15m-2,0h2.5A1.5,1.5,0,0,0,14,13.5h0A1.5,1.5,0,0,0,12.5,12h-1A1.5,1.5,0,0,1,10,10.5h0A1.5,1.5,0,0,1,11.5,9H14M12,3a9,9,0,1,0,9,9A9,9,0,0,0,12,3Z" style="fill: none; stroke: rgb(245, 245, 245); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path></svg>200 Exp</button></div>
                <?php
                  if(empty($_GET['video_id'])){
                      if($cek1 == 0 && $cek2 == 0 && $cek3 == 0){
                        ?>
                        <i class="col-lg-3 offset-lg-5 col-12 col-sm-12 col-md-4 mt-3 mt-lg-0"><b>Belum Ada Materi</b></i>
                        <?php
                      }else{
                        ?>
                        <div class="col-lg-3 offset-lg-5 col-12 col-sm-12 col-md-4 mt-3 mt-lg-0"><button onclick="clik()" class="btn btn-primary-dt">Mulai Belajar</button></div>
                        <?php
                      }
                  }else{
                    ?>
                <div class="col-lg-3 offset-lg-5 col-12 col-sm-12 col-md-4 mt-3 mt-lg-0"><button class="btn btn-primary-dt">Lanjut Belajar</button></div>

                    <?php
                  }
                ?>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- Optional JavaScript; choose one of the two! -->

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="subtitle" id="staticBackdropLabel">Bank Pembayaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row mx-3 py-3">
                  <div class="col-lg-12 bg-primary py-2 rounded-pill text-center">
                    <p class="body-text text-white">Mandiri</p>
                    <p class="subtitle text-white">8r329084908</p>
                  </div>
                </div>
                <div class="row mx-3 py-3">
                  <div class="col-lg-12 bg-primary py-2 rounded-pill text-center">
                    <p class="body-text text-white">BCA</p>
                    <p class="subtitle text-white">8r329084908</p>
                  </div>
                </div>
                <div class="row mx-3 py-3">
                  <div class="col-lg-12 bg-primary py-2 rounded-pill text-center">
                    <p class="body-text text-white">BNI</p>
                    <p class="subtitle text-white">8r329084908</p>
                  </div>
                </div>
                <div class="row mx-3 py-3">
                  <div class="col-lg-12 bg-primary py-2 rounded-pill text-center">
                    <p class="body-text text-white">BSI</p>
                    <p class="subtitle text-white">8r329084908</p>
                  </div>
                </div>
                <div class="row mx-3 pt-3">
                  <div class="col-lg-12 py-2">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Upload Bukti</span>
                      </div>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <a href="udahbayar.html">
                  <button type="button" class="btn btn-primary-dt">Submit</button>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- End Modal -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script>
      function clik(){
        var button=document.getElementById("wam");
              setInterval(function(){ 
                button.click();
              }, 1000);
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
