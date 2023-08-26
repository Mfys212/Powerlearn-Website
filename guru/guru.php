<?php $active_guru = 'active'; include 'sidebar.php'; ?>
    <!-- Overview Tambah Bab dan Materi -->
    <section class="home">
      <div class="row no-gutters">
        <div class="card">
          <div class="card-body">
            <div class="row pt-3 d-flex justify-content-center">
              <div class="col-12 col-md-3 col-sm-12">
                <h4 class="subtitle">Hi <?php echo $_SESSION['nama_guru']; ?></h4>
                <p>Mau ngajarin apa hari ini ?</p>
              </div>
              <div class="col d-flex align-items-center">
                <input class="form-control mr-sm-2" type="search" placeholder="Cari Pelajaran" aria-label="Search" />
              </div>
            </div>

            <div class="row pt-5 tambahbab">
              <div class="col-12 col-sm-12 col-md-3 pt-2"><a href="tambah_bab.php" class="text-decoration-none"><button type="button" class="btn btn-primary-tb btn-md btn-block">Tambah Bab</button></a></div>
              <div class="col-12 col-sm-12 col-md-6 pt-2"><a href="lihat_semua.php" class="text-decoration-none"><button type="button" class="btn btn-outline-primary btn-md btn-block">Lihat Semua Bab dan Materi</button></a></div>
            </div>

            <div class="card-note">
              <div class="row pt-4">
                <div class="col-12">
                  <p class="paragraph note" style="background-color: #f6f8fd">Note : Tambah Bab Merupakan Sebuah Menu Untuk Menambahkan Bab, dan Lihat Semua Bab merupakan sebuah menu untuk Melihat Semua Bab yang telah dibuat.</p>
                </div>
              </div>
            </div>

            <div class="row pt-5 tambahbab">
              <div class="col-12 col-sm-12 col-md-3 pt-2"><a href="tambah_materi.php" class="text-decoration-none"><button type="button" class="btn btn-primary-tb btn-md btn-block">Tambah Materi</button></a></div>
              <div class="col-12 col-sm-12 col-md-6 pt-2"><a href="lihat_semua.php" class="text-decoration-none"><button type="button" class="btn btn-outline-primary btn-md btn-block">Lihat Semua Bab dan Materi</button></a></div>
            </div>
            
            <div class="card-note">
              <div class="row pt-4">
                <div class="col-12">
                  <p class="paragraph note" style="background-color: #f6f8fd">Note : Tambah Bab Merupakan Sebuah Menu Untuk Menambahkan Bab, dan Lihat Semua Bab merupakan sebuah menu untuk Melihat Semua Bab yang telah dibuat.</p>
                </div>
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

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
