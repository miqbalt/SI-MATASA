<br>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="row">
            <div class="col-md-3 col-md-offset-1">
                <a href="<?php echo site_url('kelas/insert');?>" ><div class="btn btn-danger">Tambah Kelas Baru</div></a>
            </div>
            <div class="col-md-5">
                <h4 style="font-weight: bold;background-color: #ffffff; padding: 10px 10px 10px 10px; margin-left: auto;margin-right: auto;margin-top: auto;margin-bottom: auto;text-align: center;border-radius: 10px;border-bottom-width: thick;border-bottom-color: #eeeeee;border-bottom-style: solid">Halaman Mengelola Data Kelas</h4>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <table class="table table-striped table-hover">
                    <?php $data ?>
                    <thead>
                    <tr class="success">
                        <th >ID Kelas</th>
                        <th >Nama Kelas</th>
                        <th >Pilihan</th>
                    </tr>
                    </thead>
                    <?php foreach ($data as $row):?>
                        <tr>
                            <td><?php echo $row->ID_KELAS; ?></td>
                            <td><?php echo $row->NAMA_KELAS ; ?></td>
                            <td><?php echo '<a href="edit/'; echo $row->ID_KELAS;  echo '">
                            <div class="btn btn-info colmd-10 col-md-offset-3">Edit</div></a>'; echo '
                            <a href="delete/'; echo $row->ID_KELAS; echo '">
                            <div class="btn btn-danger colmd-10 col-md-offset-1">Hapus</div></a>"'?></td>
                            
                        </tr>
                    <?php endforeach;?>
                </table>

            </div>
        </div>
    </div>
</div>