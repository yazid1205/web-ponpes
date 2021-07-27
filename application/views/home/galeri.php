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
              <h1>Selamat Datang</h1>
              <p>Dihalaman Galeri Pondok Pesantren Tarbiyatul Furqan</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse Galeri</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Galeri</h1>
              <p>Temukan Dokumentasi kegiatan kami</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
	</div>
    <div id="fh5co-gallery" class="fh5co-bg-section">
        <div class="row text-center">
            <h2><span>Gallery Photo</span></h2>
        </div>
        <div class="row">
        	 <?php foreach ($galeri->result() as $x => $d): ?>
            <div class="col-md-3 col-padded text-center">
            <img src="<?= base_url($d->image) ?>"  height="200px" weight="200px"><br><?=$d->caption?>
            </div>
                        <?php endforeach ?>
        </div>
    </div>
