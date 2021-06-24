	
	<div id="fh5co-blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<?php foreach ($beri->result() as $x => $d): ?>					
					<span><a data-fancybox="gallery" href="<?= base_url($d->gambar) ?>"><img src="<?= base_url($d->gambar) ?>" height="200px" weight="200px"></a></span>
					<h2><?= $d->judul ?></h2>
					<p><?= $d->isi ?></p>
				</div>
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<center><h3>Komentar</h3>
					<form action="<?php echo base_url('kritik/tambah_kritik') ?>" method="post">
						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input type="text" id="email" class="form-control" placeholder="Email Anda">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="message">Message</label> -->
								<textarea name="komentar" id="message" cols="30" rows="10" class="form-control" placeholder="Masukkan Komentar Anda"></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Kirim Komentar" class="btn btn-primary">
						</div>

					</form>	</center>	
				
				</div>
			  <?php endforeach ?>
			</div>		
		</div>
	</div>

