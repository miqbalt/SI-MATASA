<br>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <a href="<?php echo site_url('kelas/insert');?>" ><div class="btn btn-default">Tambah</div></a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="colmd-10 col-md-offset-1">
                <table class="table table-striped table-hover">
                    <?php $data ?>
                    <thead>
                    <tr class="success">
                        <th>ID Kelas</th>
                        <th>Nama Kelas</th>
                        <th>Pilihan</th>
                    </tr>
                    </thead>
                    <?php foreach ($data as $row):?>
                        <tr>
                            <td><?php echo $row->ID_KELAS; ?></td>
                            <td><?php echo $row->NAMA_KELAS; ?></td>
                            <td><?php echo '<a href="edit/'; echo $row->ID_KELAS;  echo '"><div class="btn btn-info">Edit</div></a>'; echo '<a href="delete/'; echo $row->ID_KELAS; echo '"><div class="btn btn-danger">Hapus</div></a>"'?></td>
                        </tr>
                    <?php endforeach;?>
                </table>

            </div>
        </div>
    </div>
</div>