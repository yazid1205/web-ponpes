<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Administrator</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="admin">Dashboard</a></li>
                <li class="breadcrumb-item active">Berita</li>
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
                    <h6>Data Berita</h6>
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
                          <th>Judul</th>
                          <th>Image</th>
                          <th width="300px">Isi</th>
                          <th>Status</th>
                          <th>Aksi</th>                                     
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($kegiatan->result() as $x => $d): ?>
                        <tr>
                            <td><?php echo $x+1 ?></td>
                              <td><?=$d->judul?></td>
                              <td><a data-fancybox="gallery" href="<?= base_url($d->gambar) ?>"><img src="<?= base_url($d->gambar) ?>" height="50px" weight="50px"></a></td>
                              <td><?=$d->isi?></td>
                              <td><?=$d->status?></td>
                            <td>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash" onclick="delete_kegiatan(<?=$d->id?>)"></i></button>
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
                <h6 class="modal-title">Tambah Kegiatan</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url('admin/tambah_kegiatan') ?>" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" class="form-control" name="judul">
                </div>
                <div class="form-group">
                    <label>Upload Foto</label>
                    <input type="file" class="form-control" name="gambar">
                </div>
                <div class="form-group">
                    <label>Isi</label>
                    <textarea class="form-control" name="isi"></textarea>
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

<?php foreach($kegiatan->result() as $d): ?>
<div class="modal fade" id="edit_<?=$d->id?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Edit Kegiatan</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url('admin/update_kegiatan/' . $d->id) ?>" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" class="form-control" name="judul" value="<?=$d->judul?>">
                </div>
                <div class="form-group">
                    <label>Upload Foto</label>
                    <input type="file" class="form-control" name="gambar" value="<?=$d->gambar?>">
                </div>
                <div class="form-group">
                    <label>Isi</label>
                    <input type="text" class="form-control" name="isi"  value="<?=$d->isi?>">
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
function delete_kegiatan(id) {
    var check = confirm('Yakin ingin menghapus data ?');

    if(check) {
        $.ajax({
            type: 'post',
            url : '<?=base_url('admin/delete_kegiatan')?>',
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