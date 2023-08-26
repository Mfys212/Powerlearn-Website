<?php $active_pgt = 'active'; include "sidebar.php"; ?>
    <section class="home">
        <div class="card">
          <div class="card-body">
            <div class="card-title">
              <h1 class="subtitle">Pengaturan</h1>
              <?php
                if(isset($_POST['simpan'])){
                  $nama = $_POST['nama'];
                  $email = $_POST['email'];
                  $no_hp = $_POST['no_hp'];
                  $alamat = $_POST['alamat'];
                  $namafile = $_FILES['foto']['name'];
                  $tipefile = $_FILES['foto']['type'];
                  $tmpfile = $_FILES['foto']['tmp_name'];
                  $folder = "../admin/foto_guru/".$namafile;
                  if(empty($namafile)){
                    $sql = mysqli_query($mysqli, "UPDATE guru SET nama_guru = '$nama', alamat = '$alamat', email = '$email', no_hp = '$no_hp' WHERE id_guru = '$_SESSION[id_guru]'");
                  }else{
                    move_uploaded_file($tmpfile, $folder);
                    $sql = mysqli_query($mysqli, "UPDATE guru SET nama_guru = '$nama', alamat = '$alamat', email = '$email', no_hp = '$no_hp', foto = '$namafile' WHERE id_guru = '$_SESSION[id_guru]'");
                  }
                  if($sql){
                    header("location:cek.php");
                  }else{
                    ?>
                    <div class="alert alert-danger">Gagal Edit Data</div>
                    <?php
                  }
                }
              ?>
              <form action="" method="POST" enctype="multipart/form-data">
              <div class="row no-gutters pt-3">
                <div class="col-1 mr-3">
                  <img src="../admin/foto_guru/<?php echo $_SESSION['foto']?>" width="80px" height="80px" style="border-radius:50px;" />
                </div>
                <div class="col pt-4">
                  <input type="file" title="pilih foto" name="foto" class="" accept="image/*" id="exampleFormControlFile1" />
                </div>
              </div>
              <div class="row no-gutters pt-5">
                <div class="col">

                  
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" value="<?php echo $_SESSION['nama_guru']?>" id="exampleFormControlInput1" placeholder="Masukan Nama" />
                  </div>
                  <!-- <div class="form-group">
                    <label for="exampleFormControlInput1">Kelas</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukuan Kelas" />
                  </div> -->
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $_SESSION['email']?>" id="exampleFormControlInput1" placeholder="Masukan Email" />
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1">No HandPhone</label>
                    <input type="text" class="form-control" name="no_hp" value=<?php echo $_SESSION['no_hp']?> id="exampleFormControlInput1" placeholder="0812124422109" />
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Alamat</label>
                    <textarea class="form-control" placeholder="Alamat" name="alamat" id="exampleFormControlTextarea1" rows="3"><?php echo $_SESSION['alamat']?></textarea>
                  </div>
                  <button type="submit" name="simpan" class="btn btn-primary-dt text-white">Perbarui</button>
                
                </div>
              </div>
              </form>
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
