<?php $active_guru = 'active'; include 'sidebar.php'; ?>

    <section class="home">
      <div class="row no-gutters  ">
        <div class="card">
          <div class="card-body">

            <label for="check">
              <a href="editsemuaquiz.php?materi_id=<?php echo $_GET['materi_id']?>"><i class="fas fa-arrow-left"></i></a>
            </label>  

            <div class="card-title">
              <h1 class="subtitle">Edit Quis</h1>
            </div>
            <?php
              $sql = mysqli_query($mysqli, "SELECT * FROM detail_kuis WHERE id_kuis = '$_GET[kuis_id]'");
              while($data=mysqli_fetch_array($sql)){
                ?>
                <form action="" method="POST">
              <div class="form-group">
                <label for="exampleInputEmail1">Pertanyaan</label>   
                <!-- muncul jika sudah submit -->
                <textarea name="pertanyaan" readonly id="" class="form-control" cols="" rows="7" required><?php echo $data['pertanyaan']?></textarea>
              </div>
              <div class="form-group">
                <label for="">Jawaban A</label>
                <input type="text" readonly name="a" class="form-control" id="exampleInputtext1" value="<?php echo $data['pil_a']?>" />
              </div>
              <div class="form-group">
                <label for="exampleInputtext1">Jawaban B</label>
                <input type="text" readonly name="b" class="form-control" id="exampleInputtext1" value="<?php echo $data['pil_b']?>" />
              </div>
              <div class="form-group">
                <label for="exampleInputtext1">Jawaban C</label>
                <input type="text" readonly name="c" class="form-control" id="exampleInputtext1" value="<?php echo $data['pil_c']?>"/>
              </div>
              <div class="form-group">
                <label for="exampleInputtext1">Jawaban D</label>
                <input type="text" readonly name="d" class="form-control" id="exampleInputtext1" value="<?php echo $data['pil_d']?>"/>
              </div>
              <div class="form-group">
                <label for="exampleInputtext1">Jawaban E</label>
                <input type="text" readonly name="e" class="form-control" id="exampleInputtext1" value="<?php echo $data['pil_e']?>"/>
              </div>
              <div class="form-group">
                <label for="exampleInputtext1">Jawaban Benar</label>
                <input value="<?php 
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
                                ?>" readonly name="jwb_bnr" id="jwb_bnr" class="form-control">
                                
                  </input>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Penjelasan</label>   
                <textarea name="penjelasan" readonly id="" class="form-control" cols="" rows="7" required><?php echo $data['penjelasan_q']?></textarea>
              </div>
            </form>
            <a href="edit_detail_quiz.php?materi_id=<?php echo $_GET['materi_id']?>&kuis_id=<?php echo $_GET['kuis_id']?>&detail_id=<?php echo $data['id_detail_kuis']?>"><button name="edit" class="btn btn-sukses mb-5"><i class="fas fa-edit"></i> Perbarui</button></a>
                <?php
              }
            ?>
            
              <div class="mt-5">
                <!-- <button type="submit" class="btn btn-primary-dt">Submit</button> -->
                <a href="editsemuaquiz.php?materi_id=<?php echo $_GET['materi_id']?>"><button  class="btn btn-primary-dt">Kembali</button> </a>
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
