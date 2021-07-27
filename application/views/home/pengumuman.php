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
              <p>Dihalaman Pengumuman Pondok Pesantren Tarbiyatul Furqan</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Jelajah</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Selamat Datang</h1>
              <p>Dihalaman Info Kegiatan Pondok Pesantren Tarbiyatul Furqan</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Jelajah</a></p>
            </div>
          </div>
        </div>
	</div>
	</div>
	<div id="fh5co-blog">
			<div class="row animate-box">
				<div class="col-md-7 col-md-offset-2 text-center fh5co-heading">
					<h2>Halaman Berita dan Pengumuman</h2>
					<p>Berisi tentang informasi kegiatan sekolah atau informasi lainnya terkait Ponpen Tarbiyatul Furqon.</p>
				</div>
			</div>
			<div class="row row-padded-mb">
					<?php foreach ($info->result() as $x => $d): ?>
				<div class="col-md-4">
					<div class="fh5co-event">
						<div class="date text-center"><span><a data-fancybox="gallery" href="<?= base_url($d->gambar) ?>"><img src="<?= base_url($d->gambar) ?>" height="100px" weight="100px"></a></span></div>
						<h3><a href="#"><?= $d->judul ?></a></h3>
						<p><?= substr($d->isi, 0,100) ?>...</p>
						<p><a  href="<?php echo base_url('DetailBerita/index/' .$d->id); ?>">Read More</a></p>
					</div>
				</div>
			  <?php endforeach ?>
				</div>
				
		</div>

