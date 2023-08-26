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

            <h1 class="subtitle te mt-5">Video</h1>
            <div class="row pb-5">

              <div class="col-12 mt-3">
                <a href="tambah_vidio.php?materi_id=<?php echo $_GET['materi_id']?>">
                  <button class="btn btn-primary-dt">Tambah Video</button>
                </a>
              </div>

              <?php 
                $sql = mysqli_query($mysqli, "SELECT * FROM video WHERE id_materi = '$_GET[materi_id]'");
                $row = mysqli_num_rows($sql);
                if($row < 1){
                  echo "<h5 class='mt-5 ml-3'><i>Belum Ada Video</i></h5>";
                }
                while($array = mysqli_fetch_array($sql)){
                  ?>
                  <div class="col-md pt-4">
                    <div class="card-2">
                      <div class="card-body">
                        <iframe src="<?php echo $array['link']?>?controls=1" width="110px" height="70px" frameborder="0" allowfullscreen></iframe>
                        <div class="card-text text-center pb-3"><?php echo $array['judul']; ?></div>
                        <div class="row text-center">
                          <div class="col boxicons2 semuakonten">
                            <a href="javascript:confirmDelete('Edit_video.php?materi_id=<?php echo $_GET['materi_id']?>&video_id=<?php echo $array['id_video']?>&aksi=hapus')"><i class="fas fa-trash-alt putih"></i></a>
                          </div>
                          <div class="col boxicons semuakonten">
                            <a href="editlink_video.php?materi_id=<?php echo $_GET['materi_id']?>&video_id=<?php echo $array['id_video']?>"><i class="fas fa-edit putih"></i></a>
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
                    <img src="img/lihat_video/2.png" />
                    <div class="card-text text-center pb-3">Judul Vidio</div>
                    <div class="row text-center">
                      <div class="col boxicons2 semuakonten">
                        <i class="fas fa-trash-alt putih"></i>
                      </div>
                      <div class="col boxicons semuakonten">
                        <a href="editlink_video.html"><i class="fas fa-edit putih"></i></a>
                      </div>
                      <div class="col boxicons3 semuakonten">
                        <i class="fas fa-plus putih"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md pt-4">
                <div class="card-2">
                  <div class="card-body">
                    <img src="img/lihat_video/2.png" />
                    <div class="card-text text-center pb-3">Judul Vidio</div>
                    <div class="row text-center">
                      <div class="col boxicons2 semuakonten">
                        <a href="#"><i class="fas fa-trash-alt putih"></i></a>
                      </div>
                      <div class="col boxicons semuakonten">
                        <a href="editlink_video.html"><i class="fas fa-edit putih"></i></a>
                      </div>
                      <div class="col boxicons3 semuakonten">
                        <i class="fas fa-plus putih"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md pt-4">
                <div class="card-2">
                  <div class="card-body">
                    <img src="img/lihat_video/2.png" />
                    <div class="card-text text-center pb-3">Judul Vidio</div>
                    <div class="row text-center">
                      <div class="col boxicons2 semuakonten">
                        <i class="fas fa-trash-alt putih"></i>
                      </div>
                      <div class="col boxicons semuakonten">
                        <a href="editlink_video.html"><i class="fas fa-edit putih"></i></a>
                      </div>
                      <div class="col boxicons3 semuakonten">
                        <i class="fas fa-plus putih"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md pt-4">
                <div class="card-2">
                  <div class="card-body">
                    <img src="img/lihat_video/2.png" />
                    <div class="card-text text-center pb-3">Judul Vidio</div>
                    <div class="row text-center">
                      <div class="col boxicons2 semuakonten">
                        <i class="fas fa-trash-alt putih"></i>
                      </div>
                      <div class="col boxicons semuakonten">
                        <a href="editlink_video.html"><i class="fas fa-edit putih"></i></a>
                      </div>
                      <div class="col boxicons3 semuakonten">
                        <i class="fas fa-plus putih"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md pt-4">
                <div class="card-2">
                  <div class="card-body">
                    <img src="img/lihat_video/2.png" />
                    <div class="card-text text-center pb-3">Judul Vidio</div>
                    <div class="row text-center">
                      <div class="col boxicons2 semuakonten">
                        <i class="fas fa-trash-alt putih"></i>
                      </div>
                      <div class="col boxicons semuakonten">
                        <a href="editlink_video.html"><i class="fas fa-edit putih"></i></a>
                      </div>
                      <div class="col boxicons3 semuakonten">
                        <i class="fas fa-plus putih"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>               <div class="col-md pt-4">
                <div class="card-2">
                  <div class="card-body">
                    <img src="img/lihat_video/2.png" />
                    <div class="card-text text-center pb-3">Judul Vidio</div>
                    <div class="row text-center">
                      <div class="col boxicons2 semuakonten">
                        <i class="fas fa-trash-alt putih"></i>
                      </div>
                      <div class="col boxicons semuakonten">
                        <a href="editlink_video.html"><i class="fas fa-edit putih"></i></a>
                      </div>
                      <div class="col boxicons3 semuakonten">
                        <i class="fas fa-plus putih"></i>
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
    <script>
      function confirmDelete(delurl){
        if (confirm("Yakin Akan Hapus Data ?")){
          window.location.href = delurl;
        }
      }
    </script>
    <?php
      if(isset($_GET['aksi']) && $_GET['aksi'] == 'hapus'){
        $id = $_GET['video_id'];
        $delete = mysqli_query($mysqli, "DELETE FROM video WHERE id_video = '$id'");
        if($delete){
          header("location:Edit_video.php?materi_id=".$_GET['materi_id']);
        }else{
          ?>
          <script>
            alert("Video Gagal Dihapus");
            window.location.href = "Edit_video.php?materi_id=<?php echo $_GET['materi_id']?>";
          </script>
          <?php
        }
      }
    ?>            
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
