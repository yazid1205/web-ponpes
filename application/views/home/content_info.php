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
              <p>Dihalaman Detail Info Pesantren Tarbiyatul Furqan</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Jelajah</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Selamat Datang</h1>
              <p>Dihalaman Detail Info Pengajar Pondok Pesantren Tarbiyatul Furqan</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Jelajah</a></p>
            </div>
          </div>
        </div>
	</div>
	</div>

			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<?php foreach ($beri->result() as $x => $d): ?>					
					<span><a data-fancybox="gallery" href="<?= base_url($d->gambar) ?>"><img src="<?= base_url($d->gambar) ?>" height="200px" weight="200px"></a></span>
					<h2><?= $d->judul ?></h2>
					<p><?= $d->isi ?></p>
			  <?php endforeach ?>

				</div>
			</div>	
