<br>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <a href="<?php echo site_url('siswa/insert');?>" ><div class="btn btn-default">Tambah</div></a>
                <div class="btn btn-default">Ubah</div>
                <div class="btn btn-default">Hapus</div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="colmd-10 col-md-offset-1">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr class="success">
                            <th>No Induk</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No Telepon</th>
                        </tr>
                    </thead>
                    <?php foreach ($data as $row):?>
                    <tr>
                        <td><?php echo $row->ID_MURID; ?></td>
                        <td><?php echo $row->NAMA; ?></td>
                        <td><?php echo $row->ALAMAT; ?></td>
                        <td><?php echo $row->NOMOR_TELEPON; ?></td>
                    </tr>
                    <?php endforeach;?>
                </table>

            </div>
        </div>
    </div>
</div>