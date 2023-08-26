<?php $active_pengaturan = 'active'; include "sidebar.php"; ?>

    <section class="home">
        <div class="card">
          <div class="card-body">
            <div class="card-title">
              <h1 class="subtitle">Account</h1>
              <?php 
                if(isset($_POST['save'])){
                  $nama = $_POST['nama'];
                  $email = $_POST['email'];
                  $no_hp = $_POST['no_hp'];
                  $alamat = $_POST['alamat'];
                  $namafile = $_FILES['foto']['name'];
                  $tipefile = $_FILES['foto']['type'];
                  $ukuran = $_FILES['foto']['size'];
                  $tmpfile = $_FILES['foto']['tmp_name'];
                  $folder = "../admin/foto_siswa/".$namafile;

                  if($namafile == ''){
                    $sql = mysqli_query($mysqli, "UPDATE siswa SET nama_siswa = '$nama', email = '$email', no_hp = '$no_hp', alamat = '$alamat' WHERE id_siswa = '$_SESSION[id_siswa]'");
                  }else{
                    move_uploaded_file($tmpfile, $folder);
                    $sql = mysqli_query($mysqli, "UPDATE siswa SET nama_siswa = '$nama', email = '$email', no_hp = '$no_hp', alamat = '$alamat', foto = '$namafile' WHERE id_siswa = '$_SESSION[id_siswa]'");
                  }

                  if($sql){
                    header("location:cek_pengaturan.php");
                  }else{
                    ?>
                    <div class="alert aler-danger">Gagal Edit Data</div>
                    <?php
                  }

                }
              ?>
              <form action="" method="POST" enctype="multipart/form-data">
              <div class="row no-gutters pt-3">
                <div class="col-12 mr-3">
                <?php
                  if($_SESSION['foto'] == ''){
                    ?>
                    <img src="../admin/foto_siswa/default.png" width="80px" height="80px" style="border-radius:50px;"/>
                    <?php
                  }else{
                    ?>
                    <img src="../admin/foto_siswa/<?php echo $_SESSION['foto']?>"  width="80px" height="80px" style="border-radius:50px;"/>
                    <?php
                  }
                ?>
                </div>
                <div class="col-12 pt-4">
                  <input type="file" title="Pilih Foto" name="foto" class="form-control-file" accept="image/*" id="exampleFormControlFile1" />
                </div>
              </div>
                <?php
                  // $sqli = mysqli_query($mysqli, "SELECT * FROM kelas WHERE id_kelas = '$_SESSION[kelas]'");
                  // $array = mysqli_fetch_array($sqli);
                ?>
              <div class="row  pt-5">
                <div class="col-2 col-lg-12 col-md-12 col-sm-2">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Nama" value="<?php echo $_SESSION['nama_siswa'];?>"/>
                  </div>
                  <!-- <div class="form-group">
                    <label for="exampleFormControlInput1">Kelas</label>
                    <select name="kelas" id="kelas" class="form-control">
                      <option value="<?php //echo $array['id_kelas']?>"><?//php echo $array['kelas'] ?></option>
                      <?php
                        // $select = mysqli_query($mysqli, "SELECT * FROM kelas");
                        // while($data = mysqli_fetch_array($select)){
                        //   if($array['id_kelas'] == $data['id_kelas']){
                        //     echo "";
                        //   }
                        //   ?>
                        //   <option value="<?php //echo $data['id_kelas']?>"><?php //echo $data['kelas']?></option>
                        //   <?php
                        // }
                      ?>
                    </select>
                  </div> -->
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukan email" value="<?php echo $_SESSION['email']?>" />
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1">No HandPhone</label>
                    <input type="number" name="no_hp" class="form-control" id="exampleFormControlInput1" placeholder="0812124422109" value=<?php echo $_SESSION['no_hp']?> />
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Alamat</label>
                    <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3"><?php echo $_SESSION['alamat']?></textarea>
                  </div>
                  <button type="submit" name="save" class="btn btn-primary-dt text-white">Perbarui</button>
                
              </div>
              </form>
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
