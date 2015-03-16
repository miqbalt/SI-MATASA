<?php
/**
 * Created by PhpStorm.
 * User: Muhammad Iqbal T
 * Date: 15/03/2015
 * Time: 18:26
 */
?>
<br>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <a href="<?php echo site_url('guru/insert');?>" ><div class="btn btn-default">Tambah</div></a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="colmd-10 col-md-offset-1">
                <table class="table table-striped table-hover">
                    <?php $data ?>
                    <thead>
                    <tr class="success">
                        <th>ID Guru</th>
                        <th>Nama</th>
                        <th>Nama Mapel</th>
                        <th>Alamat</th>
                        <th>No Telepon</th>
                        <th>Jenis Kelamin</th>
                        <th>Jabatan</th>
                        <th>Pilihan</th>
                    </tr>
                    </thead>
                    <?php foreach ($data as $row):?>
                        <tr>
                            <td><?php echo $row->ID_GURU; ?></td>
                            <td><?php echo $row->NAMA_GURU; ?></td>
                            <td><?php echo $row->ID_MATA_PELAJARAN; ?></td>
                            <td><?php echo $row->ALAMAT_GURU; ?></td>
                            <td><?php echo $row->NOMOR_TELEPON_GURU; ?></td>
                            <td><?php echo $row->JENIS_KELAMIN_GURU; ?></td>
                            <td><?php echo $row->JABATAN_GURU; ?></td>
                            <td><?php echo '<a href="edit/'; echo $row->ID_GURU;  echo '"><div class="btn btn-info">Edit</div></a>'; echo '<a href="delete/'; echo $row->ID_GURU; echo '"><div class="btn btn-danger">Hapus</div></a>"'?></td>
                        </tr>
                    <?php endforeach;?>
                    </table>

</div>
</div>
</div>
</div>