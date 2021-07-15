	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(images/img_bg_4.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">Tenaga Pengajar &amp; Staff</h1>
									<h2>Selamat Datang Di Halaman Informasi Tenaga Pengajar dan Staff SMPN 24 Banjarmasin</h2>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>
	
    <div id="fh5co-fasilitas" class="fh5co-bg-section">
		<div class="container">
        <div class="row text-center">
            <h2><span>Data Guru dan Staff</span></h2>
        </div>
        <div class="row">
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
                              <td><?=$d->status?></td> 
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
  </div>
