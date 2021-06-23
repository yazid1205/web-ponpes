	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(images/img_bg_4.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">Ekstrakulikuler</h1>
									<h2>Halaman Ekstrakulikuler Berisi tentang informasi Kegiatan pengembangan siswa dalam bidang olahraga.</h2>
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
				<?php foreach ($ekstra->result() as $x => $d): ?>
				<div class="col-md-4 animate-box">
					<div class="fh5co-event">
						<div class="date text-center"><span><a data-fancybox="gallery" href="<?= base_url($d->image) ?>"><img src="<?= base_url($d->image) ?>" height="50px" weight="50px"></a></span></div>
						<h3><a href="#"><?= $d->name ?></a></h3>
						<p><?= $d->pembina ?><br><?= $d->hari ?><br><?= $d->jam ?></p>
					</div>
				</div>
			  <?php endforeach ?>
			</div>
		</div>
	</div>

	