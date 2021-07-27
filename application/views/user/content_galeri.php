	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(images/img_bg_4.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">Detail Photo &amp; Komentar</h1>
									<h2>Selamat Datang Di Halaman Galeri SMPN 24 Banjarmasin</h2>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>
	
    <div id="fh5co-gallery" class="fh5co-bg-section" bgcolor="red">
        <div class="row text-center">
            <h2><span>Gallery Photo</span></h2>
        </div>
        <div class="row">
        	 <?php foreach ($galeri->result() as $x => $d): ?>
            <center>
            	<a data-fancybox="gallery" href="<?= base_url($d->image) ?>"> <img src="<?= base_url($d->image) ?>"  height="500px" weight="500px"></a>
            	<p><?= ($d->caption) ?></p></center><br>
            </div>
                        <?php endforeach ?>
        </div>

        <div id="fh5co-gallery" class="fh5co-bg-section">
        <div class="row text-center">
            <h2><span>Komentar</span></h2>
        </div>
        <div class="row">
        	 <ul>
						<?php foreach ($komen->result() as $x => $d): ?>	

							<b><?= $d->id_user ?></b> : 
							<?= $d->isi_komen?>
							<hr />
			  			<?php endforeach ?>
			  			</ul>
        </div>

