	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(images/img_bg_4.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">Galeri &amp; Photo</h1>
									<h2>Selamat Datang Di Halaman Galeri SMPN 24 Banjarmasin</h2>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>
	
    <div id="fh5co-gallery" class="fh5co-bg-section">
        <div class="row text-center">
            <h2><span>Gallery Photo</span></h2>
        </div>
        <div class="row">
        	 <?php foreach ($galeri->result() as $x => $d): ?>
            <div class="col-md-3 col-padded text-center">
                <a data-fancybox="gallery" href="<?= base_url($d->image) ?>"> <img src="<?= base_url($d->image) ?>"  height="200px" weight="200px"></a><br><?=$d->caption?>
            </div>
                        <?php endforeach ?>
        </div>
    </div>
