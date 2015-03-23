<br>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="row">
            <div class="col-md-3 col-md-offset-1">
                <a href="<?php echo site_url('siswa/insert');?>" ><div class="btn btn-default">Tambah</div></a>
            </div>
            <div class="col-md-5">
                <h4>Halaman Mengelola Data Siswa</h4>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="colmd-10 col-md-offset-1">
                <table class="table table-striped table-hover">
                    <?php $data ?>
                    <thead>
                        <tr class="success">
                            <th>No Induk</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No Telepon</th>
                            <th>Pilihan</th>
                        </tr>
                    </thead>
                    <?php foreach ($data as $row):?>
                    <tr>
                        <td><?php echo $row->ID_MURID; ?></td>
                        <td><?php echo $row->NAMA; ?></td>
                        <td><?php echo $row->ALAMAT; ?></td>
                        <td><?php echo $row->NOMOR_TELEPON; ?></td>
                        <td><?php echo '<a href="edit/'; echo $row->ID_MURID;  echo '"><div class="btn btn-info">Edit</div></a>'; echo '<a href="delete/'; echo $row->ID_MURID; echo '"><div class="btn btn-danger">Hapus</div></a>"'?></td>
                    </tr>
                    <?php endforeach;?>
                </table>

            </div>
        </div>
    </div>
</div>