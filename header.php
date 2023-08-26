<?php include "admin/koneksi.php"; ?>
<nav class="navbar navbar-expand-lg navbar-light bg-blue fixed-top shadow-sm">
      <div class="container-lg">
        <a class="navbar-brand" href="#"
          ><img src="img/logo/Logo_Powerlearn.png" alt="powerstore"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div 
          class="collapse navbar-collapse bg-blue"
          id="navbarSupportedContent"
        >
          <ul class="navbar-nav mx-auto p-secondary">
            <li class="nav-item <?php if(isset($active_index) && $active_index == "active"){ echo "active"; } ?> ">
              <a class="nav-link" href="index.php">Beranda</a>
            </li>
            <li class="nav-item <?php if(isset($active_kelas) && $active_kelas == "active"){ echo "active"; } ?> ">
              <a class="nav-link" href="pilihan_kelas.php">Kelas</a>
            </li>
            <!-- <li class="nav-item <?php //if(isset($active_detail) && $active_detail == "active"){ echo "active"; } ?> ">
              <a class="nav-link" href="detail_pembayaran.php">Biaya Belajar</a>
            </li> -->
            <li class="nav-item <?php if(isset($active_promo) && $active_promo == "active"){ echo "active"; } ?> ">
              <a class="nav-link" href="promo.php">Promo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Info Dan Tips</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">About</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <a href="paketharga/harga.php"><button type="button" class="btn btn-primary">Langganan Sekarang</button></a>
          </form>
        </div>
      </div>
    </nav>