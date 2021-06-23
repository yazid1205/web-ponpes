	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(images/img_bg_4.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">Prestasi &amp; Sekolah</h1>
									<h2>Halaman Prestasi Berisi Tentang Info Prestasi dan Capaian Dari Siswa maupun Sekolah SMPN 24 Banjarmasi</a></h2>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<div id="fh5co-blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Perstasi Siswa &amp; Sekolah</h2>
					<p>Informasi Terkait Capaian</p>
				</div>
			</div>
			<div class="row row-padded-mb">
			  <?php foreach ($prestasi->result() as $x => $d): ?>
				<div class="col-md-4 animate-box">
					<div class="fh5co-event">
						<div class="date text-center"><span><a data-fancybox="gallery" href="<?= base_url($d->image) ?>"><img src="<?= base_url($d->image) ?>" height="50px" weight="50px"></a></span></div>
						<h3><a href="#"><?= $d->name_peserta ?></a></h3>
						<p> <i class="nav-icon fas fa-chess"></i>  <?= $d->name_lomba ?><br> <i class="nav-icon fas fa-medal"></i>  <?= $d->prestasi ?><br> <i class="nav-icon fas fa-layer-group"></i>  <?= $d->tingkat ?></p>
					</div>
				</div>
			  <?php endforeach ?>
			</div>
			
		</div>
	</div>
<!--
	<div id="fh5co-register" style="background-image: url(images/img_bg_2.jpg);">
		<div class="overlay"></div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2 animate-box">
				<div class="date-counter text-center">
					<h2>Get 400 of Online Courses for Free</h2>
					<h3>By Mike Smith</h3>
					<div class="simply-countdown simply-countdown-one"></div>
					<p><strong>Limited Offer, Hurry Up!</strong></p>
					<p><a href="#" class="btn btn-primary btn-lg btn-reg">Register Now!</a></p>
				</div>
			</div>
		</div>
	</div>
-->