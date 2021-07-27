

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
              <p>Dihalaman Kritik dan Saran Pondok Pesantren Tarbiyatul Furqan dan</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Jelajah</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Silahkan</h1>
              <p>Sampaikan Kritik Saran Anda Untuk Pondok Pesantren Tarbiyatul Furqan</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Jelajah</a></p>
            </div>
          </div>
        </div>
	</div>
            <div class="row">
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="fh5co-contact-info">
						<h3>Sampaikan Kritik Saran Anda</h3>
						
					</div>

				</div>
				<div class="col-md-6 animate-box">
					<h3>Ketikan Sesuatu...</h3>
					<form  action="<?php echo base_url('kritik/tambah_kritik') ?>" method="post" >
						
						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="subject">Subject</label> -->
								<input type="text" name="name" class="form-control" placeholder="Masukkan Alamat Email Anda">
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
							<input type="submit" value="Kirim" class="btn btn-primary">
						</div>

					</form>		
				</div>
			</div>