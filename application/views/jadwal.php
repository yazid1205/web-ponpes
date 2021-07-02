
	<div id="fh5co-blog" class="fh5co-counters" style="background-image: url(images/img_bg_3.jpg);" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Jadwal Mata Pelajaran</h2>
					<p>Jadwal Mata Pelajaran SMPN 24 Banjarmasin Tahun Akademik 2020/2021</p>
				</div>
			</div>
			<div class="row row-padded-mb">
				<div class="col-md-12 animate-box">
					<div class="fh5co-event">
						<div class="date text-center"><span>Kelas<br><?php foreach ($jadwala->result() as $x => $d): ?><?=$d->kelas?></span></div>
						<h3><a href="#">Wali Kelas: <?=$d->wali?></a></h3>
						<p><span><a data-fancybox="gallery" href="<?= base_url($d->image) ?>"><img src="<?= base_url($d->image) ?>" height="100%"></a></span> </p>
                        <?php endforeach ?>
					</div>
				</div>
				<div class="col-md-12 animate-box">
					<div class="fh5co-event">
            <div class="date text-center"><span>Kelas<br><?php foreach ($jadwalb->result() as $x => $d): ?><?=$d->kelas?></span></div>
            <h3><a href="#">Wali Kelas: <?=$d->wali?></a></h3>
            <p><span><a data-fancybox="gallery" href="<?= base_url($d->image) ?>"><img src="<?= base_url($d->image) ?>" height="100%"></a></span> </p>
                        <?php endforeach ?></div>
				</div>
				
			</div>
		</div>
	</div>

