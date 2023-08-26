<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">POWERLEARN</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="foto_admin/<?php echo $_SESSION['foto']; ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['nama_lengkap']; ?></a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <?php
            function menu($link, $menu, $icon){
              $ret = ' <li id="menu" class="nav-item">
            <a href="'.$link.'" class="nav-link">
              <i class="nav-icon '.$icon.'"></i>
              <p>
                '.$menu.'      
              </p>
            </a>
          </li> ';
          return $ret;
          }
          echo menu('dashboard.php', 'Dashboard', 'fas fa-tachometer-alt');
          echo menu('admin.php', 'Admin', 'fas fa-user');
          echo menu('guru.php', 'Guru', 'fas fa-chalkboard-teacher');
          echo menu('siswa.php', 'Siswa', 'fas fa-users');
          echo menu('kelas.php', 'Kelas', 'fas fa-university');
          echo menu('mapel.php', 'Mapel', 'fas fa-book');
          echo menu('jenis_member.php', 'Jenis Member', 'fas fa-trophy');
          echo menu('member.php', 'Member', 'fas fa-trophy');
          ?>
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                Logout      
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
