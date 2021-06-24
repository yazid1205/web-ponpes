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
                <li class="breadcrumb-item active">Kritik Dan Saran</li>
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
                    <h6>Data Kritik Dan Saran</h6>
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
                          <th>Kritik</th>
                          <th>Saran</th>
                          <th>Aksi</th>                                     
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($kritik->result() as $x => $d): ?>
                        <tr>
                            <td><?php echo $x+1 ?></td>
                              <td><?=$d->id_user?></td>
                              <td><?=$d->kritik?></td>
                              <td><?=$d->saran?></td>
                            <td>
                                <button class="btn btn-danger btn-sm"><i class="fas fa-times" onclick="delete_kritik(<?=$d->id?>)"></i></button>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
function delete_kegiatan(id) {
    var check = confirm('Yakin ingin menghapus data ?');

    if(check) {
        $.ajax({
            type: 'post',
            url : '<?=base_url('admin/delete_kritik')?>',
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