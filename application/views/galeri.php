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
             <button data-toggle="modal" data-target="#komen_<?=$d->id?>"><img src="<?= base_url($d->image) ?>"  height="200px" weight="200px"></button><br><?=$d->caption?>
            </div>
                        <?php endforeach ?>
        </div>
    </div>

<?php foreach ($galeri->result() as $x => $d): ?>
<div class="modal fade" id="komen_<?=$d->id?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Detail</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="container">
                <center><a data-fancybox="gallery" href="<?= base_url($d->image) ?>"> <img src="<?= base_url($d->image) ?>"  height="200px" weight="200px"></a>
            	</center><p><?= ($d->caption) ?></p><br>
            	
            <br><br>
					<h3>Sampaikan Komentar Anda</h3>
					<form action="<?php echo base_url('galeri/tambah_komentar') ?>" method="post">
						<div class="row form-group">						
							<div class="col-md-6">
						<select class="form-control" name="id">		
								<option value="<?= $d->id ?>"><?= $d->caption ?></option>
						</select></div>
					</div>
						<div class="row form-group">
							<div class="col-md-6">
								<!-- <label for="email">Email</label> -->
								<input type="email" name="email" id="email" class="form-control" placeholder="Email Anda">
							</div>
						</div>
 
						<div class="row form-group">
							<div class="col-md-6">
								<!-- <label for="message">Message</label> -->
								<textarea name="komentar" id="message" cols="30" rows="10" class="form-control" placeholder="Masukkan Komentar Anda"></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Kirim Komentar" class="btn btn-primary">
						</div>

					</form>	
					</div>
					</div>
        </div>
    </div>
</div>
<?php endforeach ?>