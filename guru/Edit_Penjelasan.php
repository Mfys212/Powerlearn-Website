<?php $active_guru = 'active'; include 'sidebar.php'; ?>

    <section class="home">
      <div class="row">
        <div class="card">
          <div class="card-body">
            <?php
              if(isset($_POST['save'])){
                $judul = $_POST['judul'];
                $penjelasan = $_POST['penjelasan'];
                $namafile = $_FILES['fil']['name'];
                $tipefile = $_FILES['fil']['type'];
                $tmpfile = $_FILES['fil']['tmp_name'];
                $folder = "file_materi/".$namafile;
                if(isset($namafile) && $namafile != ''){
                  if($tipefile != 'application/pdf' && $tipefile != 'application/msword'){
                    ?>
                    <div class="alert alert-warning">Mohon Masukkan File pdf/word ...</div>
                    <?php
                  }else{
                    move_uploaded_file($tmpfile, $folder);
                    $sql = mysqli_query($mysqli, "UPDATE isi_materi SET judul = '$judul', isi_materi = '$namafile', penjelasan = '$penjelasan' WHERE id_isi_materi = '$_GET[id]'");
                  }
                }else{
                  $sql = mysqli_query($mysqli, "UPDATE isi_materi SET judul = '$judul', penjelasan = '$penjelasan' WHERE id_isi_materi = '$_GET[id]'");
                }
              }
            ?>
            <label for="check">
              <a href="editsemuapenjelasan.php?materi_id=<?php echo $_GET['materi_id']?>"><i class="fas fa-arrow-left"></i></a>
            </label>
            <?php
              $sql = mysqli_query($mysqli, "SELECT * FROM isi_materi WHERE id_isi_materi = '$_GET[id]'");
              $data = mysqli_fetch_array($sql);
            ?>
            <div class="card-title">
              <h1 class="subtitle">Edit Penjelasan</h1>
            </div>
            <div class="row">
              <div class="col">
                <form action="" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Judul Penjelasan</label>
                    <input type="text" value="<?php echo $data['judul'] ?>" name="judul" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlFile1">Upload Materi PDF/WORD</label><br>
                    <a href="file_materi/<?php echo $data['isi_materi']?>" class="btn btn-success btn-small" title="Lihat File"><i class="fas fa-search"></i></a>
                    <br><input type="file" name="fil" class="" id="exampleFormControlFile1" />
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Penjelasan</label>
                    <textarea class="form-control" name="penjelasan" id="exampleFormControlTextarea1" rows="3"><?php echo $data['penjelasan']?></textarea>
                  </div>
                  <button type="submit" name="save" class="btn btn-primary-dt">Submit</button>
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
