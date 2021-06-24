	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(images/img_bg_4.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">Kritik &amp; Saran</h1>
									<h2>Silahkan Login Terlebih Dahulu Untuk Menyampaikan Kritik saran anda</h2>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="fh5co-contact-info">
						<h3>Sampaikan Kritik Saran Anda</h3>
						
					</div>

				</div>
				<div class="col-md-6 animate-box">
					<h3>Whats In Your Opinions</h3>
					<form  action="<?php echo base_url('kritik/tambah_kritik') ?>" method="post" >
						
						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="subject">Subject</label> -->
								<input type="text" name="name" class="form-control" placeholder="Masukkan Nama Anda">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="subject">Subject</label> -->
								<input type="text" name="kritik" class="form-control" placeholder="Masukkan Kritik Anda">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="message">Message</label> -->
								<textarea name="saran" id="message" cols="30" rows="10" class="form-control" placeholder="Masukkan Saran Anda"></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Send Message" class="btn btn-primary">
						</div>

					</form>		
				</div>
			</div>
			
		</div>
	</div>
	<div id="map" class="fh5co-map"></div>