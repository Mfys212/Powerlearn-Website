<?php $active_guru = 'active'; include "sidebar.php"; ?>
    <section class="home">
      <div class="row no-gutters">
        <div class="card">
          <div class="card-body">
            <a href="<?php
                        if(empty($_GET['judul']) && empty($_GET['bab_id'])){
                          ?>
                          editsemuaquiz.php?materi_id=<?php echo $_GET['materi_id']?>
                          <?php
                        }else{
                          ?>
                          tambah_materi.php?judul=<?php echo $_GET['judul']?>&bab_id=<?php echo $_GET['bab_id'] ?>
                          <?php
                        }
                      ?>"><i class="fas fa-arrow-left"></i></a>
          <br></label>
          <?php 
                if(isset($_POST['save'])){
                    $pertanyaan = $_POST['pertanyaan'];
                    $pil_a = $_POST['a'];
                    $pil_b = $_POST['b'];
                    $pil_c = $_POST['c'];
                    $pil_d = $_POST['d'];
                    $pil_e = $_POST['e'];
                    $penjelasan = $_POST['penjelasan'];
                    $jwb_bnr = $_POST['jwb_bnr'];
                    $jml = count($pertanyaan);
                    for($i=0; $i<$jml; $i++){
                      if ($jwb_bnr[$i] == "A"){
                        $jawaban_benar[$i] = $pil_a[$i];
                      }elseif($jwb_bnr[$i] == "B"){
                        $jawaban_benar[$i] = $pil_b[$i];
                      }elseif($jwb_bnr[$i] == "C"){
                        $jawaban_benar[$i] = $pil_c[$i];
                      }elseif($jwb_bnr[$i] == "D"){
                        $jawaban_benar[$i] = $pil_d[$i];
                      }elseif($jwb_bnr[$i] == "E"){
                        $jawaban_benar[$i] = $pil_e[$i];
                      } 
                    }   
                    
                    $select = mysqli_query($mysqli, "SELECT * FROM kuis WHERE judul = '$_GET[judul_quis]' AND id_materi = '$_GET[materi_id]'");
                    $rryy = mysqli_fetch_array($select);
                    
                    for($u=0; $u<$jml; $u++){
                      $sql = mysqli_query($mysqli, "INSERT INTO detail_kuis (id_kuis, pertanyaan, pil_a, pil_b, pil_c, pil_d, pil_e, jwb_bnr, penjelasan_q) VALUES ('$rryy[id_kuis]', '$pertanyaan[$u]', '$pil_a[$u]', '$pil_b[$u]', '$pil_c[$u]', '$pil_d[$u]', '$pil_e[$u]', '$jawaban_benar[$u]', '$penjelasan[$u]')");
                    }
                    if($sql){
                        ?>
                        <script>
                          alert("Sukses Menambah Quis");
                          window.location.href = "<?php
                                                    if(empty($_GET['bab_id']) && empty($_GET['judul'])){
                                                      ?>
                                                      tambah_quis.php?materi_id=<?php echo $_GET['materi_id']?>
                                                      <?php
                                                    }else{
                                                      ?>
                                                      tambah_quis.php?materi_id=<?php echo $_GET['materi_id']?>&judul=<?php echo $_GET['judul']?>&bab_id=<?php echo $_GET['bab_id']?>
                                                      <?php
                                                    }
                                                  ?>"
                        </script>
                        <?php
                    }else{
                        ?>
                        <div class="alert alert-danger">Gagal Menambah Data</div>
                        <?php
                    }
                }
                if(isset($_POST['jdl'])){
                    $materi = $_GET['materi_id'];
                    $judul = $_POST['judul'];
                    $waktu = $_POST['waktu'];
                    $random = $_POST['rn'];
                    $tampil = $_POST['tampil'];

                    $sqlp = mysqli_query($mysqli, "SELECT * FROM kuis WHERE id_materi = '$materi' AND judul = '$judul'");
                    $wr = mysqli_num_rows($sqlp);

                    if($wr > 0){
                      ?>
                      <div class="alert alert-warning">Judul Quis Sudah Ada Dalam Materi Ini!</div>
                      <?php
                    }else{
                      $o = mysqli_query($mysqli, "INSERT INTO kuis (id_materi, judul, waktu, random, tampil) VALUES ('$materi', '$judul', '$waktu', '$random', '$tampil')");
                      if($o){
                        if(empty($_GET['judul']) && empty($_GET['bab_id'])){
                          header("location:tambah_quis.php?materi_id=".$_GET['materi_id']."&judul_quis=".$judul);
                        }else{
                          header("location:tambah_quis.php?materi_id=".$_GET['materi_id']."&judul_quis=".$judul."&judul=".$_GET['judul']."&bab_id=".$_GET['bab_id']);
                        }  
                      }else{
                        echo "p";
                      }
                    }
                }
              ?>
          
          <!-- muncul jika sudah submit -->
            <?php
              if(empty($_GET['judul_quis'])){
                ?>
                <div class="card-title">
                  <h1 class="subtitle">Tambah Quis</h1>
                </div>
                <div class="row">
                  <div class="col">
                    <form action="" method="POST">
                      <div class="form-group">
                        <label for="judul">Judul Quis</label>
                        <input type="text" name="judul" placeholder="Judul Quis" class="form-control" id="judul" aria-describedby="emailHelp" required/>
                      </div>
                      <div class="form-group">
                        <label for="judul">Waktu (Menit)</label>
                        <input type="number" name="waktu" placeholder="Waktu Quis" class="form-control" id="waktu" aria-describedby="emailHelp" required/>
                      </div>
                      <div class="form-group">
                        <label for="judul">Kuis di Tampilkan</label>
                        <select name="tampil" id="tampil" class="form-control">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5" selected>5</option>
                        </select>
                      </div>
                      <label for="">Random</label>
                      <div class="form-group">
                        <input type="radio" name="rn" placeholder="" class="" id="waktu" value="Ya" aria-describedby="emailHelp" required/>
                        <label for="judul">Ya</label>
                      </div>
                      <div class="form-group">          
                        <input type="radio" checked name="rn" placeholder="" class="" id="waktu" value="Tidak" aria-describedby="emailHelp" required/>
                        <label for="judul">Tidak</label>
                    </div>
                      <button type="submit" name="jdl" class="btn btn-primary-dt">Submit</button>
                      <a href="<?php
                        if(empty($_GET['judul']) && empty($_GET['bab_id'])){
                          ?>
                          editsemuaquiz.php?materi_id=<?php echo $_GET['materi_id']?>
                          <?php
                        }else{
                          ?>
                          tambah_materi.php?judul=<?php echo $_GET['judul']?>&bab_id=<?php echo $_GET['bab_id'] ?>
                          <?php
                        }
                      ?>"><button type="button" class="btn btn-sukses ml-1">Kembali</button> </a> 
                      <!-- btn sukses muncul jika sudah submit -->
                    </form>
                  </div>
                </div>
                <?php
              }else{
                ?>
                  <div class="card-title">
                    <h1 class="subtitle">Tambah Quis <?php echo $_GET['judul_quis']?></h1>
                  </div>
            <form action="" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="exampleInputEmail1">Pertanyaan 1</label>
                <textarea name="pertanyaan[]" id="" class="form-control" cols="" rows="7" required></textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Jawaban A</label>
                <input type="text" name="a[]" class="form-control" id="exampleInputPassword1" required/>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Jawaban B</label>
                <input type="text" name="b[]" class="form-control" id="exampleInputPassword1" required/>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Jawaban C</label>
                <input type="text" name="c[]" class="form-control" id="exampleInputPassword1" required/>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Jawaban D</label>
                <input type="text" name="d[]" class="form-control" id="exampleInputPassword1" required/>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Jawaban E</label>
                <input type="text" name="e[]" class="form-control" id="exampleInputPassword1" required/>
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Jawaban Benar</label>
                <select class="form-control" name="jwb_bnr[]" id="exampleFormControlSelect1" required>
                  <option>Pilih Jawaban</option>
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="C">C</option>
                  <option value="D">D</option>
                  <option value="E">E</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Penjelasan</label>
                <textarea name="penjelasan[]" id="" class="form-control" cols="" rows="7" required></textarea>
              </div>
              <br>
              <div class="form-group">
                <label for="exampleInputEmail1">Pertanyaan 2</label>
                <textarea name="pertanyaan[]" id="" class="form-control" cols="" rows="7" required></textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Jawaban A</label>
                <input type="text" name="a[]" class="form-control" id="exampleInputPassword1" required/>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Jawaban B</label>
                <input type="text" name="b[]" class="form-control" id="exampleInputPassword1" required/>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Jawaban C</label>
                <input type="text" name="c[]" class="form-control" id="exampleInputPassword1" required/>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Jawaban D</label>
                <input type="text" name="d[]" class="form-control" id="exampleInputPassword1" required/>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Jawaban E</label>
                <input type="text" name="e[]" class="form-control" id="exampleInputPassword1" required/>
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Jawaban Benar</label>
                <select class="form-control" name="jwb_bnr[]" id="exampleFormControlSelect1" required>
                  <option>Pilih Jawaban</option>
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="C">C</option>
                  <option value="D">D</option>
                  <option value="E">E</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Penjelasan</label>
                <textarea name="penjelasan[]" id="" class="form-control" cols="" rows="7" required></textarea>
              </div>
              <br>
              <div class="form-group">
                <label for="exampleInputEmail1">Pertanyaan 3</label>
                <textarea name="pertanyaan[]" id="" class="form-control" cols="" rows="7" required></textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Jawaban A</label>
                <input type="text" name="a[]" class="form-control" id="exampleInputPassword1" required/>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Jawaban B</label>
                <input type="text" name="b[]" class="form-control" id="exampleInputPassword1" required/>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Jawaban C</label>
                <input type="text" name="c[]" class="form-control" id="exampleInputPassword1" required/>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Jawaban D</label>
                <input type="text" name="d[]" class="form-control" id="exampleInputPassword1" required/>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Jawaban E</label>
                <input type="text" name="e[]" class="form-control" id="exampleInputPassword1" required/>
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Jawaban Benar</label>
                <select class="form-control" name="jwb_bnr[]" id="exampleFormControlSelect1" required>
                  <option>Pilih Jawaban</option>
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="C">C</option>
                  <option value="D">D</option>
                  <option value="E">E</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Penjelasan</label>
                <textarea name="penjelasan[]" id="" class="form-control" cols="" rows="7" required></textarea>
              </div>
              <br>
              <div class="form-group">
                <label for="exampleInputEmail1">Pertanyaan 4</label>
                <textarea name="pertanyaan[]" id="" class="form-control" cols="" rows="7" required></textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Jawaban A</label>
                <input type="text" name="a[]" class="form-control" id="exampleInputPassword1" required/>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Jawaban B</label>
                <input type="text" name="b[]" class="form-control" id="exampleInputPassword1" required/>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Jawaban C</label>
                <input type="text" name="c[]" class="form-control" id="exampleInputPassword1" required/>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Jawaban D</label>
                <input type="text" name="d[]" class="form-control" id="exampleInputPassword1" required/>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Jawaban E</label>
                <input type="text" name="e[]" class="form-control" id="exampleInputPassword1" required/>
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Jawaban Benar</label>
                <select class="form-control" name="jwb_bnr[]" id="exampleFormControlSelect1" required>
                  <option>Pilih Jawaban</option>
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="C">C</option>
                  <option value="D">D</option>
                  <option value="E">E</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Penjelasan</label>
                <textarea name="penjelasan[]" id="" class="form-control" cols="" rows="7" required></textarea>
              </div>
              <br>
              <div class="form-group">
                <label for="exampleInputEmail1">Pertanyaan 5</label>
                <textarea name="pertanyaan[]" id="" class="form-control" cols="" rows="7" required></textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Jawaban A</label>
                <input type="text" name="a[]" class="form-control" id="exampleInputPassword1" required/>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Jawaban B</label>
                <input type="text" name="b[]" class="form-control" id="exampleInputPassword1" required/>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Jawaban C</label>
                <input type="text" name="c[]" class="form-control" id="exampleInputPassword1" required/>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Jawaban D</label>
                <input type="text" name="d[]" class="form-control" id="exampleInputPassword1" required/>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Jawaban E</label>
                <input type="text" name="e[]" class="form-control" id="exampleInputPassword1" required/>
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Jawaban Benar</label>
                <select class="form-control" name="jwb_bnr[]" id="exampleFormControlSelect1" required>
                  <option>Pilih Jawaban</option>
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="C">C</option>
                  <option value="D">D</option>
                  <option value="E">E</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Penjelasan</label>
                <textarea name="penjelasan[]" id="" class="form-control" cols="" rows="7" required></textarea>
              </div>
              <button type="submit" name="save" class="btn btn-primary-dt">Submit</button>
              <a href="tambah_materi.php?judul=<?php echo $_GET['judul']; ?>&bab_id=<?php echo $_GET['bab_id'] ?>"><button type="button" class="btn btn-sukses ml-1">Kembali</button></a>
              <!-- btn sukses muncul jika sudah submit -->
            </form>
                <?php
              }
            ?>
            
          </div>
        </div>
      </div>
    </section>
    <!-- Optional JavaScript; choose one of the two! -->
    <script>
      if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    </script>         
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
