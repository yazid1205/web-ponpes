<?php
    $ekstra        = $this->model->ekstra();
    $prestasi        = $this->model->prestasi();
    $staff        = $this->model->staff();
?>
    <aside id="fh5co-hero">
        <div class="flexslider">
            <ul class="slides">                
            <li style="background-image: url(images/img_bg_1.jpg);">
                <div class="overlay-gradient"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center slider-text">
                            <div class="slider-text-inner">
                                <h1>Selamat Datang di</h1>
                                    <h2>Website  <a href="home" target="_blank">SMPN 24 Banjarmasin</a> Silahkan Jelajahi dan Cari Informasi Lengkap Terkait Sekolah Kami</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url(images/img_bg_2.jpg);">
                <div class="overlay-gradient"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center slider-text">
                            <div class="slider-text-inner">
                                <h1>Tersedia Berbagai Info</h1>
                                    <h2>Kegiatan Prestasi Serta Galeri Photo SMPN 24 Banjarmasin Silahkan Jelajahi dan Cari Informasi Lengkap Terkait Sekolah Kami</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </li>              
            </ul>
        </div>
    </aside>

    <div id="fh5co-blog">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Berita Terbaru</h2>
                    <p>Berisi tentang informasi kegiatan sekolah atau informasi lainya terkait SMPN 24 Banjarmasi.</p>
                </div>
            </div>
            <div class="row row-padded-mb">
                <?php foreach ($info->result() as $x => $d): ?>
                <div class="col-md-4 animate-box">
                    <div class="fh5co-event">
                        <div class="date text-center"><span><a data-fancybox="gallery" href="<?= base_url($d->gambar) ?>"><img src="<?= base_url($d->gambar) ?>" height="50px" weight="50px"></a></span></div>
                        <h3><?= $d->judul ?></h3>
                        <p><?= substr($d->isi, 0,100) ?>...</p>
                        <p><a  href="<?php echo base_url('DetailBerita/index/' .$d->id); ?>">Read More</a></p>
                    </div>
                </div>
              <?php endforeach ?>
                </div>
        </div>
    </div>


    <div id="fh5co-counter" class="fh5co-counters" style="background-image: url(images/project-7.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row">                        
                        <div class="col-md-4 col-sm-6 text-center animate-box">
                            <span class="icon"><i class="icon-study"></i></span>
                            <span class="fh5co-counter js-counter" data-from="0" data-to="<?=$prestasi->num_rows()?>" data-speed="5000" data-refresh-interval="50"></span>
                            <span class="fh5co-counter-label">Prestasi</span>
                        </div>
                        <div class="col-md-4 col-sm-6 text-center animate-box">
                            <span class="icon"><i class="icon-bulb"></i></span>
                            <span class="fh5co-counter js-counter" data-from="0" data-to="<?=$ekstra->num_rows()?>" data-speed="5000" data-refresh-interval="50"></span>
                            <span class="fh5co-counter-label">Ekstrakulikuler</span>
                        </div>
                        <div class="col-md-4 col-sm-6 text-center animate-box">
                            <span class="icon"><i class="icon-head"></i></span>
                            <span class="fh5co-counter js-counter" data-from="0" data-to="<?=$staff->num_rows()?>" data-speed="5000" data-refresh-interval="50"></span>
                            <span class="fh5co-counter-label">Tenaga Pengajar</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
