<?php 
    $user        = $this->model->user();
    $kegiatan        = $this->model->kegiatan();
    $fasilitas        = $this->model->fasilitas();
    $ekstra        = $this->model->ekstra();
    $prestasi        = $this->model->prestasi();
    $jadwal        = $this->model->jadwal();
    $staff        = $this->model->staff();
    $galeri        = $this->model->galeri();
    $kritik        = $this->model->kritik();
    $komentar        = $this->model->komentar();
?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="container">
    <?= alert(); ?>
    <div class="card">
        <div class="card-header bg-white">
            <div class="row">
                <div class="page-inner mt--5">
                    <h4>Selamat datang <?php echo $this->auth->user()->name ?></h4> <br> <h6> Dihalaman Dashboard Admin Web Profile SMPN 24 Banjarmasin...</h6>
                </div>
            </div>
        </div>
    </div>

<div class="page-inner mt--5">
    <div class="row">
        <div class="col-md-4">
            <div class="row">
             <div class="col-md-12">
                    <a href="<?=base_url('admin/user')?>">
                    <div class="card card-stats card-round card-box <?=($active == 'user') ? 'callout callout-success' : '' ?>">
                        <div class="card-body text-white bg-primary mb-3">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="nav-icon fas fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-stats">
                                    <div class="numbers text-center">
                                        <h5><p class="card-category">ADMIN<br>
                                            <?=$user->num_rows()?></p></h5>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-12">
                    <a href="<?=base_url('admin/kegiatan')?>">
                    <div class="card card-stats card-round card-box <?=($active == 'kegiatan') ? 'callout callout-success' : '' ?>">
                        <div class="card-body text-white bg-success mb-3">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="icon-grid text-success"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-stats">
                                    <div class="numbers text-center">
                                        <h5><p class="card-category">KEGIATAN<br><?=$kegiatan->num_rows()?></p>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                 <div class="col-md-12">
                    <a href="<?=base_url('admin/jadwal')?>">
                    <div class="card card-stats card-round card-box <?=($active == 'jadwal') ? 'callout callout-success' : '' ?>">
                        <div class="card-body text-white bg-dark mb-3">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="icon-grid text-success"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-stats">
                                    <div class="numbers text-center">
                                        <h5><p class="card-category">JADWAL<br><?=$jadwal->num_rows()?></p>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-12">
                    <a href="<?=base_url('admin/komentar')?>">
                    <div class="card card-stats card-round card-box <?=($active == 'komentar') ? 'callout callout-success' : '' ?>">
                        <div class="card-body text-white bg-dark mb-3">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="icon-grid text-success"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-stats">
                                    <div class="numbers text-center">
                                        <h5><p class="card-category">KOMENTAR<br><?=$komentar->num_rows()?></p>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                    <a href="<?=base_url('admin/staff')?>">
                    <div class="card card-stats card-round card-box <?=($active == 'staff') ? 'callout callout-success' : '' ?>">
                        <div class="card-body text-white bg-warning mb-3">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="icon-grid text-success"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-stats">
                                    <div class="numbers text-center">
                                        <h5><p class="card-category">STAFF/GURU<br><?=$staff->num_rows()?></p>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-12">
                    <a href="<?=base_url('admin/ekschool')?>">
                    <div class="card card-stats card-round card-box <?=($active == 'ekstra') ? 'callout callout-success' : '' ?>">
                        <div class="card-body text-white bg-info mb-3">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="icon-grid text-success"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-stats">
                                    <div class="numbers text-center">
                                        <h5><p class="card-category">EKTRAKULIKULER<br><?=$ekstra->num_rows()?></p>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-12">
                    <a href="<?=base_url('admin/kritik')?>">
                    <div class="card card-stats card-round card-box <?=($active == 'kritik') ? 'callout callout-success' : '' ?>">
                        <div class="card-body text-white bg-warning mb-3">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="icon-grid text-success"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-stats">
                                    <div class="numbers text-center">
                                        <h5><p class="card-category">KRITIK & SARAN<br><?=$kritik->num_rows()?></p>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                 <div class="col-md-12">
                    <a href="<?=base_url('admin/galeri')?>">
                    <div class="card card-stats card-round card-box <?=($active == 'galeri') ? 'callout callout-success' : '' ?>">
                        <div class="card-body text-white bg-danger mb-3">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="icon-grid text-success"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-stats">
                                    <div class="numbers text-center">
                                        <h5><p class="card-category">GALERI<br><?=$galeri->num_rows()?></p>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-12">
                    <a href="<?=base_url('admin/fasilitas')?>">
                    <div class="card card-stats card-round card-box <?=($active == 'fasilitas') ? 'callout callout-success' : '' ?>">
                        <div class="card-body text-white bg-secondary mb-3">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="icon-grid text-success"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-stats">
                                    <div class="numbers text-center">
                                        <h5><p class="card-category">FASILITAS<br><?=$fasilitas->num_rows()?></p>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
               <div class="col-md-12">
                    <a href="<?=base_url('admin/prestasi')?>">
                    <div class="card card-stats card-round card-box <?=($active == 'prestasi') ? 'callout callout-success' : '' ?>">
                        <div class="card-body text-white bg-secondary mb-3">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="icon-grid text-success"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-stats">
                                    <div class="numbers text-center">
                                        <h5><p class="card-category">Prestasi<br><?=$prestasi->num_rows()?></p>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>