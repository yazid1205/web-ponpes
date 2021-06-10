<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Admin</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                <li class="breadcrumb-item active">Admin</li>
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
                    <h6>Data Karyawan</h6>
                </div>
                <div class="col-md-6 text-right">
                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add"><i class="fas fa-plus-circle mr-1"></i>Tambah</button>
                </div>
            </div>
        </div>
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
                          <th>Aksi</th>                                     
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
                            <td>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-times" onclick="delete_staff(<?=$d->id?>)"></i></button>
                                <button class="btn btn-success btn-sm"><i class="fas fa-pencil-alt" data-toggle="modal" data-target="#edit_<?=$d->id?>"></i></button>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Tambah Pegawai</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url('admin/tambah_staff') ?>" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label>NIP</label>
                    <input type="text" class="form-control" name="nip">
                </div>
                <div class="form-group">
                    <label>Pendidikan</label>
                    <input type="text" class="form-control" name="pendidikan">
                </div>
                <div class="form-group">
                    <label>Jabatan</label>
                    <input type="text" class="form-control" name="jabatan">
                </div>
                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="password" class="form-control" name="tempat_lahir">
                    <label>Tanggal Lahir</label>
                    <input type="password" class="form-control" name="tgl_lahir">
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <input type="text" class="form-control" name="j_kelamin">
                </div>
                <div class="form-group">
                    <label>Telp</label>
                    <input type="text" class="form-control" name="telp">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <input type="text" class="form-control" name="status">
                </div>
                <div class="form-group">
                    <label>Upload Foto</label>
                    <input type="file" class="form-control" name="image">
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

<?php foreach($staff->result() as $d): ?>
<div class="modal fade" id="edit_<?=$d->id?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Edit Admin</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url('admin/update_staff/' . $d->id) ?>" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label>NIP</label>
                    <input type="text" class="form-control" name="nip">
                </div>
                <div class="form-group">
                    <label>Pendidikan</label>
                    <input type="text" class="form-control" name="pendidikan">
                </div>
                <div class="form-group">
                    <label>Jabatan</label>
                    <input type="text" class="form-control" name="jabatan">
                </div>
                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="password" class="form-control" name="tempat_lahir">
                    <label>Tanggal Lahir</label>
                    <input type="password" class="form-control" name="tgl_lahir">
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <input type="text" class="form-control" name="j_kelamin">
                </div>
                <div class="form-group">
                    <label>Telp</label>
                    <input type="text" class="form-control" name="telp">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <input type="text" class="form-control" name="status">
                </div>
                <div class="form-group">
                    <label>Upload Foto</label>
                    <input type="file" class="form-control" name="image">
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
function delete_staff(id) {
    var check = confirm('Yakin ingin menghapus data ?');

    if(check) {
        $.ajax({
            type: 'post',
            url : '<?=base_url('admin/delete_staff')?>',
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