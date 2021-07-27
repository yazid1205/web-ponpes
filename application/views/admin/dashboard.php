<?php 
    $user        = $this->model->user();
    $kegiatan        = $this->model->kegiatan();
    $staff        = $this->model->staff();
    $jadwal        = $this->model->jadwal();
    $galeri        = $this->model->galeri();
    $kritik        = $this->model->kritik()
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
                    <h4>Selamat datang <?php echo $this->auth->user()->name ?></h4> <br> <h6> Dihalaman Dashboard Admin Web Profil Pondok Pesantren Tarbiyatul Furqan...</h6>
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
                        <div class="card-body mb-3">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="nav-icon fas fa-user fa-4x"></i>
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
                        <div class="card-body mb-3">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="nav-icon fas fa-calendar-week fa-4x"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-stats">
                                    <div class="numbers text-center">
                                        <h5><p class="card-category">BERITA<br><?=$kegiatan->num_rows()?></p>
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
                        <div class="card-body mb-3">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="nav-icon fas fa-users fa-4x"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-stats">
                                    <div class="numbers text-center">
                                        <h5><p class="card-category">Tenaga Pengajar<br><?=$staff->num_rows()?></p>
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
                        <div class="card-body mb-3">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="nav-icon fas fa-comment fa-4x"></i>
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
                        <div class="card-body mb-3">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="nav-icon fas fa-images fa-4x"></i>
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
                    <a href="<?=base_url('admin/jadwal')?>">
                    <div class="card card-stats card-round card-box <?=($active == 'jadwal') ? 'callout callout-success' : '' ?>">
                        <div class="card-body mb-3">
                            <div class="row">
                                <div class="col-5">
                                    <div class="icon-big text-center">
                                        <i class="nav-icon fas fa-book fa-4x"></i>
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
            </div>
        </div>

    </div>
</div>