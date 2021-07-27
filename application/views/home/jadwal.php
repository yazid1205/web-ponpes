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
              <p>Dihalaman Jadwal Pelajaran Pondok Pesantren Tarbiyatul Furqan</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn More</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Galeri</h1>
              <p>Temukan Info Mata Pelajaran kami</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse More</a></p>
            </div>
          </div>
        </div>
	</div>

<div class="row row-padded-mb">
				<div class="col-md-12 animate-box">
					<div class="fh5co-event">
						<div class=""><span>Kelas<br><?php foreach ($tujuha->result() as $x => $d): ?><?=$d->kelas?></span></div>
						<h3><a href="#">Wali Kelas: <?=$d->wali?></a></h3>
						<p><span><a data-fancybox="gallery" href="<?= base_url($d->image) ?>"><img src="<?= base_url($d->image) ?>" height="400px" width="900px"></a></span> </p>
                        <?php endforeach ?>
					</div>
				</div>
				<div class="col-md-12 animate-box">
					<div class="fh5co-event">
						<div class=""><span>Kelas<br><?php foreach ($delapana->result() as $x => $d): ?><?=$d->kelas?></span></div>
						<h3><a href="#">Wali Kelas: <?=$d->wali?></a></h3>
						<p><span><a data-fancybox="gallery" href="<?= base_url($d->image) ?>"><img src="<?= base_url($d->image) ?>" height="400px" width="900px"></a></span> </p>
                        <?php endforeach ?>
					</div>
				</div>
				
			</div>