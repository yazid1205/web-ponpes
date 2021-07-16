	
	<div id="fh5co-blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<?php foreach ($beri->result() as $x => $d): ?>					
					<span><a data-fancybox="gallery" href="<?= base_url($d->gambar) ?>"><img src="<?= base_url($d->gambar) ?>" height="200px" weight="200px"></a></span>
					<h2><?= $d->judul ?></h2>
					<p><?= $d->isi ?></p>
			  <?php endforeach ?>

				</div>
			</div>	

			<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-md-push-1 animate-box"></div>
				<div class="col-md-4 col-md-push-1 animate-box">
					
					<div class="fh5co-contact-info">
						<h4>Komentar</h4>
						<ul>
						<?php foreach ($komen->result() as $x => $d): ?>	
							<b><?= $d->id_user ?></b>
<<<<<<< HEAD
							<?= $d->isi_komen ?>
=======
							<?= $d->isi_komen?>
>>>>>>> 5db454125d10f674d8409624b828bb61e0980dc9
							<hr />
			  			<?php endforeach ?>
			  			</ul>
					</div>
					<div><br><br>
					<h4>Sampaikan Komentar Anda</h4>
					<form action="<?php echo base_url('detailBerita/tambah_komentar') ?>" method="post">

						<div class="row form-group">						
							<div class="col-md-12">
						<select class="form-control" name="id">	
							<?php foreach ($beri->result() as $x => $d): ?>	
								<option value="<?= $d->id ?>"><?= $d->judul ?></option>
			  				<?php endforeach ?>
						</select></div>
					</div>
						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input type="email" name="email" id="email" class="form-control" placeholder="Email Anda">
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

					</form>	
					</div>
				</div>
				<div class="col-md-4 col-md-push-1 animate-box"></div>
				</div>
			
		</div>
	</div>	
		</div>
	</div>

