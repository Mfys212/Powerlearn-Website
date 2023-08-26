<?php $active_guru = 'active'; include 'sidebar.php'; ?>

    <section class="home">
      <div class="row no-gutters  ">
        <div class="card">
          <div class="card-body">

            <label for="check">
              <a href="edit_quis.php?materi_id=<?php echo $_GET['materi_id']?>&kuis_id=<?php echo $_GET['kuis_id']?>"><i class="fas fa-arrow-left"></i></a>
            </label>  
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
                    if ($jwb_bnr == "A"){
                        $jawaban_benar = $pil_a;
                    }elseif($jwb_bnr == "B"){
                        $jawaban_benar = $pil_b;
                    }elseif($jwb_bnr == "C"){
                        $jawaban_benar = $pil_c;
                    }elseif($jwb_bnr == "D"){
                        $jawaban_benar = $pil_d;
                    }elseif($jwb_bnr == "E"){
                        $jawaban_benar = $pil_e;
                    }   

                    $sql = mysqli_query($mysqli, "UPDATE detail_kuis SET pertanyaan = '$pertanyaan', pil_a = '$pil_a', pil_b = '$pil_b', pil_c = '$pil_c', pil_d = '$pil_d', pil_e = '$pil_e', jwb_bnr = '$jawaban_benar', penjelasan_q = '$penjelasan' WHERE id_detail_kuis = '$_GET[detail_id]'");
                    if($sql){
                        ?>
                        <div class="alert alert-success">Sukses Edit Quiz</div>
                        <?php
                    }else{
                        ?>
                        <div class="alert alert-danger">Gagal Edit Data</div>
                        <?php
                    }
                }
                
              ?>
            <div class="card-title">
              <h1 class="subtitle">Edit Quis</h1>
            </div>
            <?php
              $sql = mysqli_query($mysqli, "SELECT * FROM detail_kuis WHERE id_detail_kuis = '$_GET[detail_id]'");
              $data=mysqli_fetch_array($sql)
            ?>
                <form action="" method="POST">
              <div class="form-group">
                <label for="exampleInputEmail1">Pertanyaan</label>   
                <!-- muncul jika sudah submit -->
                <textarea name="pertanyaan" id="" class="form-control" cols="" rows="7" required><?php echo $data['pertanyaan']?></textarea>
              </div>
              <div class="form-group">
                <label for="">Jawaban A</label>
                <input type="text" name="a" class="form-control" id="exampleInputtext1" value="<?php echo $data['pil_a']?>" />
              </div>
              <div class="form-group">
                <label for="exampleInputtext1">Jawaban B</label>
                <input type="text" name="b" class="form-control" id="exampleInputtext1" value="<?php echo $data['pil_b']?>" />
              </div>
              <div class="form-group">
                <label for="exampleInputtext1">Jawaban C</label>
                <input type="text" name="c" class="form-control" id="exampleInputtext1" value="<?php echo $data['pil_c']?>"/>
              </div>
              <div class="form-group">
                <label for="exampleInputtext1">Jawaban D</label>
                <input type="text" name="d" class="form-control" id="exampleInputtext1" value="<?php echo $data['pil_d']?>"/>
              </div>
              <div class="form-group">
                <label for="exampleInputtext1">Jawaban E</label>
                <input type="text" name="e" class="form-control" id="exampleInputtext1" value="<?php echo $data['pil_e']?>"/>
              </div>
              <div class="form-group">
                <label for="exampleInputtext1">Jawaban Benar</label>
                <select name="jwb_bnr" id="jwb_bnr" class="form-control">
                <option value="<?php 
                                  if($data['jwb_bnr'] == $data['pil_a']){
                                    $i = "A";
                                    echo $i;
                                  }elseif($data['jwb_bnr'] == $data['pil_b']){
                                    $i = "B";
                                    echo $i;
                                  }elseif($data['jwb_bnr'] == $data['pil_c']){
                                    $i = "C";
                                    echo $i;
                                  }elseif($data['jwb_bnr'] == $data['pil_d']){
                                    $i = "D";
                                    echo $i;
                                  }elseif($data['jwb_bnr'] == $data['pil_e']){
                                    $i = "E";
                                    echo $i;
                                  }
                                ?>">
                                <?php echo $i; ?>
                  </option>
                                    <?php
                                        if($i == "A"){
                                            ?>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                            <?php
                                        }elseif($i == "B"){
                                            ?>
                                            <option value="A">A</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                            <?php
                                        }elseif($i == "C"){
                                            ?>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                            <?php
                                        }elseif($i == "D"){
                                            ?>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="E">E</option>
                                            <?php
                                        }elseif($i == "E"){
                                            ?>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <?php
                                        }
                                    ?>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Penjelasan</label>   
                <textarea name="penjelasan" id="" class="form-control" cols="" rows="7" required><?php echo $data['penjelasan_q']?></textarea>
              </div>
              <button name="save" type="submit" class="btn btn-primary-dt">Submit</button>
            </form>
                
              <div class="mt-5">
                <!-- <button type="submit" class="btn btn-primary-dt">Submit</button> -->
            <a href="edit_quis.php?materi_id=<?php echo $_GET['materi_id']?>&kuis_id=<?php echo $_GET['kuis_id']?>"><button  class="btn btn-sukses mb-5"><i class="fas fa-back"></i>Kembali</button></a>
                 
              </div>
              <!-- btn sukses muncul jika sudah submit -->

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
