       <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Selamat Datang DI</h1>
              <p>Web Profil Pondok Pesantren Tarbiyatul Furqan</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Temukan!!</h1>
              <p> Berbagai Informasi Terkait Pondok Pesantren Ini</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Galeri</h1>
              <p>Temukan Dokumentasi kegiatan kami</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->



      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-8">
          <div class="panel panel-default">
          <div class="panel-body">
          <h2>Selamat datang di Pondok Agama</h2>
          <p>Ponpes Tarbiyatul Furqan merupakan ....</p>
        </div>
        </div>


         <div class="panel panel-default">
          <div class="panel-body">
            <h2>Berita</h2>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
           consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
           cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
           proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          </div>
          </div>

        <div class="col-lg-4">
          <div class="panel panel-default">
          <div class="panel-body">
          <h2>Berita Terkini!</h2>
          <!-- Buku 1 -->
          <div class="row">
           <?php foreach ($info->result() as $x => $d): ?>

                        <div class="date text-center"><span><a data-fancybox="gallery" href="<?= base_url($d->gambar) ?>"><img src="<?= base_url($d->gambar) ?>" height="50px" weight="50px"></a></span></div>
                        <center><h3><?= $d->judul ?></h3>
                        <p><?= substr($d->isi, 0,100) ?>...</p>
                        <p><a  href="<?php echo base_url('DetailBerita/index/' .$d->id); ?>">Read More</a></p> </center><hr>
              <?php endforeach ?>
         
        </div>
        <!-- End Buku 1 -->
        <!-- Buku 1 -->
          
    </div>
    </div>
  </div>
    