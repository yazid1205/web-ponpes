<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Jadwal Pelajaran</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="admin">Dashboard</a></li>
                <li class="breadcrumb-item active">Jadwal Pelajaran</li>
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
                    <h6>Data Jadwal Pelajaran</h6>
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
                          <th>Wali Kelas</th>
                          <th>Kelas</th> 
                          <th>Semester</th>
                          <th>Tahun Ajaran</th>
                          <th>Jadwal</th>
                          <th>Aksi</th>                                     
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($jadwal->result() as $x => $d): ?>
                        <tr>
                              <td><?=$x+1?></td>
                              <td><?=$d->wali?></td>
                              <td><?=$d->kelas?></td>
                              <td><?=$d->semester?></td>
                              <td><?=$d->tahun_ajaran?></td>
                              <td><a data-fancybox="gallery" href="<?= base_url($d->image) ?>"><img src="<?= base_url($d->image) ?>" height="50px" weigth="50px"></a></td>
                            <td>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash" onclick="delete_jadwal(<?=$d->id?>)"></i></button>
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
                <h6 class="modal-title">Tambah Mata Pelajaran</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url('admin/tambah_jadwal') ?>" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="form-group">
                    <label>Nama Wali</label>
                    <input type="text" class="form-control" name="wali">
                </div>
                <div class="form-group">
                    <label>Kelas</label>
                    <select class="form-control mr-2" name="kelas">
                    <option value="">-Pilih Kelas-</option>
                    <option value="VII A">VII A</option>
                    <option value="VII B">VII B</option>
                    <option value="VII C">VII C</option>
                    <option value="VII D">VII D</option>
                    <option value="VII E">VII E</option>
                    <option value="VII F">VII F</option>

                    <option value="VIII A">VIII A</option>
                    <option value="VIII B">VIII B</option>
                    <option value="VIII C">VIII C</option>
                    <option value="VIII D">VIII D</option>
                    <option value="VIII E">VIII E</option>
                    <option value="VIII F">VIII F</option>
                    <option value="VIII G">VIII G</option>

                    <option value="IX A">IX A</option>
                    <option value="IX B">IX B</option>
                    <option value="IX C">IX C</option>
                    <option value="IX D">IX D</option>
                    <option value="IX E">IX E</option>
                    <option value="IX F">IX F</option>
                    <option value="IX G">IX G</option>
                    <option value="IX H">IX H</option>
                    <option value="IX I">IX I</option>
                </select>
                </div>
                <div class="form-group">
                    <label>Semester</label>
                    <input type="text" class="form-control" name="semester">
                </div>
                <div class="form-group">
                    <label>Tahun Ajaran</label>
                    <input type="text" class="form-control" name="tahun">
                </div>
                <div class="form-group">
                    <label>Upload Jadwal</label>
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

<?php foreach($jadwal->result() as $d): ?>
<div class="modal fade" id="edit_<?=$d->id?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Edit Jadwal Pelajaran</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url('admin/update_jadwal/' . $d->id) ?>" method="post" enctype="multipart/form-data">
            <div class="modal-body">
               <div class="form-group">
                    <label>Nama Wali</label>
                    <input type="text" class="form-control" name="wali" value="<?=$d->wali?>">
                </div>
                <div class="form-group">
                    <label>Kelas</label>
                    <select class="form-control mr-2" name="kelas">
                    <option value="<?=$d->kelas?>"><?=$d->kelas?></option>
                    <option value="VII A">VII A</option>
                    <option value="VII B">VII B</option>
                    <option value="VII C">VII C</option>
                    <option value="VII D">VII D</option>
                    <option value="VII E">VII E</option>
                    <option value="VII F">VII F</option>

                    <option value="VIII A">VIII A</option>
                    <option value="VIII B">VIII B</option>
                    <option value="VIII C">VIII C</option>
                    <option value="VIII D">VIII D</option>
                    <option value="VIII E">VIII E</option>
                    <option value="VIII F">VIII F</option>
                    <option value="VIII G">VIII G</option>

                    <option value="IX A">IX A</option>
                    <option value="IX B">IX B</option>
                    <option value="IX C">IX C</option>
                    <option value="IX D">IX D</option>
                    <option value="IX E">IX E</option>
                    <option value="IX F">IX F</option>
                    <option value="IX G">IX G</option>
                    <option value="IX H">IX H</option>
                    <option value="IX I">IX I</option>
                </select>
                </div>
                <div class="form-group">
                    <label>Semester</label>
                    <input type="text" class="form-control" name="semester" value="<?=$d->semester?>">
                </div>
                <div class="form-group">
                    <label>Tahun Ajaran</label>
                    <input type="text" class="form-control" name="tahun" value="<?=$d->tahun_ajaran?>">
                </div>
                <div class="form-group">
                    <label>Upload Jadwal</label>
                    <input type="file" class="form-control" name="image" value="<?=$d->image?>">
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
function delete_jadwal(id) {
    var check = confirm('Yakin ingin menghapus data ?');

    if(check) {
        $.ajax({
            type: 'post',
            url : '<?=base_url('admin/delete_jadwal')?>',
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