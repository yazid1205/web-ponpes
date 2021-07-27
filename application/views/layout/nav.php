<!-- Static navbar -->
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="<?php echo base_url('home') ?>">Home</a></li>
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profil <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="profil">Sejarah</a></li>
                    <li><a href="Visi">Visi & Misi</a></li>
                    <li><a href="donasi">Donasi</a></li>
                  </ul>
                </li>
              <li><a href="<?php echo base_url('galeri') ?>">Galeri</a></li>
              <li><a href="<?php echo base_url('kegiatan') ?>">Pengumuman</a></li>
              <li><a href="<?php echo base_url('staff') ?>">Pengajar/Guru</a></li>
              <li><a href="<?php echo base_url('jadwal') ?>">Mata Pelajaran</a></li>
              <li><a href="<?php echo base_url('kritik') ?>">Kritik & Saran</a></li>
              <li><a href="<?php echo base_url('kontak') ?>">Kontak</a></li>
              
                <li><a href="<?php echo base_url('login') ?>">Login</a></li>
              </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
      </div> 