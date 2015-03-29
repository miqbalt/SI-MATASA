<br>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="row">
            <div class="col-md-3 col-md-offset-1">
                <a href="<?php echo site_url('mapel/insert');?>" ><div class="btn btn-danger">Tambah</div></a>
            </div>
            <div class="col-md-5">
                <h4 style="font-weight: bold;background-color: #ffffff; padding: 10px 10px 10px 10px; margin-left: auto;margin-right: auto;margin-top: auto;margin-bottom: auto;text-align: center;border-radius: 10px;border-bottom-width: thick;border-bottom-color: #eeeeee;border-bottom-style: solid">Halaman Mengelola Data Mata Pelajaran</h4>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="colmd-10 col-md-offset-1">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr class="success">
                            <th>NO</th>
                            <th>ID Mata Pelajaran</th>
                            <th>Nama Mata Pelajaran</th>
                            <th>Nilai SKM</th>
                            <th>Pilihan</th>
                        </tr>
                    </thead>

                    <?php
                    if($mapel)
                    {
                    	$no = 1;
                    	foreach ($mapel as $data) :
                     ?>
                    
                 	<tr>
                 		<td><?php echo $no; ?></td>
                 		<td><?php echo $data->ID_MATA_PELAJARAN; ?></td>
                 		<td><?php echo $data->NAMA_MATA_PELAJARAN; ?></td>
                 		<td><?php echo $data->NILAI_SKM; ?></td>
                        <td><?php echo '<a href="edit/'; echo $data->ID_MATA_PELAJARAN;  echo '">
                        <div class="btn btn-info colmd-10 col-md-offset-3">Edit</div></a>'; echo '
                        <a href="delete/'; echo $data->ID_MATA_PELAJARAN; echo '">
                        <div class="btn btn-danger colmd-10 col-md-offset-1">Hapus</div></a>"'?></td>
                 		</td>
                 	</tr>
                 	<?php
                 	$no++;
                 	endforeach;
                 	}
                 	else
                 	{
                 		echo "Data kosong";
                 	}
                 	?>
                </table>

       		 </div>
    	</div>
    </div>
</div>