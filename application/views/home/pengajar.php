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
              <p>Dihalaman Tenaga Pondok Pesantren Tarbiyatul Furqan</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Jelajah</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Selamat Datang</h1>
              <p>Dihalaman Info Tenaga Pengajar Pondok Pesantren Tarbiyatul Furqan</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Jelajah</a></p>
            </div>
          </div>
        </div>
	</div>
	</div>
	<div id="fh5co-blog">
			<div class="row animate-box">
				<div class="col-md-7 col-md-offset-2 text-center fh5co-heading">
					<h2>Halaman Pengajar</h2>
					<p>Berisi tentang informasi tenaga pengajar di Ponpen Tarbiyatul Furqon.</p>
				</div>
			</div>
			<div class="row row-padded-mb">
					<div class="card-body">
            <div class="table-reponsive">
                <table class="table table-striped dataTable">
                    <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Nip</th>
                          <th>Pendidikan</th>
                          <th>Jabatan</th>
                          <th>TTL</th>
                          <th>Jenis Kelamin</th>
                          <th>Telp</th>
                          <th>Email</th>
                          <th>Status</th>                      
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($staff->result() as $x => $d): ?>
                        <tr>
                              <td><?=$x+1?></td>
                              <td><?=$d->name?></td>
                              <td><?=$d->nip?></td>
                              <td><?=$d->pendidikan?></td>
                              <td><?=$d->jabatan?></td>
                              <td><?=$d->tempat_lahir?>, <?=$d->tgl_lahir?></td>
                              <td><?=$d->j_kelamin?></td>
                              <td><?=$d->telp?></td>
                              <td><?=$d->email?></td>
                              <td><?=$d->status?></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
				</div>
				
		</div>

