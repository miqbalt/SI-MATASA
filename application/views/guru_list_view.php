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
    <div class="col-md-10 col-md-offset-0" style="margin-left: 5%">
        <div class="row">
            <div class="col-md-3 col-md-offset-1">
                <a href="<?php echo site_url('guru/insert');?>" ><div class="btn btn-danger" style="background-color: red">Tambah Guru Baru</div></a>
            </div>
            <div class="col-md-5">
                <h4 style="font-weight: bold;background-color: #ffffff; padding: 10px 10px 10px 10px; margin-left: auto;margin-right: auto;margin-top: auto;margin-bottom: auto;text-align: center;border-radius: 10px;border-bottom-width: thick;border-bottom-color: #eeeeee;border-bottom-style: solid">Halaman Mengelola Data Guru</h4>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="colmd-10 col-md-offset-1">
                <table class="table table-striped table-hover">
                    <?php $data ?>
                    <thead>
                    <tr class="success" style="background-color: #00CC00;">
                        <th>ID Guru</th>
                        <th>Nama</th>
                        <th>Nama Mapel</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Jabatan</th>
                        <th>Pilihan</th>
                    </tr>
                    </thead>
                    <?php foreach ($data as $row):?>
                        <tr>
                            <td><?php echo $row->ID_GURU; ?></td>
                            <td><?php echo $row->NAMA_GURU; ?></td>
                            <td><?php $hehe = $this->db->query("SELECT mata_pelajaran.nama_mata_pelajaran from mata_pelajaran where mata_pelajaran.id_mata_pelajaran = ".$row->ID_MATA_PELAJARAN.";"); foreach($hehe->result_array() as $rows) echo $rows['nama_mata_pelajaran'];?></td>
                            <td><?php echo $row->ALAMAT_GURU; ?></td>
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