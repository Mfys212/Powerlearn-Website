<?php $active_pen = 'active'; include 'sidebar_bljr.php'; ?>

    <section class="home">
      <div class="row no-gutters pb-5">
        <div class="card">
          <div class="card-body">

            <label for="check">
                <a href="index.html"><i class="fas fa-arrow-left"></i></a>
              </label>


            <div class="row py-3">

                <div class="col-12">

                    <?php
                      $r = mysqli_query($mysqli, "SELECT * FROM isi_materi WHERE id_isi_materi = '$_GET[penjelasan_id]'");
                      $d = mysqli_fetch_array($r);
                    ?>
                    <a href="../guru/file_materi/<?php echo $d['isi_materi']?>"><button class="btn btn-primary-dt btn-lg-block btn-lg-md">Download Materi</button></a>
                    <p class="paragraph mt-3    "><?php echo $d['penjelasan'];?>
                    <h4 class="paragpraph mt-5">Achivement</h4>

                    </div>

                    <div class="col-lg-2 col-12 col-sm-12 col-md-4 mt-1"><button class="btn btn-gold"><svg class="icon line" width="24" height="24" id="money-dollar-coin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title style="stroke-width: 2; stroke: rgb(255, 255, 255);">money dollar coin</title><path id="primary" d="M12,9V8m0,8V15m-2,0h2.5A1.5,1.5,0,0,0,14,13.5h0A1.5,1.5,0,0,0,12.5,12h-1A1.5,1.5,0,0,1,10,10.5h0A1.5,1.5,0,0,1,11.5,9H14M12,3a9,9,0,1,0,9,9A9,9,0,0,0,12,3Z" style="fill: none; stroke: rgb(245, 245, 245); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path></svg> 120 Gold</button></div>

                    <div class="col-lg-2 col-12 col-md-4 col-sm-12 mt-1 btn-block "><button class="btn btn-sukses"><svg class="icon line" width="24" height="24" id="money-dollar-coin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title style="stroke-width: 2; stroke: rgb(255, 255, 255);">money dollar coin</title><path id="primary" d="M12,9V8m0,8V15m-2,0h2.5A1.5,1.5,0,0,0,14,13.5h0A1.5,1.5,0,0,0,12.5,12h-1A1.5,1.5,0,0,1,10,10.5h0A1.5,1.5,0,0,1,11.5,9H14M12,3a9,9,0,1,0,9,9A9,9,0,0,0,12,3Z" style="fill: none; stroke: rgb(245, 245, 245); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path></svg>200 Exp</button></div>
        
                    <div class="col-lg-3 offset-lg-5 col-12 col-sm-12 col-md-4 mt-1"><button class="btn btn-primary-dt btn-lg-block btn-lg-md">Lanjut Belajar</button></div>
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
