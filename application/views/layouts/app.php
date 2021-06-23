<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <?php $this->load->view('layouts/head'); ?>
</head>
<body class="hold-transition sidebar-mini" onload="tampilkanwaktu();setInterval('tampilkanwaktu()', 1000);">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">        
        <span id="clock"></span> 
        <?php
        $hari = date('l');
        /*$new = date('l, F d, Y', strtotime($Today));*/
        if ($hari=="Sunday") {
         echo "Minggu";
        }elseif ($hari=="Monday") {
         echo "Senin";
        }elseif ($hari=="Tuesday") {
         echo "Selasa";
        }elseif ($hari=="Wednesday") {
         echo "Rabu";
        }elseif ($hari=="Thursday") {
         echo("Kamis");
        }elseif ($hari=="Friday") {
         echo "Jum'at";
        }elseif ($hari=="Saturday") {
         echo "Sabtu";
        }
        ?>,
        <!--/*Selesai Menampilkan Hari*/

        /*Menampilkan Tanggal*/-->
        <?php
        $tgl =date('d');
        echo $tgl;
        $bulan =date('F');
        if ($bulan=="January") {
         echo " Januari ";
        }elseif ($bulan=="February") {
         echo " Februari ";
        }elseif ($bulan=="March") {
         echo " Maret ";
        }elseif ($bulan=="April") {
         echo " April ";
        }elseif ($bulan=="May") {
         echo " Mei ";
        }elseif ($bulan=="June") {
         echo " Juni ";
        }elseif ($bulan=="July") {
         echo " Juli ";
        }elseif ($bulan=="August") {
         echo " Agustus ";
        }elseif ($bulan=="September") {
         echo " September ";
        }elseif ($bulan=="October") {
         echo " Oktober ";
        }elseif ($bulan=="November") {
         echo " November ";
        }elseif ($bulan=="December") {
         echo " Desember ";
        }
        $tahun=date('Y');
        echo $tahun;
        ?>
      </a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo base_url('assets/') ?>dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo base_url('assets/') ?>dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo base_url('assets/') ?>dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?=base_url('assets/smp.png')?>" height="50" alt="navbar brand" class="navbar-brand">
      <span class="brand-text font-weight-light">SMPN 24 BANJARMASIN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url(''.$this->auth->user()->image )?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $this->auth->user()->name ?></a>
        </div>
      </div>
 
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <?php if($this->auth->user()->level == 1): ?>
          <li class="nav-item">
            <a href="<?php echo base_url('admin') ?>" class="nav-link <?= ($active == 'dashboard') ? 'active' : '' ?>">
              <i class="nav-icon fas fa-home"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url('admin/user') ?>" class="nav-link <?= ($active == 'user') ? 'active' : '' ?>">
              <i class="nav-icon fas fa-user"></i>
              <p>Admin</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url('admin/kegiatan') ?>" class="nav-link <?= ($active == 'kegiatan') ? 'active' : '' ?>">
              <i class="nav-icon fas fa-calendar-week"></i>
              <p>Kegiatan Sekolah</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url('admin/prestasi') ?>" class="nav-link <?= ($active == 'prestasi') ? 'active' : '' ?>">
              <i class="nav-icon fas fa-medal"></i>
              <p>Prestasi</p>
            </a>
          </li>

           <li class="nav-item">
            <a href="<?php echo base_url('admin/galeri') ?>" class="nav-link <?= ($active == 'galeri') ? 'active' : '' ?>">
              <i class="nav-icon fas fa-images"></i>
              <p>Galeri Photo</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url('admin/staff') ?>" class="nav-link <?= ($active == 'staff') ? 'active' : '' ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>Tenaga Pendidik/Staff</p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="<?php echo base_url('admin/jadwal') ?>" class="nav-link <?= ($active == 'jadwal') ? 'active' : '' ?>">
              <i class="nav-icon fas fa-book"></i>
              <p>Jadwal Pembelajaran</p>
            </a>
          </li>
          
           <li class="nav-item">
            <a href="<?php echo base_url('admin/fasilitas') ?>" class="nav-link <?= ($active == 'fasilitas') ? 'active' : '' ?>">
              <i class="nav-icon fas fa-school"></i>
              <p>Fasilitas</p>
            </a>
          </li>
          
           <li class="nav-item">
            <a href="<?php echo base_url('admin/ekschool') ?>" class="nav-link <?= ($active == 'ekschool') ? 'active' : '' ?>">
              <i class="nav-icon fas fa-star"></i>
              <p>Ekschool</p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="<?php echo base_url('login/logout') ?>" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>
        <?php endif ?>

        <?php if($this->auth->user()->level == 2): ?>
          <li class="nav-item">
            <a href="<?php echo base_url('user') ?>" class="nav-link <?= ($active == 'dashboard') ? 'active' : '' ?>">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo base_url('login/logout') ?>" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        <?php endif ?>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php $this->load->view($page) ?>
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <!-- Default to the left -->
    <center><strong>Copyright &copy; 2021 <a href="#">SMPN 24 BANJARMASIN</a>.</strong> All rights reserved.</center>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
  <?php $this->load->view('layouts/foot'); ?>
  \<script type="text/javascript">        
    function tampilkanwaktu(){         //fungsi ini akan dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik    
    var waktu = new Date();            //membuat object date berdasarkan waktu saat 
    var sh = waktu.getHours() + "";    //memunculkan nilai jam, //tambahan script + "" supaya variable sh bertipe string sehingga bisa dihitung panjangnya : sh.length    //ambil nilai menit
    var sm = waktu.getMinutes() + "";  //memunculkan nilai detik    
    var ss = waktu.getSeconds() + "";  //memunculkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
    document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
    }
</script>
</body>
</html>
