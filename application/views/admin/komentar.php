<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Admin</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="admin">Dashboard</a></li>
                <li class="breadcrumb-item active">Komentar</li>
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
                <div class="col-md-6">
                    <h6>Data Komentar Kegiatan</h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-reponsive">
                <table class="table table-striped dataTable">
                    <thead>
                        <tr>
                          <th>No</th>
                          <th>Id Pengunjung</th>
                          <th>Isi Komentar</th>
                          <th>Judul Kegiatan</th>
                          <th>Status</th>
                          <th>Aksi</th>                                     
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($komentar as $x => $d): ?>
                        <tr>
                            <td><?php echo $x+1 ?></td>
                              <td><?=$d->id_user?></td>
                              <td><?=$d->isi_komen?></td>
                              <td><?=$d->judul?></td>
                              <td><?=$d->status_komen?></td>
                            <td>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash" onclick="delete_komentar(<?=$d->id?>)"></i></button>
                                <button class="btn btn-primary btn-sm"><i class="fas fa-eye" data-toggle="modal" data-target="#verif_<?=$d->id?>"></i></button>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header bg-white">
            <div class="row">
                <div class="col-md-6">
                    <h6>Data Komentar Galeri</h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-reponsive">
                <table class="table table-striped dataTable">
                    <thead>
                        <tr>
                          <th>No</th>
                          <th>Id Pengunjung</th>
                          <th>Isi Komentar</th>
                          <th>Caption Galeri</th>
                          <th>Status</th>
                          <th>Aksi</th>                                     
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($komen as $x => $d): ?>
                        <tr>
                            <td><?php echo $x+1 ?></td>
                              <td><?=$d->id_user?></td>
                              <td><?=$d->isi_komen?></td>
                              <td><?=$d->caption?></td>
                              <td><?=$d->status_komen?></td>
                            <td>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash" onclick="delete_komentar(<?=$d->id?>)"></i></button>
                                <button class="btn btn-primary btn-sm"><i class="fas fa-eye" data-toggle="modal" data-target="#verif_<?=$d->id?>"></i></button>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php foreach($komentar as $x => $d): ?>
<div class="modal fade" id="verif_<?=$d->id?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Verifikasi Komentar</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url('admin/komen_verif/' . $d->id) ?>" method="post" enctype="multipart/form-data">
            <div class="modal-body">
            <div class="form-group">
                    <label>Id User</label>
                    <select class="form-control mr-2" name="id_user">
                    <option value="<?=$d->id_user?>"><?=$d->id_user?></option>
                </select>
                </div>
                <div class="form-group">
                    <label>Isi Komen</label>
                    <select class="form-control mr-2" name="isi">
                    <option value="<?=$d->isi_komen?>"><?=$d->isi_komen?></option>
                </select>
                </div>
                <div class="form-group">
                    <label>Aktifkan Komentar</label>
                    <select class="form-control mr-2" name="status">
                    <option value="">-Pilih_</option>
                    <option value="Aktif">Aktifkan</option>
                    <option value="Hide">Sembuyikan</option>
                </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach ?>

<script>
function delete_komentar(id) {
    var check = confirm('Yakin ingin menghapus data ?');

    if(check) {
        $.ajax({
            type: 'post',
            url : '<?=base_url('admin/delete_komentar')?>',
            data : {id:id},
            success: function(res) {
                if(res == 1) {
                    location.reload();
                }
            }, error: function(err) {
                console.log(err);
            }
        })
    }
}
</script>