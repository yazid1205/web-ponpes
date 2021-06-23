
	<div id="fh5co-blog" class="fh5co-counters" style="background-image: url(images/img_bg_3.jpg);" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Jadwal Mata Pelajaran</h2>
					<p>Jadwal Mata Pelajaran SMPN 24 Banjarmasin Tahun Akademik 2020/2021</p>
				</div>
			</div>
			<div class="row row-padded-mb">
				<div class="col-md-4 animate-box">
					<div class="fh5co-event">
						<div class="date text-center"><span>Kelas<br>VII A</span></div>
						<h3><a href="#">Nama Wali Kelas</a></h3>
						<p><table class="table table-striped dataTable">
                    <thead>
                        <tr>
                          <th>No</th>
                          <th>Mata Pelajaran</th>
                          <th>Semester</th>
                          <th>Tahun Ajaran</th>                               
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tujuha->result() as $x => $d): ?>
                        <tr>
                              <td><?=$x+1?></td>
                              <td><?=$d->mapel?></td>
                              <td><?=$d->semester?></td>
                              <td><?=$d->tahun_ajaran?></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table></p>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="fh5co-event">
						<div class="date text-center"><span>Kelas<br>VII B</span></div>
						<h3><a href="#">Nama Wali Kelas</a></h3>
						<p><table class="table table-striped dataTable">
                    <thead>
                        <tr>
                          <th>No</th>
                          <th>Mata Pelajaran</th>
                          <th>Semester</th>
                          <th>Tahun Ajaran</th>                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tujuhb->result() as $x => $d): ?>
                        <tr>
                              <td><?=$x+1?></td>
                              <td><?=$d->mapel?></td>
                              <td><?=$d->semester?></td>
                              <td><?=$d->tahun_ajaran?></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table></p>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="fh5co-event">
						<div class="date text-center"><span>Kelas<br>VIII A</span></div>
						<h3><a href="#">Nama Wali Kelas</a></h3>
						<p><table class="table table-striped dataTable">
                    <thead>
                        <tr>
                          <th>No</th>
                          <th>Mata Pelajaran</th>
                          <th>Semester</th>
                          <th>Tahun Ajaran</th>                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($delapana->result() as $x => $d): ?>
                        <tr>
                              <td><?=$x+1?></td>
                              <td><?=$d->mapel?></td>
                              <td><?=$d->semester?></td>
                              <td><?=$d->tahun_ajaran?></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table></p>
					</div>
				</div>
			</div>
			<div class="row row-padded-mb">
				<div class="col-md-4 animate-box">
					<div class="fh5co-event">
						<div class="date text-center"><span>Kelas<br>VIII B</span></div>
						<h3><a href="#">Nama Wali Kelas</a></h3>
						<p><table class="table table-striped dataTable">
                    <thead>
                        <tr>
                          <th>No</th>
                          <th>Mata Pelajaran</th>
                          <th>Semester</th>
                          <th>Tahun Ajaran</th>                       
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($delapanb->result() as $x => $d): ?>
                        <tr>
                              <td><?=$x+1?></td>
                              <td><?=$d->mapel?></td>
                              <td><?=$d->semester?></td>
                              <td><?=$d->tahun_ajaran?></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table></p>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="fh5co-event">
						<div class="date text-center"><span>Kelas<br>IX A</span></div>
						<h3><a href="#">Nama Wali Kelas</a></h3>
						<p><table class="table table-striped dataTable">
                    <thead>
                        <tr>
                          <th>No</th>
                          <th>Mata Pelajaran</th>
                          <th>Semester</th>
                          <th>Tahun Ajaran</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($sembilana->result() as $x => $d): ?>
                        <tr>
                              <td><?=$x+1?></td>
                              <td><?=$d->mapel?></td>
                              <td><?=$d->semester?></td>
                              <td><?=$d->tahun_ajaran?></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table></p>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="fh5co-event">
						<div class="date text-center"><span>Kelas<br>IX A</span></div>
						<h3><a href="#">Nama Wali Kelas</a></h3>
						<p><table class="table table-striped dataTable">
                    <thead>
                        <tr>
                          <th>No</th>
                          <th>Mata Pelajaran</th>
                          <th>Semester</th>
                          <th>Tahun Ajaran</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($sembilanb->result() as $x => $d): ?>
                        <tr>
                              <td><?=$x+1?></td>
                              <td><?=$d->mapel?></td>
                              <td><?=$d->semester?></td>
                              <td><?=$d->tahun_ajaran?></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table></p>
					</div>
				</div>
			</div>
			
		</div>
	</div>

