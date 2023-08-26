<?php $active_guru = 'active'; include 'sidebar.php'; ?>

    <section class="home">
      <div class="row no-gutters">
        <div class="card">
          <div class="card-body">

            <label for="check">
              <a href="Edit_video.php?materi_id=<?php echo $_GET['materi_id']?>"><i class="fas fa-arrow-left"></i></a>
            </label>
            <?php
              if(isset($_POST['save'])){
                $judul = $_POST['judul'];
                $link = $_POST['link'];
                if(strpos($link, "youtu.be") != false){
                  $ling = str_replace("youtu.be", "youtube.com/embed", $link);
                }elseif(strpos($link, "watch?v=")){
                  $ling = str_replace("watch?v=", "embed/", $link);
                }else{
                  $ling = $link;
                }
                $sql = mysqli_query($mysqli, "UPDATE video SET judul = '$judul', link = '$ling' WHERE id_video = '$_GET[video_id]'");
                if($sql){
                  ?>
                  <div class="alert alert-success">Edit Video Berhasil</div>
                  <?php
                }else{
                  ?>
                  <div class="alert alert-danger">Gagal Edit Video</div>
                  <?php
                }
              }
            ?>
            
            <!-- muncul jika sudah submit -->
            <?php
              $sql = mysqli_query($mysqli, "SELECT * FROM video WHERE id_video = '$_GET[video_id]'");
              $data = mysqli_fetch_array($sql);
            ?>
            <div class="card-title">
              <h1 class="subtitle">Edit Video</h1>
            </div>
            <div class="row">
              <div class="col">
                <form action="" method="POST">
                  <div class="form-group">
                    <label for="judul">Judul Vidio</label>
                    <input type="text" class="form-control" name="judul" id="judul" aria-describedby="emailHelp" value="<?php echo $data['judul'] ?>" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Masukan Link Vidio</label>
                    <input type="text" name="link" class="form-control" id="exampleInputPassword1" value="<?php echo $data['link']?>" />
                  </div>
                  <button type="submit" name="save" class="btn btn-primary-dt">Submit</button>
                  <a href="Edit_video.php?materi_id=<?php echo $_GET['materi_id']?>"><button type="button" class="btn btn-sukses ml-1">Kembali</button> </a> 
                  <!-- btn sukses muncul jika sudah submit -->
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
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
